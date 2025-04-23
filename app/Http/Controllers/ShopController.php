<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
   
    public function index(Request $request)
    {
        $categories = ProductCategory::all();

        $productsQuery = Product::query();
        $query = Product::query();


        // Search by product name
        
    if ($request->has('search') && $request->search != '') {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

        // Filter by category
        if ($request->has('category') && $request->input('category') !== null) {
            $query->where('product_category_id', $request->input('category'));
        }
        

        // Filter by price range
        if ($request->has('min_price') && $request->has('max_price')) {
            $productsQuery->whereBetween('price', [$request->min_price, $request->max_price]);
        }

        // Sort by price (ascending or descending)
        if ($request->has('sort_price') && in_array($request->sort_price, ['asc', 'desc'])) {
            $productsQuery->orderBy('price', $request->sort_price);
        }

        // Paginate the results
        $products = $query->withCount('review_products')
        ->withAvg('review_products', 'rating')
        ->paginate(9)
        ->appends($request->query()); 

        return view('user.shop', compact('products', 'categories'));
    }
    public function show($id)
{
    $product = Product::with('category', 'review_products')->findOrFail($id);
    return view('user.single', compact('product'));
}



}
