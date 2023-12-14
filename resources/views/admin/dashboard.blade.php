<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Admin</title>
    <!-- Tambahkan link ke CSS yang sesuai -->
    <link rel="stylesheet" href="{!! asset('admin.css') !!}">
    <!-- Tambahkan script JS yang diperlukan jika ada -->
    <script src="path/to/admin/script.js"></script>
</head>
<body>
    <header>
        <!-- Header untuk halaman admin -->
        <h1>Selamat Datang, Admin!</h1>
        <nav>
            <!-- Menu navigasi untuk admin -->
            <ul>
                <li><a href="/admin">Dashboard</a></li>
                <li><a href="/admin/users">Pengguna</a></li>
                <li><a href="/logout">Keluar</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Konten utama halaman admin -->
        <section>
            <!-- Bagian konten halaman admin -->
            <h2>Konten Utama</h2>
            <p>Selamat datang di halaman admin. Ini adalah area konten untuk admin.</p>
        </section>
    </main>

    <footer>
        <!-- Footer untuk halaman admin -->
        <p>Hak Cipta &copy; 20XX - Halaman Admin</p>
    </footer>
</body>
</html>
