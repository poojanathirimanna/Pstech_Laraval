<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // Show products for users
    public function index()
    {
        $products = Product::with('category')->get(); // Eager load categories
        return view('products.index', compact('products')); // User view
    }

    // Show product management for admin
    public function adminIndex()
    {
        $products = Product::with('category')->get(); // Eager load categories
        return view('admin.products.index', compact('products')); // Admin view
    }

    // Show create product form (admin only)
    public function create()
    {
        $categories = Category::all(); // Get all categories
        return view('admin.products.create', compact('categories'));
    }

    // Store new product (admin only)
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'category_id' => 'required|exists:categories,id',
        'image' => 'nullable|image|max:2048',
    ]);

    $imagePath = $request->file('image') 
        ? $request->file('image')->store('images', 'public') 
        : null;

    Product::create([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'stock' => $request->stock,
        'category_id' => $request->category_id,
        'image' => $imagePath,
    ]);

    // Ensure a RedirectResponse is returned
    return redirect()->route('admin.products.index')
        ->with('success', 'Product added successfully!');
}


    // Show edit product form (admin only)
    public function edit(Product $product)
    {
        $categories = Category::all(); // Get all categories
        return view('admin.products.edit', compact('product', 'categories'));
    }

    // Update product (admin only)
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $product->update(['image' => $imagePath]);
        }

        $product->update($request->except('image'));

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
    }

    // Delete product (admin only)
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully!');
    }
    public function laptops()
    {
        // Fetch products where category_id matches laptops
        $laptops = Product::where('category_id', 1)->get(); // 1 is the ID for laptops

        // Pass the laptops to the view
        return view('pages.laptops', compact('laptops'));
    }
    public function graphicCards()
    {
    // Fetch products where category_id matches graphic cards
    $graphicCards = Product::where('category_id', 2)->get(); // 2 is the ID for graphic cards

    // Pass the graphic cards to the view
    return view('pages.graphiccards', compact('graphicCards'));
    }
    public function rams()
{
    // Fetch products where category_id matches RAM
    $rams = Product::where('category_id', 3)->get(); // 3 is the ID for RAMs

    // Pass the RAMs to the view
    return view('pages.rams', compact('rams'));
}

    public function processors()
    {
    // Fetch products where category_id matches processors
    $processors = Product::where('category_id', 4)->get(); // 4 is the ID for processors

    // Pass the processors to the view
    return view('pages.processors', compact('processors'));
    }
    public function motherboards()
    {
    // Fetch products where category_id matches motherboards
    $motherboards = Product::where('category_id', 5)->get(); // 5 is the ID for motherboards

    // Pass the motherboards to the view
    return view('pages.motherboards', compact('motherboards'));
    }
}
