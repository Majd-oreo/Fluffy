<?php
namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Pet;
use App\Models\Employee;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Carbon;




class AppointmentEmController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $employee = Auth::user()->employee;
    
        if (!$employee) {
            abort(403, 'Unauthorized'); 
        }
    
        $query = Appointment::where('service_id', $employee->service_id);  
    
        if ($request->has('user_id') && !empty($request->user_id)) {
            $query->where('user_id', $request->user_id);
        }
    
       
        if ($request->has('date') && !empty($request->date)) {
            $query->whereDate('start_time', $request->date);
        }
    
        if ($request->has('status') && !empty($request->status)) {
            $query->where('status', $request->status);
        }
    
        $services = Service::where('id', $employee->service_id)->get();
        $appointments = $query->with(['user', 'pet', 'service', 'category'])->paginate(12);
    
        return view('employee.appointments.index', compact('appointments', 'services'));
    }
    

    /**
     * Show the form for creating a new appointment.
     */
    public function create()
{
    $employee = Auth::user()->employee;
    $appointment = Appointment::all();

    $categories = Category::where('service_id', $employee->service_id)->get();

    $users = User::all();

    $pets = Pet::all();

    $services = Service::where('id', $employee->service_id)->get();

    return view('employee.appointments.create', compact('users', 'pets', 'services', 'categories'));
}

    /**
     * Store a newly created appointment in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'pet_id' => 'required|exists:pets,id',
            'service_id' => 'required|exists:services,id',
            'category_id' => 'nullable|exists:categories,id',
            'start_time' => 'required|date',
            'status' => 'required|in:Pending,Completed,Canceled',
        ]);
    
        $startTime = Carbon::parse($request->start_time);
        $hour = $startTime->format('H');
    
        if ($hour < 10 || $hour >= 18) {
            session()->flash('error', 'Appointment must be between 10 AM and 6 PM');
            return redirect()->back()->withInput();
        }
    
        $exists = Appointment::where('service_id', $request->service_id)
                    ->where('start_time', $request->start_time)
                    ->exists();
    
        if ($exists) {
            session()->flash('error', 'An appointment already exists at this time');
            return redirect()->back()->withInput();
        }
    
        Appointment::create($request->all());
    
        session()->flash('success', 'Appointment created successfully.');
        return redirect()->route('employee.appointments.index');
    }
    
    /**
     * Show the form for editing the specified appointment.
     */
    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
    
        if ($appointment->service_id !== Auth::user()->employee->service_id) {
            abort(403, 'Unauthorized');
        }
    
        $users = User::all();
        $pets = Pet::where('user_id', $appointment->user_id)->get();
        $services = Service::where('id', Auth::user()->employee->service_id)->get();
        $categories = Category::where('service_id', $appointment->service_id)->get();
    
        return view('employee.appointments.edit', compact('appointment', 'users', 'pets', 'services', 'categories'));
    }
    

    /**
     * Update the specified appointment in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        if ($appointment->service_id !== Auth::user()->employee->service_id) {
            abort(403, 'Unauthorized');
        }
    
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'pet_id' => 'required|exists:pets,id',
            'service_id' => 'required|exists:services,id',
            'category_id' => 'nullable|exists:categories,id',
            'start_time' => 'required|date',
            'status' => 'required|in:Pending,Completed,Canceled',
        ]);
    
        $startTime = Carbon::parse($request->start_time);
        $hour = $startTime->format('H');
    
        if ($hour < 10 || $hour >= 18) {
            session()->flash('error', 'Appointment must be between 10 AM and 6 PM');
            return redirect()->back()->withInput();
        }
    
        $exists = Appointment::where('service_id', $request->service_id)
                    ->where('start_time', $request->start_time)
                    ->where('id', '!=', $appointment->id)
                    ->exists();
    
        if ($exists) {
            session()->flash('error', 'An appointment already exists at this time');
            return redirect()->back()->withInput();
        }
    
        $appointment->update($request->all());
    
        session()->flash('success', 'Appointment updated successfully.');
        return redirect()->route('employee.appointments.index');
    }
    
    /**
     * Remove the specified appointment from storage.
     */
    public function destroy(Appointment $appointment)
    {
        if ($appointment->service_id !== Auth::user()->employee->service_id) {
            abort(403, 'Unauthorized');
        }
    
        $appointment->delete();
        return redirect()->route('employee.appointments.index')->with('success', 'Appointment deleted successfully.');
    }
    
    
}
