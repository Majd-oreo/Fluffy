<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\Service;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogsEmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Blog::query();

        // Only blogs created by the logged-in employee
        $query->where('user_id', Auth::id());

        if ($request->has('title') && !empty($request->title)) {
            $query->where('title', 'like', '%' . $request->title . '%');
        }

      

        $blogs = $query->paginate(8);
        $services = Service::all(); // Still needed for the filter dropdown or display

        return view('employee.blogs.index', compact('blogs', 'services'));
    }

    /**
     * Show the form for creating a new blog.
     */
    public function create()
    {
        $user = Auth::user();
        $employeeServices = Service::whereHas('employees', function($query) use ($user) {
            $query->where('user_id', $user->id); // Adjust according to your relationship
        })->get();
    
        $services = Service::whereHas('employees', function($query) use ($user) {
            $query->where('user_id', $user->id); // Adjust this according to your relationship
        })->get();
    
        // If there's exactly one service, pass it as 'service'
        if ($employeeServices->count() == 1) {
            $service = $employeeServices->first();
            return view('employee.blogs.create', compact('employeeServices', 'service', 'services'));
        }
    
        return view('employee.blogs.create', compact('employeeServices', 'services'));
    }
    
    /**
     * Store a newly created blog in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'service_id' => 'required|exists:services,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->user_id = Auth::id();
        $blog->service_id = $request->service_id;

        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->save();

        return redirect()->route('employee.blogs.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Show the form for editing the specified blog.
     */
    public function edit($id)
    {
        $blog = Blog::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $service = Auth::user()->employee->service;
        
        return view('employee.blogs.edit', compact('blog', 'service'));
        
    }

    /**
     * Update the specified blog in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        // Make sure only the owner can update
        if ($blog->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'service_id' => 'required|exists:services,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',

        ]);

        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->service_id = $request->service_id;

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->save();

        return redirect()->route('employee.blogs.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Display the specified blog.
     */
    public function show(Blog $blog)
    {
        if ($blog->user_id !== Auth::id()) {
            abort(403);
        }

        return view('employee.blogs.show', compact('blog'));
    }

    /**
     * Remove the specified blog from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->user_id !== Auth::id()) {
            abort(403);
        }

        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();
        return redirect()->route('employee.blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
