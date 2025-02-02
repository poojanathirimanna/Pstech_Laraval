<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Show the dashboard page.
     */
    public function index()
    {
        return view('admin.dashboard'); // Ensure this Blade file exists
    }
}