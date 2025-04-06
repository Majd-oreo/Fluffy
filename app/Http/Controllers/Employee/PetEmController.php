<?php
namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class PetEmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Pet::query();
        
        if ($request->has('name') && !empty($request->name)) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
        
        if ($request->has('user_id') && !empty($request->user_id)) {
            $query->where('user_id', $request->user_id); 
        }
    
        if ($request->has('type') && !empty($request->type)) {
            $query->where('type', $request->type);
        }
        
        
        $pets = $query->paginate(8);  
        $users = User::all(); 
        return view('employee.pets.index', compact('pets','users'));
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
            'user_id' => 'required|exists:users,id',  
        ]);
        
        $pet = new Pet();
        $pet->name = $request->name;
        $pet->type = $request->type;
        $pet->breed = $request->breed;
        $pet->age = $request->age;
        $pet->weight = $request->weight;
        $pet->medical_history = $request->medical_history;
        $pet->user_id = $request->user_id; 
        
        if ($request->hasFile('image')) {
            $pet->image = $request->file('image')->store('pets', 'public');
        }
    
        $pet->save();
    
        return redirect()->route('employee.pets.index')->with('success', 'Pet created successfully.');
    }

    /**
     * Show the form for editing the specified pet.
     */
    public function edit($id)
    {
        $pet = Pet::findOrFail($id);
        $users = User::all(); 
        return view('employee.pets.edit', compact('pet', 'users'));
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
            'user_id' => 'required|exists:users,id', 
        ]);
        
        $pet->name = $request->name;
        $pet->type = $request->type;
        $pet->breed = $request->breed;
        $pet->age = $request->age;
        $pet->weight = $request->weight;
        $pet->medical_history = $request->medical_history;
        $pet->user_id = $request->user_id;  
        
        
        if ($request->hasFile('image')) {
           
            if ($pet->image) {
                Storage::disk('public')->delete($pet->image);
            }
    
            $pet->image = $request->file('image')->store('pets', 'public');
        }
    
        $pet->save();
    
        return redirect()->route('employee.pets.index')->with('success', 'Pet updated successfully.');
    }
    
    /**
     * Display the specified pet.
     */
    public function show(Pet $pet)
    {
        return view('employee.pets.show', compact('pet'));
    }

    /**
     * Remove the specified pet from storage.
     */
    public function destroy(Pet $pet)
    {
        if ($pet->image) {
            Storage::disk('public')->delete($pet->image);
        }

        $pet->delete();
        return redirect()->route('employee.pets.index')->with('success', 'Pet deleted successfully.');
    }
}
