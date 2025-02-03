<div>
    <input
        type="text"
        class="form-control"
        placeholder="Search for products..."
        wire:model="searchTerm"
    />

    @if($products)
        <ul class="list-group mt-3">
            @foreach($products as $product)
                <li class="list-group-item">
                    {{ $product->name }} - {{ number_format($product->price, 2) }} LKR
                </li>
            @endforeach
        </ul>
    @endif
</div>
