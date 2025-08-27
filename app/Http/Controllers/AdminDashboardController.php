<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;

class AdminDashboardController extends Controller
{
    /**
     * Show the dashboard page.
     */
    public function index()
    {
        // Gather dashboard statistics
        $stats = [
            'total_users' => User::count(),
            'total_products' => Product::count(),
            'total_categories' => Category::count(),
            'total_orders' => Order::count(),
            'recent_users' => User::latest()->take(5)->get(),
            'recent_products' => Product::with('category')->latest()->take(5)->get(),
            'recent_orders' => Order::with('user')->latest()->take(5)->get(),
            'low_stock_products' => Product::where('stock', '<', 10)->take(5)->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}