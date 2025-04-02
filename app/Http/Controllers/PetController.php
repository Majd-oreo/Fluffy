<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;


class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pets = auth()->user()->pets()->paginate(3);


        return view('user.user-pets', compact('pets'));
    }

    public function create()
    {
        return view('user.creatpet');
    }

    // Store a newly created pet
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required|in:Cat,Dog,Bird,Rabbit', // Match with enum values in DB
            'age' => 'required|integer',
            'weight' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);
    
        $pet = new Pet();
        $pet->name = $request->name;
        $pet->type = $request->type;
        $pet->breed = $request->breed;
        $pet->age = $request->age;
        $pet->weight = $request->weight;
        $pet->medical_history = $request->medical_history;
    
        // Assign the user_id to the authenticated user
        $pet->user_id = auth()->id(); // Use the authenticated user's ID
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('pets', 'public');
            $pet->image = $imagePath;
        }
    
        $pet->save();
    
        return redirect()->route('pets.index');
    }
    
    public function update(Request $request, Pet $pet)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required|in:Cat,Dog,Bird,Rabbit',  // Match with enum values in DB
            'age' => 'required|integer',
            'weight' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);
    
        $pet->name = $request->name;
        $pet->type = $request->type;
        $pet->breed = $request->breed;
        $pet->age = $request->age;
        $pet->weight = $request->weight;
        $pet->medical_history = $request->medical_history;
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('pets', 'public');
            $pet->image = $imagePath;
        }
    
        $pet->save();
    
        return redirect()->route('pets.index');
    }
    
    public function destroy(string $id)
{
    $pet = Pet::findOrFail($id);

    if ($pet->user_id !== auth()->id()) {
        return redirect()->back()->with('error', 'Unauthorized action.');
    }

    $pet->delete();

    return redirect()->route('pets.index')->with('success', 'Pet deleted successfully.');
}

}
