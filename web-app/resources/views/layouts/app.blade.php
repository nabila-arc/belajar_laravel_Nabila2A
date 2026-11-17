<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Latihan Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="site-header">
        <a class="brand" href="{{ route('mahasiswa.index') }}">Belajar Laravel</a>
        <nav aria-label="Navigasi utama">
            <a href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
            <a href="{{ route('kalkulator.segitiga') }}">Kalkulator</a>
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>
</body>
</html>
