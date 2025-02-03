<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Show a specific order details (Order confirmation page)
    public function show($id)
    {
        // Fetch the order by ID
        $order = Order::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        return view('orders.show', compact('order'));
    }

    
    // Delete an order (Admin only)
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully!');
    }
    public function index()
    {
        // Fetch all orders
        $orders = Order::orderBy('created_at', 'desc')->get();

        // Return the view with orders data
        return view('admin.orders.index', compact('orders'));
    }
    
    
}

