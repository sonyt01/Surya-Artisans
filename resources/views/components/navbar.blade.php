<nav class="bg-[#FFF8F0] shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/Surya Artisans.svg') }}" class="w-10 h-10">
            <h1 class="text-2xl font-bold text-[#800000] font-serif">
                Surya Artisan
            </h1>
        </div>

        <!-- Menu for Desktop -->
        <div class="hidden md:flex items-center space-x-4 ml-10">

            <!-- Links -->
            <a href="{{ route('home') }}" class="text-gray-800 hover:text-[#800000] transition">Home</a>
            <a href="{{ route('productsView') }}" class="text-gray-800 hover:text-[#800000] transition">Products</a>
            <a href="{{ route('about') }}" class="text-gray-800 hover:text-[#800000] transition">About</a>
            <a href="{{ route('contact') }}" class="text-gray-800 hover:text-[#800000] transition">Contact</a>
            <a href="{{ route('welcome') }}" class="text-gray-800 hover:text-[#800000] transition">Back</a>

            <!-- Buttons Group -->
            <div class="flex items-center space-x-2 ml-4">
                <a href="{{ route('register') }}"
                   class="border border-[#800000] text-[#800000] px-4 py-2 rounded-lg hover:bg-[#800000] hover:text-white transition">
                    Register
                </a>

                <a href="{{ route('cart.view') }}"
                   class="bg-[#800000] text-white px-4 py-2 rounded-lg hover:bg-[#660000] transition shadow-md flex items-center space-x-1">
                    <span>🛒</span>
                    <span>Cart</span>
                </a>
            </div>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden flex items-center space-x-2">
            <button id="mobile-menu-button" class="text-gray-800 focus:outline-none">
                ☰
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#FFF8F0] px-6 py-4 space-y-2">
        <a href="{{ route('home') }}" class="block text-gray-800">Home</a>
        <a href="{{ route('productsView') }}" class="block text-gray-800">Products</a>
        <a href="{{ route('about') }}" class="block text-gray-800">About</a>
        <a href="{{ route('contact') }}" class="block text-gray-800">Contact</a>
        <a href="{{ route('welcome') }}" class="block text-gray-800">Back</a>

        <a href="{{ route('register') }}" class="block border border-[#800000] text-[#800000] px-4 py-2 rounded-lg hover:bg-[#800000] hover:text-white transition">
            Register
        </a>

        <a href="{{ route('cart.view') }}" class="block bg-[#800000] text-white px-4 py-2 rounded-lg hover:bg-[#660000] transition flex items-center space-x-2">
            <span>🛒</span>
            <span>Cart</span>
        </a>
    </div>
</nav>

<script>
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
