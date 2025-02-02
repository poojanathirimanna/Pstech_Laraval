@extends('layouts.frontend1')

@section('pages')
<main class="p-8 bg-gray-900 text-white">
    <h1 class="text-3xl font-bold mb-6">Motherboards</h1>

    @if($motherboards->isEmpty())
        <p class="text-center text-gray-400">No motherboards available at the moment.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($motherboards as $motherboard)
                <div class="bg-gray-800 rounded-lg shadow-md p-4 transition duration-300 hover:scale-105">
                    <img src="{{ asset('images/' . $motherboard->image) }}" alt="{{ $motherboard->name }}" class="w-full h-48 object-cover rounded">
                    <h2 class="text-xl font-semibold mt-4">{{ $motherboard->name }}</h2>
                    <p class="text-gray-400 text-sm">{{ $motherboard->description }}</p>
                    <p class="text-yellow-400 text-lg font-bold mt-2">{{ number_format($motherboard->price, 2) }} LKR</p>
                </div>
            @endforeach
        </div>
    @endif
</main>
@endsection
