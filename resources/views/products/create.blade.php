<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Add Product</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <p>
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
    </p>
    <p>
        <label>Quantity:</label>
        <input type="number" name="qty" value="{{ old('qty') }}">
    </p>
    <p>
        <label>Price:</label>
        <input type="text" name="price" value="{{ old('price') }}">
    </p>
    <p>
        <button type="submit">Add Product</button>
    </p>
</form>
</body>
</html>
