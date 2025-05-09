<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Service;
use App\Models\User;
use App\Models\Review;





class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show($id)
{
    $blog = Blog::with('user.employee.service')->findOrFail($id);

    $serviceId = optional($blog->user->employee->service)->id;

    // Get related blogs (by same service) excluding the current one
    $relatedBlogs = Blog::where('id', '!=', $blog->id)
        ->whereHas('user.employee', function ($query) use ($serviceId) {
            $query->where('service_id', $serviceId);
        })
        ->latest()
        ->take(4)
        ->get();

    return view('user.blog-single', compact('blog', 'relatedBlogs'));
}


public function index()
{
    $reviews = Review::with(['user', 'service'])
                ->orderByDesc('rating')
                ->latest()
                ->take(4)
                ->get();

    return view('user.index', compact('reviews'));
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
