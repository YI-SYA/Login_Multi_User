<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Pengguna Baru</title>
    <link rel="stylesheet" href="{!! asset('register.css') !!}"> 
</head>
<body>
    <div class="container">
        <form class="register-form" method="POST" action="{{ url('/register') }}">
            @csrf
            <h2>Registrasi Pengguna Baru</h2>
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <select id="role" name="role">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
