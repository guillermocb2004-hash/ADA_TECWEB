<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mi Web Player</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
    body {
      background: linear-gradient(#1c1c1c, #0f0f0f);
      color: #b3b3b3;
      font-family: Arial, sans-serif;
    }
    .sidebar {
      background-color: #000;
      height: calc(100vh - 90px); 
      overflow-y: auto;
    }
    .nav-link {
      color: #b3b3b3;
      font-weight: 600;
      border-radius: 4px;
      transition: 0.3s;
    }
    .nav-link:hover, .nav-link.active {
      color: #fff;
      background-color: #282828;
    }
    .nav-link i {
      margin-right: 10px;
      font-size: 1.2rem;
    }

    .main-content {
      background: linear-gradient(180deg, #222 0%, #121212 40%);
      height: calc(100vh - 90px);
      overflow-y: auto;
      padding-bottom: 20px;
    }

    /* ===== TARJETA DE MÚSICA ===== */
    .music-card {
      background-color: #181818; /* fondo oscuro */
      border-radius: 10px; /* esquinas redondas */
      padding: 12px; /* espacio interno */
      text-decoration: none; /* quita subrayado del link */
      color: inherit; /* usa el color del texto normal */
      transition: 0.3s; /* animación suave */
      display: block;
    }

    /* Cuando pasas el mouse encima */
    .music-card:hover {
      background-color: #262626; /* se aclara un poco */
      transform: scale(1.03); /* crece ligeramente */
    }

    /* Imagen dentro de la tarjeta */
    .music-card img {
      width: 100%;
      border-radius: 8px; /* bordes suaves */
      margin-bottom: 8px;
    }

    /* ===== TITULO DE LA PLAYLIST ===== */
    .card-title {
      font-size: 1rem; /* tamaño del texto */
      font-weight: bold; /* negrita */
      color: white; /* blanco */
      margin-bottom: 4px;
    }

    /* ===== DESCRIPCIÓN ===== */
    .card-text {
      font-size: 0.85rem;
      color: #b3b3b3;
    }

    .player-bar {
      position: fixed;
      bottom: 0;
      width: 100%;
      height: 90px;
      background-color: #181818;
      border-top: 1px solid #282828;
      padding: 0 20px;
      z-index: 1000;
    }
    
    .btn-play-circle {
      font-size: 2rem;
      color: #fff;
      padding: 0 10px;
    }
    .btn-play-circle:hover {
      color: #ff0808; /
      transform: scale(1.05);
    }
    
    .progress-bar-bg {
      height: 4px;
      background: #555;
      border-radius: 2px;
      width: 100%;
      margin-top: 5px;
      position: relative;
    }
    .progress-bar-fill {
      height: 100%;
      width: 30%; 
      background: #fff;
      border-radius: 2px;
    }
    .progress-bar-bg:hover .progress-bar-fill {
      background: #ff0808;
    }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        
        <div class="col-md-3 col-lg-2 d-none d-md-block sidebar p-3">
            <div class="text-white mb-4 ps-2 mt-2">
                <i class="bi bi-soundwave fs-3"></i> <span class="fs-4 fw-bold align-middle">Música</span>
            </div>
            
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-house-door-fill"></i> Inicio
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <i class="bi bi-search"></i> Buscar
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <i class="bi bi-collection-play-fill"></i> Biblioteca
                    </a>
                </li>
            </ul>
            <hr class="text-secondary">
            </div>

        <div class="col-12 col-md-9 col-lg-10 main-content p-4">