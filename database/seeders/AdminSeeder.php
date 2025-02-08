<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com', // Change this to your desired admin email
            'password' => Hash::make('password123'), // Change this to your desired admin password
            'role' => 'admin', // Set role to admin
        ]);
        User::create([
            'name' => 'poojana',
            'email' => 'poojana@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);



    }
}
