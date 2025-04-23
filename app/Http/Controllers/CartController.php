<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\Order;
use App\Models\Review_products;


use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $user = Auth::user();

        // Get or create cart for user
        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        // Check if item already in cart
        $item = CartItem::where('cart_id', $cart->id)->where('product_id', $productId)->first();

        if ($item) {
            $item->quantity += 1;
            $item->save();
        } else {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart!');
    }
    public function storeReview(Request $request, $id)
    {
        // Check if user is logged in
        if (!Auth::check()) {
            return response()->json(['status' => 'error', 'message' => 'You must be logged in to review.'], 403);
        }
    
        $user = Auth::user();
    
        // Check if user purchased this product
        $hasOrdered = Order::where('user_id', $user->id)
            ->where('status', 'completed') // assuming 'completed' means paid/delivered
            ->whereHas('items', function ($query) use ($id) {
                $query->where('product_id', $id);  // Use $id here, which is the product ID passed to the method
            })
            ->exists();
    
        if (!$hasOrdered) {
            return redirect()->back()->with('error', 'You can only review products you have purchased.');
        }
    
        // Create the review
        Review_Products::create([
            'product_id' => $id,  // Use $id here to save the review for the correct product
            'user_id' => $user->id,
            'rating' => $request->input('rating', 5),
            'comment' => $request->input('comment'),
        ]);
    
        return redirect()->back()->with('success', 'Review submitted successfully.');
    }
    
    
}
