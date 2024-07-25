<div class="row">
    @foreach ($data as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['title'] }}" style="width: 100px">
                <div class="card-body">
                    <h5 class="card-title">{{ htmlspecialchars($product['title']) }}</h5>
                    <p class="card-text">{{ htmlspecialchars($product['description']) }}</p>
                    <p class="card-text"><strong>Category:</strong> {{ htmlspecialchars($product['category']) }}</p>
                    <p class="card-text"><strong>Price:</strong> ${{ number_format($product['price'], 2) }}</p>
                    <p class="card-text"><strong>Rating:</strong> {{ $product['rating']['rate'] }} ({{ $product['rating']['count'] }} reviews)</p>
                </div>
            </div>
        </div>
    @endforeach
</div>