@extends('layouts.frontend1')

@section('pages')
<main class="p-8 bg-gray-900 text-white">
    <h1 class="text-3xl font-bold mb-6">Graphic Cards</h1>

    @if($graphicCards->isEmpty())
        <p class="text-center text-gray-400">No graphic cards available at the moment.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($graphicCards as $graphicCard)
                <div class="bg-gray-800 rounded-lg shadow-md p-4 transition duration-300 hover:scale-105">
                    <img src="{{ asset('images/' . $graphicCard->image) }}" alt="{{ $graphicCard->name }}" class="w-full h-48 object-cover rounded">
                    <h2 class="text-xl font-semibold mt-4">{{ $graphicCard->name }}</h2>
                    <p class="text-gray-400 text-sm">{{ $graphicCard->description }}</p>
                    <p class="text-yellow-400 text-lg font-bold mt-2">{{ number_format($graphicCard->price, 2) }} LKR</p>
                </div>
            @endforeach
        </div>
    @endif
</main>
@endsection
