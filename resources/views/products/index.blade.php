<!DOCTYPE html>
<html>
<head>
    <title>Products</title>

    <style>
        body{
            margin:0;
            font-family:Arial;
            background:#f4f6f9;
        }

        .container{
            display:flex;
        }

        .sidebar{
            width:220px;
            background:black;
            color:white;
            height:100vh;
            padding:20px;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            margin:15px 0;
        }

        .content{
            flex:1;
            padding:30px;
        }

        .card{
            background:white;
            padding:20px;
            border-radius:8px;
            box-shadow:0 2px 5px rgba(0,0,0,0.1);
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        th, td{
            padding:12px;
            border-bottom:1px solid #ddd;
            text-align:left;
        }

        th{
            background:#f2f2f2;
        }

        .btn{
            padding:6px 12px;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        .edit{
            background:#3498db;
            color:white;
        }

        .delete{
            background:#e74c3c;
            color:white;
        }

        .add{
            background:#2ecc71;
            color:white;
            padding:10px 15px;
            text-decoration:none;
            border-radius:5px;
        }
    </style>

</head>

<body>

<div class="container">

    <!-- Sidebar -->

    <div class="sidebar">

        <h2>RugMaster</h2>

        <a href="/dashboard">Dashboard</a>
        <a href="/products">Products</a>
        <a href="#">Orders</a>
        <a href="#">Customers</a>
        <a href="#">Reports</a>

    </div>

    <!-- Content -->

    <div class="content">

        <h1>Products</h1>

        <a href="/products/create" class="add">+ Add Product</a>

        <div class="card">

            <table>

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>

                @foreach($products as $product)

                <tr>

                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->price }}</td>

                    <td>
                        <button class="btn edit">Edit</button>
                        <button class="btn delete">Delete</button>
                    </td>

                </tr>

                @endforeach

            </table>

        </div>

    </div>

</div>

</body>
</html>
