<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::query();
        
        if ($request->has('name') && !empty($request->name)) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
        
        if ($request->has('role') && !empty($request->role)) {
            $query->where('role', $request->role);
        }
        
        // Use paginate() instead of get() to paginate results
        $users = $query->paginate(8);  // This will paginate results, showing 8 users per page
        
        return view('admin.users.index', compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email',
        'phone' => ['required', 'regex:/^07[7-9]{1}[0-9]{7}$/'],
        'password' => 'required|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&]/',
        'role' => 'required|in:user,admin,employee',
        'job_title' => 'nullable|string|max:255',
        'salary' => 'nullable|numeric|min:0',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('uploads', 'public');
    } else {
        $imagePath = null;
    }

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'phone' => $request->phone,
        'address' => $request->address,
        'image' => $imagePath,
        'role' => $request->role,
    ]);

    // If the user is an employee, store employee-related data
    if ($request->role === 'employee') {
        $user->employee()->create([
            'job_title' => $request->job_title,
            'salary' => $request->salary,
        ]);
    }

    return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
}

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => ['required', 'regex:/^07[7-9]{1}[0-9]{7}$/'], // Validates Jordanian phone numbers starting with 07
            'password' => 'nullable|string|min:8|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&]/', // Password with uppercase, lowercase, number, and symbol
            'role' => 'required|in:user,admin,employee',
            'job_title' => 'nullable|string|max:255', // Only required if role is employee
            'salary' => 'nullable|numeric|min:0', // Only required if role is employee
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);
    
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'image' => $request->image,
            'role' => $request->role,
        ]);

        if ($request->role === 'employee') {
            $user->employee()->update([
                'job_title' => $request->job_title,
                'salary' => $request->salary,
            ]);
        }
    
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}
