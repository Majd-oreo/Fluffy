<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;

use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Blog::query();

        // Filter by title
        if ($request->has('title') && !empty($request->title)) {
            $query->where('title', 'like', '%' . $request->title . '%');
        }

        // Filter by user_id (for employee role)
        if ($request->has('user_id') && !empty($request->user_id)) {
            $query->where('user_id', $request->user_id);
        }

        // Filter by service type
        if ($request->has('service_type') && !empty($request->service_type)) {
            $query->whereHas('service', function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->service_type . '%');
            });
        }

        // Fetch the blogs with pagination
        $blogs = $query->paginate(8);

        // Fetching all users (for filtering by user_id) and services (for filtering by service type)
        $users = User::where('role', 'employee')->get();
        $services = Service::all(); // Assuming you have a Service model for service types

        return view('admin.blogs.index', compact('blogs', 'users', 'services'));
    }

    /**
     * Show the form for creating a new blog.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created blog in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'service_id' => 'required|exists:services,id', // Assuming service_id is required
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->user_id = Auth::id(); // Store the ID of the user who created the blog
        $blog->service_id = $request->service_id; // Store the selected service type
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }

    /**
     * Show the form for editing the specified blog.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $users = User::all(); // Get all users for the dropdown (assuming employee filter)
        $services = Service::all(); // Get all services for the dropdown
        return view('admin.blogs.edit', compact('blog', 'users', 'services'));
    }

    /**
     * Update the specified blog in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'service_id' => 'required|exists:services,id', // Ensure service_id exists
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->service_id = $request->service_id; // Update the service type

        // Handle image upload
        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->image = $request->file('image')->store('blogs', 'public');
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    /**
     * Display the specified blog.
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Remove the specified blog from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
