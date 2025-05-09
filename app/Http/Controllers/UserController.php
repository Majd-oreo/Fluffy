<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = User::where('role', 'employee')->get();
        return view('home', compact('employees'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $employees = User::where('role', 'employee')
        ->whereHas('employee', function ($query) {
            $query->where('status', 'active');
        })
        ->with('employee') 
        ->get();

    return view('User.team', compact('employees'));
    }
    public function showAboutUs()
{
    $employees = User::where('role', 'employee')
        ->whereHas('employee', function ($query) {
            $query->where('status', 'active');
        })
        ->with('employee') // eager load the employee relationship
        ->get();

    return view('User.about-us', compact('employees'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
