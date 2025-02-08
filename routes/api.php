<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;



// Route::middleware('auth:sanctum')->group(function () {
//     // API Authenticated Routes
//     Route::get('/profile', [AuthController::class, 'profile'])->name('api.profile'); // Named 'api.profile'
//     Route::post('/logout', [AuthController::class, 'logout'])->name('api.logout');
// });

// API Public Routes
Route::post('/register', [AuthController::class, 'register'])->name('api.register');
Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout'])->name('api.logout');


// Example route to fetch authenticated user
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\ProductController;

Route::get('/products/laptops', [ProductController::class, 'laptops']);
Route::get('/products/graphiccards', [ProductController::class, 'graphicCards']);
Route::get('/products/rams', [ProductController::class, 'rams']);
Route::get('/products/processors', [ProductController::class, 'processors']);
Route::get('/products/motherboards', [ProductController::class, 'motherboards']);
