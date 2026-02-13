@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="d-md-none mb-3 d-flex justify-content-between text-white">
        <span class="fs-4 fw-bold">Música</span>
        <i class="bi bi-list fs-2"></i>
    </div>

    <div class="d-flex justify-content-between align-items-end mb-3">
        <h2 class="text-white fw-bold mb-0">Bienvenido</h2>
    </div>

    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4 mb-5">
        <div class="col">
            <a href="#" class="music-card">
                <img src="https://via.placeholder.com/300/333/fff?text=Mix+Relax" alt="Album Art">
                <div class="card-title">Mix Relax</div>
                <div class="card-text">Chill, Ambient y Acoustic.</div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="music-card">
                <img src="https://via.placeholder.com/300/512da8/fff?text=Top+Hits" alt="Album Art">
                <div class="card-title">Top Hits Global</div>
                <div class="card-text">Las canciones más escuchadas.</div>
            </a>
        </div>
        </div>

    <div class="d-flex justify-content-between align-items-end mb-3">
        <h3 class="text-white fw-bold mb-0">Hecho para ti</h3>
        <small class="text-uppercase fw-bold text-secondary cursor-pointer">Ver todo</small>
    </div>

    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
        <div class="col">
            <a href="#" class="music-card">
                <img src="https://via.placeholder.com/300/e65100/fff?text=Daily+Mix" alt="Album Art">
                <div class="card-title">Daily Mix 1</div>
                <div class="card-text">Tus artistas favoritos mezclados.</div>
            </a>
        </div>
    </div>

@endsection
