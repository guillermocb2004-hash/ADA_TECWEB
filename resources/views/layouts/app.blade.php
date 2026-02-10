<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Proyecto Laravel')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    {{-- Encabezado --}}
    <x-header />

    {{-- Menú --}}
    <x-menu />

    {{-- Cuerpo --}}
    <main class="container">
        @yield('content')
    </main>

    {{-- Footer --}}
    <x-footer />

</body>
</html>