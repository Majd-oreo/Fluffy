<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;
use App\Models\Appointment;
use Carbon\Carbon;
use App\Models\Review;
use App\Models\Pet;
use App\Models\Employee;
use App\Notifications\AppointmentBooked;
use Barryvdh\DomPDF\Facade\Pdf;





class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
public function downloadPDF($id)
{
    $appointment = Appointment::with(['service', 'pet', 'category'])->findOrFail($id);

    $pdf = Pdf::loadView('User.pdf-appointment', compact('appointment'));
    return $pdf->download('Appointment_' . $appointment->id . '.pdf');
}
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    

    /**
     * Store a newly created resource in storage.
     */
    /**
 * Store a newly created resource in storage.
 */
public function showBookingPage($service_id)
{
    $service = Service::findOrFail($service_id);

    return view('user.appointment', compact('service'));  // Change 'appoinment' to 'appointment'
}


public function viewAppointment(Appointment $appointment)
{
    if (auth()->id() !== $appointment->user_id) {
        abort(403);
    }

    return view('user.appointment-view', compact('appointment'));
}
public function bookAppointment(Request $request)
{
    if (!auth()->check()) {
        return redirect()->back()->with('error', 'You must be logged in to book an appointment.');
    }

    $user = auth()->user();

    $validatedData = $request->validate([
        'start_time' => 'required|date|after:now',
        'category_id' => 'required|exists:categories,id',
        'service_id' => 'required|exists:services,id',
        'pet_id' => 'required|exists:pets,id',
    ]);

    $pet = $user->pets()->find($request->pet_id);
    if (!$pet) {
        return redirect()->back()->with('error', 'Invalid pet selected.');
    }

    $start_time = Carbon::parse($request->start_time);

    // Check working hours (10:00 AM to 6:00 PM)
    if ($start_time->hour < 10 || $start_time->hour >= 18) {
        return redirect()->back()->with('error', 'Appointments can only be booked between 10:00 AM and 6:00 PM.');
    }

    $category = Category::find($request->category_id);
    $durationMinutes = $category->duration ?? 30;
    $end_time = $start_time->copy()->addMinutes($durationMinutes);

    $existingBooking = Appointment::where('service_id', $request->service_id)
        ->where('status', '!=', 'Canceled')
        ->where(function ($query) use ($start_time, $end_time) {
            $query->where(function ($q) use ($start_time, $end_time) {
                $q->where('start_time', '<', $end_time)
                  ->whereRaw("DATE_ADD(start_time, INTERVAL (SELECT duration FROM categories WHERE categories.id = appointments.category_id) MINUTE) > ?", [$start_time]);
            });
        })
        ->exists();

    if ($existingBooking) {
        return redirect()->back()->with('booking_error', 'The selected time overlaps with another active appointment. Please choose a different time.');
    }

    $service = Service::with('categories')->find($request->service_id);
    if (!$service->categories->contains('id', $request->category_id)) {
        return redirect()->back()->with('error', 'Invalid category selected for this service.');
    }

    $appointment = new Appointment();
    $appointment->user_id = auth()->id();
    $appointment->service_id = $request->service_id;
    $appointment->pet_id = $request->pet_id;
    $appointment->start_time = $start_time;
    $appointment->status = 'Pending';
    $appointment->category_id = $request->category_id;
    $appointment->save();

    $employee = Employee::where('service_id', $appointment->service_id)->first();
    if ($employee && $employee->user) {
        $employee->user->notify(new AppointmentBooked($appointment));
    }

    return redirect()->route('appointment.view', $appointment->id)
        ->with('success', 'Your appointment has been successfully booked.');
}
    /**
     * Display the specified resource.
     */
    public function showAppointment($id)
{
    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'You must be logged in to book an appointment.');
    }

    $user = auth()->user();
    $service = Service::with('categories', 'images')->findOrFail($id);

    $appointment = Appointment::where('service_id', $id)
                              ->where('user_id', $user->id)
                              ->latest()
                              ->first();

    $hasAppointment = $appointment ? true : false;
 

    $bookedTimes = Appointment::where('service_id', $id)
        ->pluck('start_time')
        ->map(fn($startTime) => Carbon::parse($startTime)->format('Y-m-d\TH:i'))
        ->toArray();


        return view('user.appointment', compact('service', 'appointment', 'bookedTimes'));
       
}


public function storeReview(Request $request, $service_id)
{
    $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'required|string|max:500',
    ]);

    // Fetch the latest appointment for the given service and user
    $appointment = Appointment::where('service_id', $service_id)
                              ->where('user_id', auth()->id())
                              ->latest()
                              ->first();

    if (!$appointment) {
        return redirect()->back()->with('error', 'You can only review a service after booking an appointment.');
    }

    // Check if the user has at least one completed appointment for the service
    $completedAppointment = Appointment::where('service_id', $service_id)
                                       ->where('user_id', auth()->id())
                                       ->where('status', 'completed')
                                       ->first();

    if (!$completedAppointment) {
        return redirect()->back()->with('error', 'You can only review a service after completing at least one appointment.');
    }

    // Check if the user has already submitted a review for this service
    $review = Review::where('user_id', auth()->id())
                    ->where('service_id', $service_id)
                    ->first();

    if ($review) {
        // Update existing review
        $review->update([
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Review updated successfully!');
    }

    // Create a new review if no existing review
    Review::create([
        'user_id' => auth()->id(),
        'service_id' => $service_id,
        'appointment_id' => $appointment->id,
        'rating' => $request->rating,
        'comment' => $request->comment,
    ]);

    return redirect()->back()->with('success', 'Review submitted successfully!');
}

public function editReview($review_id)
{
    $review = Review::find($review_id);

    if (!$review || $review->user_id != auth()->id()) {
        return redirect()->back()->with('error', 'You are not authorized to edit this review.');
    }

    return view('user.editreview', compact('review'));
}

public function updateReview(Request $request, $review_id)
{
    $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'required|string|max:500',
    ]);

    $review = Review::find($review_id);

    if (!$review || $review->user_id != auth()->id()) {
        return redirect()->back()->with('error', 'You are not authorized to update this review.');
    }

    $review->update([
        'rating' => $request->rating,
        'comment' => $request->comment,
    ]);

    return redirect()->route('service.show', $review->service_id)->with('success', 'Review updated successfully!');
}
public function deleteReview(Review $review)
{
    if ($review->user_id !== auth()->id()) {
        return redirect()->back()->with('error', 'You are not authorized to delete this review.');
    }

    $review->delete();
    return redirect()->back()->with('success', 'Review deleted successfully.');
}

    public function userappointments(Request $request)
{
    $appointments = Appointment::with(['category', 'pet'])
    ->where('user_id', auth()->id());



    if ($request->has('status') && in_array($request->status, ['pending', 'canceled', 'completed'])) {
        $appointments = $appointments->where('status', $request->status);
    }

    if ($request->has('service') && !empty($request->service)) {
        $appointments = $appointments->whereHas('service', function($query) use ($request) {
            $query->where('name', 'like', '%' . $request->service . '%');
        });
    }

    if ($request->has('pet') && !empty($request->pet)) {
        $appointments = $appointments->whereHas('pet', function($query) use ($request) {
            $query->where('name', 'like', '%' . $request->pet . '%');
        });
    }



    if ($request->has('date') && !empty($request->date)) {
        $appointments = $appointments->whereDate('start_time', $request->date);
    }

    $appointments = $appointments->paginate(6);

    return view('user.user-appointments', compact('appointments'));
}
public function getCategoryPrice($id)
{
    $category = Category::find($id);

    if (!$category) {
        return response()->json(['error' => 'Category not found'], 404);
    }

    return response()->json(['price' => $category->price]);
}

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $appointment = Appointment::findOrFail($id);

    if ($appointment->user_id !== auth()->id()) {
        return redirect()->back()->with('error', 'Unauthorized action.');
    }

    $appointment->delete();

    return redirect()->route('userappointment')->with('success', 'Appointment deleted successfully.');
}

public function cancel(Appointment $appointment)
{
    if ($appointment->status != 'canceled') {
        $appointment->status = 'canceled';
        $appointment->save();
    }

    return redirect()->route('userappointment')->with('status', 'Appointment has been canceled.');
}

}
