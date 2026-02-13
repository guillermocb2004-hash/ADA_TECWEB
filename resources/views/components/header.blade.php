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
      background-color: #121212; 
      color: #b3b3b3; 
      font-family: sans-serif;
      overflow: hidden; 
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

    .music-card {
      background-color: #181818;
      padding: 15px;
      border-radius: 8px;
      transition: background-color 0.3s;
      cursor: pointer;
      text-decoration: none;
      color: inherit;
      height: 100%;
      display: block;
    }
    .music-card:hover {
      background-color: #282828;
    }
    .music-card img {
      width: 100%;
      border-radius: 4px;
      margin-bottom: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    }
    .card-title {
      color: #fff;
      font-weight: 700;
      margin-bottom: 5px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .card-text {
      font-size: 0.85rem;
      line-height: 1.2;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
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