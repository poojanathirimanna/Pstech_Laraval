<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;






Route::get('/', [PageController::class, 'index'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
// Route::get('/laptops', [PageController::class, 'laptops'])->name('pages.laptops');
// Route::get('/graphiccards', [PageController::class, 'graphicCards'])->name('pages.graphiccards');
// Route::get('/rams', [PageController::class, 'ram'])->name('pages.rams');
// Route::get('/processors', [PageController::class, 'processors'])->name('pages.processors');
// Route::get('/motherboards', [PageController::class, 'motherboards'])->name('pages.motherboards');


// Route::get('/index1', [PageController::class, 'index1'])->name('welcome');

//Dashboard routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    route::get('/dashboard', function(){return view('dashboard');})->middleware(['auth'])->name('dashboard');

});







//Profile routes
Route::get('/profile', [ProfileController::class, 'edit'])
    ->middleware(['auth']) // Ensure only authenticated users can access
    ->name('profile.edit');

Route::patch('/profile', [ProfileController::class, 'update'])
    ->middleware(['auth']) // Ensure only authenticated users can access
    ->name('profile.update');

Route::delete('/profile', [ProfileController::class, 'destroy'])
    ->middleware(['auth']) // Ensure only authenticated users can access
    ->name('profile.destroy');


    Route::prefix('admin')->middleware('auth')->group(function () {
        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);
    
    });


// User Routes (Viewing Products)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Admin Routes (Managing Products)
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/products', [ProductController::class, 'adminIndex'])->name('admin.products.index'); // List all products
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create'); // Show add product form
    Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store'); // Save new product
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit'); // Show edit product form
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('admin.products.update'); // Save product updates
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy'); // Delete product
});

    
Route::get('/laptops', [ProductController::class, 'laptops'])->name('pages.laptops');
Route::get('/graphic-cards', [ProductController::class, 'graphicCards'])->name('pages.graphiccards');
Route::get('/rams', [ProductController::class, 'rams'])->name('pages.rams');
Route::get('/processors', [ProductController::class, 'processors'])->name('pages.processors');
Route::get('/motherboards', [ProductController::class, 'motherboards'])->name('pages.motherboards');

// Dynamic category route (for new categories)
Route::get('/category/{categorySlug}', [ProductController::class, 'categoryProducts'])->name('pages.category');

// Admin Routes (Managing Categories)

// Admin Routes (for categories)
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('categories', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('categories/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::post('cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
});

// Routes for Checkout without middleware
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('checkout', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('order/{order}', [OrderController::class, 'show'])->name('order.show');

Route::get('admin/orders', [OrderController::class, 'index'])->name('admin.orders.index');
Route::get('admin/orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');












// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
