@extends('layouts.app')

@section('title', 'Explorar')

@section('content')
    <div class="mb-4 mt-2 border-bottom border-secondary pb-2">
        <h1 class="text-white fw-bolder" style="font-size: 3rem; letter-spacing: -1px;">Explorar</h1>
    </div>

    <div class="mb-5">
        <h3 class="text-white fw-bold mb-3 text-uppercase" style="font-size: 0.9rem; letter-spacing: 2px; color: #ff2d55 !important;">Novedades de la semana</h3>
        <div class="card bg-dark text-white border-0 rounded-4 overflow-hidden" style="position: relative; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
            <img src="{{ asset('img/Banner.png') }}" class="card-img" alt="Banner Novedades" style="height: 350px; object-fit: cover; filter: brightness(0.6);">
            
            <div class="card-img-overlay d-flex flex-column justify-content-end p-5 bg-gradient" style="background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 60%);">
                <small class="text-uppercase fw-bold text-warning mb-2" style="letter-spacing: 1px;">Destacado Global</small>
                <h2 class="card-title fw-bolder mb-1" style="font-size: 3.5rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Sonidos del Futuro</h2>
                <p class="card-text text-light opacity-90 fs-5">Explora los lanzamientos que están redefiniendo la escena musical este mes.</p>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-end mb-3 mt-5">
        <h3 class="text-white fw-bold mb-0">Estados de ánimo</h3>
    </div>

    <div class="row row-cols-2 row-cols-md-4 g-3 mb-5">
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="music-card card border-0 rounded-4 text-center p-4 h-100" style="background: linear-gradient(45deg, #ff9a9e 0%, #fecfef 99%, #fecfef 100%);">
                    <h4 class="fw-bolder text-dark mb-0 mt-2">Romance</h4>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="music-card card border-0 rounded-4 text-center p-4 h-100" style="background: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">
                    <h4 class="fw-bolder text-dark mb-0 mt-2">Energía</h4>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="music-card card border-0 rounded-4 text-center p-4 h-100" style="background: linear-gradient(120deg, #a18cd1 0%, #fbc2eb 100%);">
                    <h4 class="fw-bolder text-dark mb-0 mt-2">Enfoque</h4>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="music-card card border-0 rounded-4 text-center p-4 h-100" style="background: linear-gradient(to right, #434343 0%, black 100%);">
                    <h4 class="fw-bolder text-white mb-0 mt-2">Melancolía</h4>
                </div>
            </a>
        </div>
    </div>
@endsection