<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Pet::query();
        
        // Filter by name
        if ($request->has('name') && !empty($request->name)) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
        
        // Correct the filtering for 'age'
        if ($request->has('user_id') && !empty($request->user_id)) {
            $query->where('user_id', $request->user_id); // Filter pets by user/owner ID
        }
    
        // Filter by type
        if ($request->has('type') && !empty($request->type)) {
            $query->where('type', $request->type);
        }
        
        
        $pets = $query->paginate(12);  
        $users = User::all(); 
        return view('admin.pets.index', compact('pets','users'));
    }

    /**
     * Show the form for creating a new pet.
     */
    public function create()
    {
        $users = User::all();  
        return view('admin.pets.create', compact('users'));   
    }

    /**
     * Store a newly created pet in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:Cat,Dog,Bird,Rabbit',
            'breed' => 'nullable|string|max:255',
            'age' => 'nullable|integer|min:0',
            'weight' => 'nullable|numeric|min:0',
            'medical_history' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'user_id' => 'required|exists:users,id', // Validate the user_id
        ]);
        
        // Store the pet
        $pet = new Pet();
        $pet->name = $request->name;
        $pet->type = $request->type;
        $pet->breed = $request->breed;
        $pet->age = $request->age;
        $pet->weight = $request->weight;
        $pet->medical_history = $request->medical_history;
        $pet->user_id = $request->user_id;  // Save the user_id
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $pet->image = $request->file('image')->store('pets', 'public');
        }
    
        $pet->save();
    
        return redirect()->route('admin.pets.index')->with('success', 'Pet created successfully.');
    }

    /**
     * Show the form for editing the specified pet.
     */
    public function edit($id)
    {
        $pet = Pet::findOrFail($id);
        $users = User::all();  // Fetch all users
        return view('admin.pets.edit', compact('pet', 'users'));
    }

    /**
     * Update the specified pet in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:Cat,Dog,Bird,Rabbit',
            'breed' => 'nullable|string|max:255',
            'age' => 'nullable|integer|min:0',
            'weight' => 'nullable|numeric|min:0',
            'medical_history' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
        
        $pet->name = $request->name;
        $pet->type = $request->type;
        $pet->breed = $request->breed;
        $pet->age = $request->age;
        $pet->weight = $request->weight;
        $pet->medical_history = $request->medical_history;
        
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($pet->image) {
                Storage::disk('public')->delete($pet->image);
            }
    
            // Store the new image with a unique name
            $pet->image = $request->file('image')->store('pets', 'public');
        }
    
        $pet->save();
    
        return redirect()->route('admin.pets.index')->with('success', 'Pet updated successfully.');
    }
    
    /**
     * Display the specified pet.
     */
    public function show(Pet $pet)
    {
        return view('admin.pets.show', compact('pet'));
    }

    /**
     * Remove the specified pet from storage.
     */
    public function destroy(Pet $pet)
    {
        // Delete the pet's image if it exists
        if ($pet->image) {
            Storage::disk('public')->delete($pet->image);
        }

        $pet->delete();
        return redirect()->route('admin.pets.index')->with('success', 'Pet deleted successfully.');
    }
}
