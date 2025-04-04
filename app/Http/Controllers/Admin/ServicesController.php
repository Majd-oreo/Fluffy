<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;

use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */public function index(Request $request)
{
    $query = Service::query();

    // Apply filtering based on the 'name' parameter if present
    if ($request->has('name') && !empty($request->name)) {
        $query->where('name', 'like', '%' . $request->name . '%');
    }

    // Get all services with pagination
    $services = $query->paginate(8);

    // Fetch the employees assigned to each service
    foreach ($services as $service) {
        $service->employees = User::whereHas('employee', function($query) use ($service) {
            $query->where('service_id', $service->id);
        })->get();
    }

    return view('admin.services.index', compact('services'));
}

    /**
     * Show the form for creating a new service.
     */
    public function create()
    {
        return view('admin.services.create');   
    }

    /**
     * Store a newly created service in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'description' => 'nullable|string',
            'long_description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'nullable|integer|min:1',
        ]);
        
        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->long_description = $request->long_description;
        $service->price = $request->price;
        $service->duration = $request->duration;
        
        // Handle icon upload
        if ($request->hasFile('icon')) {
            $service->icon = $request->file('icon')->store('services', 'public');
        }
    
        $service->save();
    
        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    /**
     * Show the form for editing the specified service.
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified service in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'description' => 'nullable|string',
            'long_description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'nullable|integer|min:1',
        ]);
        
        $service->name = $request->name;
        $service->description = $request->description;
        $service->long_description = $request->long_description;
        $service->price = $request->price;
        $service->duration = $request->duration;
        
        // Handle icon upload
        if ($request->hasFile('icon')) {
            if ($service->icon) {
                Storage::disk('public')->delete($service->icon);
            }
            $service->icon = $request->file('icon')->store('services', 'public');
        }
    
        $service->save();
    
        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }
    
    /**
     * Display the specified service.
     */
    public function show($id)
    {
        // Get the service by ID
        $service = Service::findOrFail($id);
    
        // Get all employees responsible for the service
        $employees = User::whereHas('employee', function($query) use ($id) {
            $query->where('service_id', $id);
        })->get();
    
        return view('admin.services.show', compact('service', 'employees'));
    }
    

    /**
     * Remove the specified service from storage.
     */
    public function destroy(Service $service)
    {
        if ($service->icon) {
            Storage::disk('public')->delete($service->icon);
        }

        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
