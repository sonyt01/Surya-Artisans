<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Surya Artisan Products</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFF8F0]">

@include('components.navbar') <!-- your navbar here -->

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

    <h1 class="text-3xl sm:text-4xl font-bold text-[#800000] mb-8 font-serif">Our Collection</h1>

    <!-- Search Bar -->
    <div class="mb-6">
        <input type="text" id="search" placeholder="Search products..."
               class="w-full sm:w-3/4 md:w-1/2 lg:w-1/3 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#800000]">
    </div>

    <!-- Product Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @php
        $products = [
            ['id'=>1,'name'=>'Classic Rug','price'=>50,'image'=>'carpet1.jpg'],
            ['id'=>2,'name'=>'Modern Carpet','price'=>110,'image'=>'carpet2.jpg'],
            ['id'=>3,'name'=>'Premium Design Rug','price'=>60,'image'=>'carpet3.jpg'],
            ['id'=>4,'name'=>'Handmade Rug','price'=>60,'image'=>'carpet4.jpg'],
            ['id'=>5,'name'=>'Traditional Carpet','price'=>60,'image'=>'carpet5.jpg'],
            ['id'=>6,'name'=>'Elegant Rug','price'=>60,'image'=>'carpet6.jpg'],
        ];
        @endphp

        @foreach($products as $product)
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition product-card">
            <img src="{{ asset('images/'.$product['image']) }}" class="w-full h-56 sm:h-64 md:h-72 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800">{{ $product['name'] }}</h2>
                <p class="text-gray-500">$ {{ $product['price'] }}</p>

                <!-- Add to Cart Form -->
                <form action="{{ route('add.to.cart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product['id'] }}">
                    <input type="hidden" name="name" value="{{ $product['name'] }}">
                    <input type="hidden" name="price" value="{{ $product['price'] }}">
                    <input type="hidden" name="image" value="images/{{ $product['image'] }}">
                    <button type="submit"
                            class="mt-3 w-full bg-[#800000] text-white px-4 py-2 rounded-lg hover:bg-[#660000] transition">
                        Add to Cart
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

</div>

<script>
    // Search functionality
    const searchInput = document.getElementById('search');
    const productCards = document.querySelectorAll('.product-card');

    searchInput.addEventListener('input', () => {
        const term = searchInput.value.toLowerCase();
        productCards.forEach(card => {
            const name = card.querySelector('h2').textContent.toLowerCase();
            card.style.display = name.includes(term) ? '' : 'none';
        });
    });
</script>

@include('components.footer')
</body>
</html>
