<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surya Artisan Products</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#FFF8F0] font-sans">

   @include('components.navbar')

    <!-- Hero Image Section -->
<section class="relative w-full h-[500px]">
    <img src="{{ asset('images/flower.jpg') }}"
         alt="Surya Artisans Hero"
         class="w-full h-full object-cover">

    <!-- Optional overlay text -->
    <div class="absolute inset-0 bg-black bg-opacity-30 flex flex-col justify-center items-center text-center px-6">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-4 font-serif">Handcrafted Rugs & Artisanship</h1>
        <p class="text-lg md:text-2xl text-white mb-6">Where tradition meets elegance in every design.</p>
        <a href="/productsView"
           class="bg-[#800000] text-white px-8 py-3 rounded-md hover:bg-[#660000] transition">
            Shop Collection
        </a>
    </div>
</section>

     <!-- About / Collection Info Section -->
<section class="max-w-7xl mx-auto px-6 py-16 bg-[#FFF8F0] rounded-2xl shadow-md mb-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

        <!-- Left: Image -->
        <div class="overflow-hidden rounded-xl">
            <img src="{{ asset('images/carpet8.jpg') }}"
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
        </div>

        <!-- Right: Text -->
        <div class="flex flex-col justify-center">
            <h2 class="text-4xl font-bold text-[#800000] mb-4 font-serif">Crafted with Passion</h2>
            <p class="text-gray-700 mb-4 text-lg">
                At Surya Artisans, every rug is a masterpiece. Our artisans blend traditional techniques
                with contemporary designs to create pieces that tell a story and elevate your living space.
            </p>
            <p class="text-gray-700 text-lg">
                From the selection of threads to the finishing touches, we ensure every detail reflects
                dedication, quality, and timeless elegance.
            </p>
        </div>

    </div>


<!-- Reversed About / Collection Info Section -->
<section class="max-w-7xl mx-auto px-6 py-16 bg-[#FFF8F0] rounded-2xl shadow-md mb-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

        <!-- Left: Text -->
        <div class="flex flex-col justify-center">
            <h2 class="text-4xl font-bold text-[#800000] mb-4 font-serif">Our Artistry</h2>
            <p class="text-gray-700 mb-4 text-lg">
                Every rug at Surya Artisans tells a unique story. Our master weavers combine
                heritage craftsmanship with modern designs to bring warmth and elegance into your home.
            </p>
            <p class="text-gray-700 text-lg">
                We carefully select each material and dedicate hours to perfecting every pattern,
                ensuring that every piece is not just a rug, but a work of art.
            </p>
        </div>

        <!-- Right: Image -->
        <div class="overflow-hidden rounded-xl">
            <img src="{{ asset('images/carpet7.jpg') }}"
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
        </div>

    </div>
</section>

<!-- Collection Banner (No Image) -->
<section class=" text-[#800000] py-20 px-6 rounded-2xl shadow-md mb-12">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-5xl font-bold mb-4 font-serif">Explore Our Collection</h1>
        <p class="text-lg md:text-xl mb-6">
            Discover handcrafted rugs that blend tradition, quality, and modern elegance.
        </p>
        <a href="/productsView"
           class="inline-block mt-4 rounded-md bg-[#800000] px-8 py-3 text-white font-medium hover:bg-[#660000] transition">
            Shop Now
        </a>
    </div>
</section>

  @include('components.footer')

</body>
</html>
