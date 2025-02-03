<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    // Display the checkout page
    public function index()
    {
        // Fetch cart items for the logged-in user
        $cartItems = Cart::where('user_id', Auth::id())->get();

        // Calculate the total price
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->quantity * $item->price;
        });

        return view('cart.checkout', compact('cartItems', 'totalPrice'));
    }

    // Handle order submission
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_address' => 'required|string|max:500',
            'customer_phone' => 'required|string|max:15',
            'payment_method' => 'required|string',
        ]);

        // Fetch cart items for the logged-in user
        $cartItems = Cart::where('user_id', Auth::id())->get();

        // Check if the cart is empty
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        // Calculate the total price
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->quantity * $item->price;
        });

        // Extract product IDs
        $productIds = $cartItems->pluck('product_id')->toArray();

        // Store the order in the database
        $order = Order::create([
            'user_id' => Auth::id(),
            'customer_name' => $validatedData['customer_name'],
            'customer_email' => $validatedData['customer_email'],
            'customer_address' => $validatedData['customer_address'],
            'customer_phone' => $validatedData['customer_phone'],
            'product_ids' => $productIds,
            'total_price' => $totalPrice,
            'payment_method' => $validatedData['payment_method'],
        ]);

        // Clear the cart
        Cart::where('user_id', Auth::id())->delete();

        // Redirect to a confirmation page with a success message
        return redirect()->route('order.show', ['order' => $order->id])->with('success', 'Your order has been placed successfully!');
    }
}
