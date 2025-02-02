<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Show all categories (for admin management)
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories')); // Admin view for categories
    }

    // Show create category form (admin only)
    public function create()
    {
        return view('admin.categories.create'); // Admin form to add a category
    }

    // Store a new category (admin only)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category added successfully!');
    }

    // Show edit category form (admin only)
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category')); // Admin form to edit a category
    }

    // Update category (admin only)
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully!');
    }

    // Delete category (admin only)
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully!');
    }

    // Show laptops category products to the user
    public function laptops()
    {
        $laptops = Category::findOrFail(1)->products; // Get products in the laptops category
        return view('pages.laptops', compact('laptops'));
    }

    // Show graphic cards category products to the user
    public function graphicCards()
    {
        $graphicCards = Category::findOrFail(2)->products; // Get products in the graphic cards category
        return view('pages.graphiccards', compact('graphicCards'));
    }

    // Show RAM category products to the user
    public function rams()
    {
        $rams = Category::findOrFail(3)->products; // Get products in the RAMs category
        return view('pages.rams', compact('rams'));
    }

    // Show processors category products to the user
    public function processors()
    {
        $processors = Category::findOrFail(4)->products; // Get products in the processors category
        return view('pages.processors', compact('processors'));
    }

    // Show motherboards category products to the user
    public function motherboards()
    {
        $motherboards = Category::findOrFail(5)->products; // Get products in the motherboards category
        return view('pages.motherboards', compact('motherboards'));
    }
}
