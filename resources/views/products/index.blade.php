
<h1>Products</h1>
@foreach($products as $product)
    <div>
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->description }}</p>
        <p>Price: ${{ $product->price }}</p>
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="150">
    </div>
@endforeach
