<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductSearch extends Component
{
    public $searchTerm = ''; // Search term entered by the user
    public $products = [];  // List of products matching the search

    // Automatically updates the search results when the user types
    public function updatedSearchTerm()
    {
        $this->products = Product::query()
            ->where('name', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('description', 'like', '%' . $this->searchTerm . '%')
            ->get();
    }

    public function render()
    {
        return view('livewire.product-search');
    }
}

