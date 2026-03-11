<!DOCTYPE html>
<html>
<head>
    <title>Clothing Store Login</title>

    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; }
        .login-card { border: 1px solid #ddd; padding: 20px; border-radius: 8px; width: 300px; }
        input { width: 100%; margin-bottom: 10px; padding: 8px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #87CEFA; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Store Login</h2>
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <label>Email</label>
            <input type="email" name="email" required value="{{ old('email') }}">

            <label>Password</label>
            <input type="password" name="password" required>

            <label><input type="checkbox" name="remember"> Remember Me</label>

            <button type="submit">Login</button>
        </form>

        @if ($errors->any())
            <p style="color: red; font-size: 12px;">{{ $errors->first() }}</p>
        @endif
    </div>
</body>
</html>
