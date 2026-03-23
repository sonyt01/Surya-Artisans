<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFF8F0] dark:bg-gray-900 transition-colors duration-300">

<div class="min-h-screen flex flex-col md:flex-row">

    <!-- LEFT SIDE -->
    <div class="md:w-1/2 flex flex-col justify-center px-6 sm:px-16 py-12 md:py-0">
        <h1 class="text-4xl sm:text-5xl font-bold text-[#800000] dark:text-yellow-400 font-serif">
            Surya Artisans
        </h1>

        <p class="mt-6 text-lg text-gray-700 dark:text-gray-300">
            Where tradition, craftsmanship, and elegance are woven into every rug.
        </p>

        <a href="{{ route('home') }}"
           class="inline-block mt-8 w-fit rounded-md bg-[#800000] dark:bg-yellow-600 px-6 sm:px-8 py-3 text-white font-medium hover:bg-[#660000] dark:hover:bg-yellow-500 transition">
            Shop Collection
        </a>
    </div>

    <!-- RIGHT SIDE -->
    <div class="md:w-1/2">
        <img src="{{ asset('images/carpet1.jpg') }}"
             alt="Carpet"
             class="w-full h-64 sm:h-96 md:h-screen object-cover">
    </div>

</div>

</body>
</html>
