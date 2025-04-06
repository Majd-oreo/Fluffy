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




class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
public function bookAppointment(Request $request)
{
    // Ensure the user is logged in before proceeding
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

    // Parse the start_time to a Carbon instance
    $start_time = Carbon::parse($request->start_time);

    // Check if the selected time slot is already booked
    $existingBooking = Appointment::where('service_id', $request->service_id)
        ->where('start_time', $start_time)
        ->exists();

    if ($existingBooking) {
        return redirect()->back()->with('error', 'The selected time is already booked for this service. Please choose another time.');
    }

    // Ensure the service exists before accessing its category_id
    $service = Service::with('categories')->find($request->service_id);

    if (!$service->categories->contains('id', $request->category_id)) {
        return redirect()->back()->with('error', 'Invalid category selected for this service.');
    }
    

    // Create a new appointment instance
    $appointment = new Appointment();
    $appointment->user_id = auth()->id();
    $appointment->service_id = $request->service_id;
    $appointment->pet_id = $request->pet_id;
    $appointment->start_time = Carbon::parse($request->start_time);
    $appointment->status = 'Pending';
    $appointment->category_id = $request->category_id; // Save the user-selected category
    
    $appointment->save();


    return redirect()->back()->with('success', 'Your appointment has been successfully booked.');
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
    $service = Service::with('categories', 'images', 'reviews.user')->findOrFail($id);

    $appointment = Appointment::where('service_id', $id)
                              ->where('user_id', $user->id)
                              ->latest()
                              ->first();

    $hasAppointment = $appointment ? true : false;

    $bookedTimes = Appointment::where('service_id', $id)
        ->pluck('start_time')
        ->map(fn($startTime) => Carbon::parse($startTime)->format('Y-m-d\TH:i'))
        ->toArray();

    return view('user.appointment', compact('service', 'bookedTimes', 'appointment', 'user', 'hasAppointment'));
}
public function storeReview(Request $request, $service_id)
{
    $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'required|string|max:500',
    ]);

    $appointment = Appointment::where('service_id', $service_id)
                              ->where('user_id', auth()->id())
                              ->latest()
                              ->first();

    if (!$appointment) {
        return redirect()->back()->with('error', 'You can only review a service after booking an appointment.');
    }

    // Check if the user has already submitted a review
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

    // Create new review if no existing review
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
    $appointments = Appointment::where('user_id', auth()->id());

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
        //
    }
}
