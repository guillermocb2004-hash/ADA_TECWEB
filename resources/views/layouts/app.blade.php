<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mi Web Player')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* ESTILOS GENERALES Y LAYOUT DE PANTALLA DIVIDIDA */
        body {
            background: linear-gradient(#1c1c1c, #0f0f0f);
            color: #b3b3b3;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        /* 1. BARRA LATERAL (Izquierda) */
        .sidebar-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: calc(100vh - 90px); /* Deja espacio para el reproductor abajo */
            background-color: #000;
            border-right: 1px solid #282828;
            overflow-y: auto;
            z-index: 1040;
        }

        /* 2. ZONA PRINCIPAL (Derecha) */
        .main-wrapper {
            margin-left: 250px; /* Empuja el contenido para no pisar la barra lateral */
            min-height: 100vh;
            padding-bottom: 120px; /* Espacio para el reproductor */
        }

        /* En móviles, ocultamos la barra lateral para dejar solo la píldora superior */
        @media (max-width: 768px) {
            .sidebar-wrapper { display: none; }
            .main-wrapper { margin-left: 0; }
        }
        
        /* ESTILOS DE LAS TARJETAS */
        .music-card {
            background-color: #181818;
            border-radius: 12px;
            padding: 12px;
            text-decoration: none;
            color: inherit;
            transition: 0.3s;
            display: block;
            height: 100%;
        }
        .music-card:hover {
            background-color: #262626;
            transform: scale(1.03);
        }
        .music-card img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }
        .card-title {
            font-size: 1rem;
            color: #fff;
            font-weight: 700;
            margin-bottom: 4px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .card-text {
            font-size: 0.85rem;
            color: #b3b3b3;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* ESTILOS DEL REPRODUCTOR (FOOTER) */
        .player-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 90px;
            background-color: #181818;
            border-top: 1px solid #282828;
            padding: 0 20px;
            z-index: 1050;
        }
        .btn-play-circle {
            font-size: 2rem;
            color: #fff;
            padding: 0 10px;
            cursor: pointer;
            transition: 0.2s;
        }
        .btn-play-circle:hover {
            color: #ff2d55; /* Toque rojo Apple Music */
            transform: scale(1.05);
        }
        .progress-bar-bg {
            height: 4px;
            background: #555;
            border-radius: 2px;
            width: 100%;
            margin-top: 5px;
            position: relative;
            cursor: pointer;
        }
        .progress-bar-fill {
            height: 100%;
            width: 30%; 
            background: #fff;
            border-radius: 2px;
        }
        .progress-bar-bg:hover .progress-bar-fill {
            background: #ff2d55;
        }

        /* Utilidad para enlaces laterales */
        .nav-link.custom-hover:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white !important;
        }
    </style>
</head>
<body>

    <div class="sidebar-wrapper d-none d-md-block">
        <x-header />
    </div>

    <div class="main-wrapper">
        
        <div class="container-fluid position-relative pt-3" style="z-index: 10;">
            <x-menu />
        </div>

        <main class="container position-relative mt-2" style="z-index: 1;">
            @yield('content')
        </main>
        
    </div>

    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>