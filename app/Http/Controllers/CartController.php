<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Display Cart Items
    public function index()
    {
        // Fetch all cart items with product and category relationships
        $cartItems = Cart::with('product.category')
            ->where('user_id', Auth::id())
            ->get();

        return view('cart.index', compact('cartItems'));
    }

    // Add Item to Cart
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);

        $cartItem = Cart::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->first();

        if ($cartItem) {
            // Update quantity if the product is already in the cart
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            // Create a new cart item
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'price' => $product->price, // Fetch price from the product
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    // Update Item Quantity
    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = Cart::findOrFail($id);

        // Update the quantity of the cart item
        $cartItem->update(['quantity' => $request->quantity]);

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
    }

    // Remove Item from Cart
    public function remove($id)
    {
        $cartItem = Cart::findOrFail($id);

        // Delete the cart item
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Item removed from cart!');
    }

    // Checkout (Redirect to Laptops Page Without Deleting Cart)
    public function checkout()
    {
        // Fetch all cart items for the authenticated user
        $cartItems = Cart::where('user_id', Auth::id())->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        // Calculate total price
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->quantity * $item->price;
        });

        // Placeholder for order creation logic
        // For example, save the order to the database here

        // Redirect to the laptops page after checkout
       
    }
}
