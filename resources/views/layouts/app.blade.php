<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Proyecto Laravel')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <x-header />

    <x-menu />

    <main class="container">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>