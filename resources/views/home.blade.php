@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="d-md-none mb-3 d-flex justify-content-between text-white">
        <span class="fs-4 fw-bold">Música</span>
        <i class="bi bi-list fs-2"></i>
    </div>

    <div class="d-flex justify-content-between align-items-end mb-3">
        <h2 class="text-white fw-bold mb-0">Lista de Exitos</h2>
    </div>

    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4 mb-5">
        <div class="col">
            <a href="#" class="music-card">
                <img src="{{ asset('img/Relax.png') }}" class="rounded me-3 d-none d-sm-block" style="width:56px; height:56px; object-fit:cover;" alt="Cover">
                <div class="card-title">Mix Relax</div>
                <div class="card-text">Chill, Ambient y Acoustic.</div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="music-card">
                <img src="{{ asset('img/TopHits.png') }}" class="rounded me-3 d-none d-sm-block" style="width:56px; height:56px; object-fit:cover;" alt="Cover">
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
            <img src="{{ asset('img/Daily.png') }}" 
                 style="width:100%; border-radius:8px;"
                 alt="Daily Mix">
            <div class="card-title">Daily Mix</div>
            <div class="card-text">
                Tus artistas favoritos mezclados.
            </div>
        </a>
    </div>
    <div class="col">
        <a href="#" class="music-card">
            <img src="{{ asset('img/Reggaeton.png') }}" 
                 style="width:100%; border-radius:8px;"
                 alt="Reggaeton Mix">
            <div class="card-title">Reggaeton Mix</div>
            <div class="card-text">
                Únete al party con estos hits.
            </div>
        </a>
    </div>
</div>

@endsection