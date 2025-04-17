<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Pet;
use App\Models\Service;
use App\Models\Category;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Appointment::query();
    
        // Filter by user
        if ($request->has('user_id') && !empty($request->user_id)) {
            $query->where('user_id', $request->user_id);
        }
    
        // Filter by service
        if ($request->has('service') && !empty($request->service)) {
            $query->where('service_id', $request->service);
        }
    
        // Filter by date
        if ($request->has('date') && !empty($request->date)) {
            $query->whereDate('start_time', $request->date);
        }
    
        if ($request->has('status') && !empty($request->status)) {
            $query->where('status', $request->status);
        }
    
        $services = Service::all();
        $appointments = $query->with(['user', 'pet', 'service', 'category'])->paginate(12);
    
        return view('admin.appointments.index', compact('appointments', 'services'));
    }
    

    /**
     * Show the form for creating a new appointment.
     */
    public function create()
    {
        $users = User::all();
        $pets = Pet::all();
        $services = Service::all();
        $categories = Category::all();

        return view('admin.appointments.create', compact('users', 'pets', 'services', 'categories'));
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

        Appointment::create($request->all());

        return redirect()->route('admin.appointments.index')->with('success', 'Appointment created successfully.');
    }

    /**
     * Show the form for editing the specified appointment.
     */
    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        $users = User::all();
        $pets = Pet::all();
        $services = Service::all();
        $categories = Category::all();

        return view('admin.appointments.edit', compact('appointment', 'users', 'pets', 'services', 'categories'));
    }

    /**
     * Update the specified appointment in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'pet_id' => 'required|exists:pets,id',
            'service_id' => 'required|exists:services,id',
            'category_id' => 'nullable|exists:categories,id',
            'start_time' => 'required|date',
            'status' => 'required|in:Pending,Completed,Canceled',
        ]);

        $appointment->update($request->all());

        return redirect()->route('admin.appointments.index')->with('success', 'Appointment updated successfully.');
    }

    /**
     * Display the specified appointment.
     */
    public function show($id)
    {
        $appointment = Appointment::with(['user', 'pet', 'service', 'category'])->findOrFail($id);
        return view('admin.appointments.show', compact('appointment'));
    }

    /**
     * Remove the specified appointment from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('admin.appointments.index')->with('success', 'Appointment deleted successfully.');
    }
}
