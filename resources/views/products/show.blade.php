@extends('layouts.frontend1')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold">{{ $product->name }}</h1>
    <p class="mt-4">{{ $product->description }}</p>
    <p class="font-bold">{{ number_format($product->price, 2) }} LKR</p>
</div>
@endsection
