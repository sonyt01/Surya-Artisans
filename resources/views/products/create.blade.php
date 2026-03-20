<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
    @csrf

    <input type="text" name="name" placeholder="Product Name" class="border p-2 block mb-4 w-full">

    <input type="number" name="price" placeholder="Price" class="border p-2 block mb-4 w-full">

    <input type="file" name="image" class="mb-4">

    <button class="bg-[#800000] text-white px-4 py-2 rounded-lg hover:bg-[#660000] transition">
        Add Product
    </button>
</form>
</body>
</html>
