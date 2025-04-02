<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Service;
use App\Models\User;




class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function indexBlog()
     {
         $blogs = Blog::all(); 
         return view('home', compact('blogs')); 
     }
     

     public function indexService()
    {
        $services = Service::all(); 
        return view('user.services', compact('services')); 
    }
    public function indexEmployee()
    {
        $employees = User::where('role', 'employee')->get();
        return view('home', compact('employees'));
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
    public function show(string $id)
    {
        //
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
