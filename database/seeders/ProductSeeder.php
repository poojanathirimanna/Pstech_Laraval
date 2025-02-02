<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        
        // Create 20 sample products
        for ($i = 0; $i < 20; $i++) {
            Product::create([
                'name' => $faker->words(3, true),
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 10, 1000),
                'stock' => $faker->numberBetween(0, 100),
                'category_id' => $faker->numberBetween(1, 5), // Assuming 5 categories exist
                'image' => 'https://via.placeholder.com/150'
            ]);
        }
    }
}