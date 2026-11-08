<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran Eatery - Beranda</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; display: flex; flex-direction: column; min-height: 100vh; }
        nav { background-color: #d9534f; padding: 15px; color: white; }
        nav a { color: white; margin-right: 15px; text-decoration: none; font-weight: bold; }
        main { padding: 40px; flex: 1; text-align: center; }
        footer { background-color: #f8f9fa; padding: 15px; text-align: center; border-top: 1px solid #dee2e6; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Beranda</a>
        <a href="{{ route('menus.index') }}">Daftar Menu</a>
    </nav>
    <main>
        <h1>Selamat Datang di Restoran Eatery Sehat</h1>
        <p>Sistem Manajemen Kuliner Modern untuk memantau resep hidangan, ketersediaan porsi hidangan, dan harga menu makanan secara cepat.</p>
        <br>
        <a href="{{ route('menus.index') }}" style="background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold;">Buka Daftar Menu Kuliner</a>
    </main>
    <footer>
        <p>Dinar Kurniasari · 2457401017</p>
    </footer>
</body>
</html>
