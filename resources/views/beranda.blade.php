<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Apotek - Beranda</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; display: flex; flex-direction: column; min-height: 100vh; }
        nav { background-color: #28a745; padding: 15px; color: white; }
        nav a { color: white; margin-right: 15px; text-decoration: none; font-weight: bold; }
        main { padding: 40px; flex: 1; text-align: center; }
        footer { background-color: #f8f9fa; padding: 15px; text-align: center; border-top: 1px solid #dee2e6; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Beranda</a>
        <a href="{{ route('medicines.index') }}">Daftar Obat</a>
    </nav>
    <main>
        <h1>Aplikasi Manajemen Apotek Sehat</h1>
        <p>Sistem informasi komprehensif untuk mengelola data operasional obat, stok persediaan, dan administrasi layanan kefarmasian secara efisien.</p>
        <br>
        <a href="{{ route('medicines.index') }}" style="background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold;">Lihat Daftar Obat</a>
    </main>
    <footer>
        <p>Dinar Kurniasari · 2457401017</p>
    </footer>
</body>
</html>
