<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eatery Resto - @yield('title', 'Manajemen Menu')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; display: flex; flex-direction: column; min-height: 100vh; }
        nav { background-color: #d9534f; padding: 15px; color: white; }
        nav a { color: white; margin-right: 15px; text-decoration: none; font-weight: bold; }
        main { padding: 40px; flex: 1; }
        footer { background-color: #f8f9fa; padding: 15px; text-align: center; border-top: 1px solid #dee2e6; font-size: 14px; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Beranda</a>
        <a href="{{ route('menus.index') }}">Daftar Menu</a>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Dinar Kurniasari · 2457401017</p>
    </footer>
</body>
</html>
