<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;


class EmployeeController extends Controller
{
    public function showTeam()
    {
        $employees = User::where('role', 'employee')
        ->whereHas('employee', function ($query) {
            $query->where('status', 'active');
        })
        ->with('employee') 
        ->get();

    return view('User.team', compact('employees'));
    }
    
    
}
