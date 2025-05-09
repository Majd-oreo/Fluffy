<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Service;



class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

     public function index(Request $request)
     {
         $query = Blog::whereHas('user.employee', function ($query) {
             $query->where('status', 'active');
         });
     
         if ($request->filled('service_id')) {
             $query->whereHas('user.employee.service', function ($q) use ($request) {
                 $q->where('id', $request->service_id);
             });
         }
     
         $blogs = $query->paginate(6)->withQueryString(); // withQueryString keeps the filter on pagination
         $services = Service::all();
     
         return view('user.blog-grid', compact('blogs', 'services'));
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
