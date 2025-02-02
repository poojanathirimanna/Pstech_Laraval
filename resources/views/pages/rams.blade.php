@extends('layouts.frontend1')

@section('pages')
<main class="p-8 bg-gray-900 text-white">
    <h1 class="text-3xl font-bold mb-6">RAM</h1>

    @if($rams->isEmpty())
        <p class="text-center text-gray-400">No RAM available at the moment.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($rams as $ram)
                <div class="bg-gray-800 rounded-lg shadow-md p-4 transition duration-300 hover:scale-105">
                    <img src="{{ asset('images/' . $ram->image) }}" alt="{{ $ram->name }}" class="w-full h-48 object-cover rounded">
                    <h2 class="text-xl font-semibold mt-4">{{ $ram->name }}</h2>
                    <p class="text-gray-400 text-sm">{{ $ram->description }}</p>
                    <p class="text-yellow-400 text-lg font-bold mt-2">{{ number_format($ram->price, 2) }} LKR</p>
                    <form action="{{ route('cart.add') }}" method="POST" class="mt-4">
                        @csrf
                        <input type="hidden" name="rams_id" value="{{ $ram->id }}">
                        <div class="flex items-center space-x-4">
                            <input 
                                type="number" 
                                name="quantity" 
                                value="1" 
                                min="1" 
                                class="w-16 p-2 rounded bg-gray-700 text-white focus:ring-[#F7941D] focus:ring-2 focus:outline-none">
                            <button 
                                type="submit" 
                                class="bg-[#F7941D] hover:bg-orange-500 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                                Add to Cart
                            </button>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    @endif
</main>
@endsection
