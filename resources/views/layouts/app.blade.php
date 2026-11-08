<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apotek Sehat - @yield('title', 'Manajemen Obat')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; display: flex; flex-direction: column; min-height: 100vh; }
        nav { background-color: #28a745; padding: 15px; color: white; }
        nav a { color: white; margin-right: 15px; text-decoration: none; font-weight: bold; }
        main { padding: 40px; flex: 1; }
        footer { background-color: #f8f9fa; padding: 15px; text-align: center; border-top: 1px solid #dee2e6; font-size: 14px; }
    </style>
</head>
<body>

    <!-- Navbar Utama -->
    <nav>
        <a href="{{ url('/') }}">Beranda</a>
        <a href="{{ route('medicines.index') }}">Daftar Obat</a>
    </nav>

    <!-- Konten Dinamis -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Wajib NIM Baru -->
    <footer>
        <p>Dinar Kurniasari · 2457401017</p>
    </footer>

</body>
</html>
