<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

    body{
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
        background:#f4f6f9;
        font-family:Arial, sans-serif;
    }



    form{
        background:white;
        padding:30px;
        border-radius:8px;
        box-shadow:0 2px 5px rgba(0,0,0,0.1);
        width:300px;
        margin:auto;

    }

    label{
        display:block;
        margin-bottom:8px;
        color:#333;
    }

    input{
        width:100%;
        padding:10px;
        margin-bottom:20px;
        border:1px solid #ddd;
        border-radius:4px;
    }

    .remember{
        margin-bottom:15px;
    }

    button{
        width:107%;
        padding:10px;
        background:blue;
        color:white;
        border:none;
        border-radius:4px;
        cursor:pointer;
        font-size:16px;
    }

    button:hover{
        background:#0056b3;
    }




</style>

</head>
<body>
<!-- <form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1> -->

<form method="POST" action="/login">
    @csrf

    <h1>Sign Up</h1>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Password</label>
    <input type="password" name="password" required>


    <div class="remember">
    <input type="checkbox" id="remember">
    <label for="remember">Remember me</label>
    </div>



    <button type="submit">Login</button>



</form>

</body>
</html>
