<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{!! asset('register.css') !!}"> <!-- Menggunakan CSS yang sama -->
</head>
<body>
    <div class="container">
        <form class="register-form" method="POST" action="{{ url('/login') }}">
            @csrf
            <h2>Login</h2>
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
