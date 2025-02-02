@extends('layouts.adminfrontend')


<div class="min-h-screen bg-gray-900 text-white p-8">
    <h1 class="text-3xl font-bold mb-6">Add Category</h1>

    <form action="{{ route('admin.categories.store') }}" method="POST" class="bg-gray-800 p-6 rounded-lg">
        @csrf
        <div class="mb-4">
            <label for="name" class="block mb-2">Category Name</label>
            <input type="text" id="name" name="name" class="w-full p-2 bg-gray-700 text-white rounded" required>
        </div>
        <button type="submit" class="bg-[#F7941D] text-white py-2 px-4 rounded hover:bg-orange-500">Add Category</button>
    </form>
</div>

