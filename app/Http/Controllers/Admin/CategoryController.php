<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = Category::query();
    
    // Fetch all services for filtering
    $services = Service::all();

    // Filter by name
    if ($request->has('name') && !empty($request->name)) {
        $query->where('name', 'like', '%' . $request->name . '%');
    }
    
    if ($request->has('service_id') && !empty($request->service_id)) {
        $query->where('service_id', $request->service_id);
    }

    $categories = $query->paginate(12);  
    return view('admin.categories.index', compact('categories', 'services'));
}

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        $services = Service::all();  
        return view('admin.categories.create', compact('services'));   
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'description' => 'nullable|string',
            'service_id' => 'required|exists:services,id',
            'price' => 'required|numeric|min:0',

        ]);
        
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->price = $request->price;


        $category->service_id = $request->service_id;
        
        
        // Handle icon upload
        if ($request->hasFile('icon')) {
            $category->icon = $request->file('icon')->store('categories', 'public');
        }
    
        $category->save();
    
        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $services = Service::all();  
        return view('admin.categories.edit', compact('category', 'services'));
    }

    /**
     * Update the specified category in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',

            'service_id' => 'required|exists:services,id',
        ]);
        
        $category->name = $request->name;
        $category->description = $request->description;
        $category->service_id = $request->service_id;
        $category->price = $request->price;

        
        // Handle icon upload
        if ($request->hasFile('icon')) {
            if ($category->icon) {
                Storage::disk('public')->delete($category->icon);
            }
            $category->icon = $request->file('icon')->store('categories', 'public');
        }
    
        $category->save();
    
        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }
    
    /**
     * Display the specified category.
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy(Category $category)
    {
        if ($category->icon) {
            Storage::disk('public')->delete($category->icon);
        }

        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}
