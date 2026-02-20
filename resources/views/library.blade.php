@extends('layouts.app')

@section('title', 'Mi Biblioteca')

@section('content')
    <style>
        /* Estilos personalizados */
        .nav-pills .nav-link.custom-pill.active {
            background-color: #ff2d55 !important;
            color: white !important;
            border-color: #ff2d55 !important;
        }
        .nav-pills .nav-link.custom-pill {
            border: 1px solid #444;
            color: white;
            transition: all 0.2s ease;
        }
        .artist-img {
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(0,0,0,0.5);
        }
        .song-item:hover {
            background-color: rgba(255,255,255,0.1);
            border-radius: 12px;
        }
        /* Estilos para el modal de artista */
        #modal-artist-header {
            height: 350px;
            background-size: cover;
            background-position: center top;
            position: relative;
        }
        #modal-artist-header::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0; right: 0;
            height: 60%;
            background: linear-gradient(to top, #1c1c1e 0%, transparent 100%);
        }
        .modal-content {
            background-color: #1c1c1e;
            border: 1px solid #333;
        }
    </style>

    <div class="mb-4 mt-2">
        <h1 class="text-white fw-bolder" style="font-size: 3rem; letter-spacing: -1px;">Biblioteca</h1>
    </div>

    <ul class="nav nav-pills mb-4 gap-2 flex-nowrap overflow-auto pb-2 border-bottom border-dark pb-3" id="library-tabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link custom-pill active rounded-pill px-4 fw-bold" data-bs-toggle="pill" data-bs-target="#playlists" type="button" role="tab">Playlists</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link custom-pill rounded-pill px-4 fw-bold" data-bs-toggle="pill" data-bs-target="#albums" type="button" role="tab">Álbumes</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link custom-pill rounded-pill px-4 fw-bold" data-bs-toggle="pill" data-bs-target="#songs" type="button" role="tab">Canciones</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link custom-pill rounded-pill px-4 fw-bold" data-bs-toggle="pill" data-bs-target="#artists" type="button" role="tab">Artistas</button>
        </li>
    </ul>

    <div class="tab-content" id="library-tabs-content">
        
        <div class="tab-pane fade show active" id="playlists" role="tabpanel">
             <div class="d-flex justify-content-between align-items-end mb-3">
                <h3 class="text-white fw-bold mb-0">Tus listas</h3>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4 mb-5">
                <div class="col">
                    <a href="#" class="music-card text-decoration-none">
                        <div class="rounded mb-2 d-flex justify-content-center align-items-center" style="width:100%; aspect-ratio: 1; border-radius:12px !important; background: linear-gradient(135deg, #ff2d55 0%, #c41031 100%); box-shadow: 0 4px 15px rgba(255, 45, 85, 0.3);">
                            <i class="bi bi-heart-fill text-white" style="font-size: 3rem;"></i>
                        </div>
                        <div class="card-title text-white fw-bold mb-0">Tus Me Gusta</div>
                        <div class="card-text text-secondary" style="font-size: 0.85rem;">246 canciones</div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="music-card text-decoration-none">
                        <img src="{{ asset('img/Relax.png') }}" class="w-100 mb-2" style="border-radius:12px; object-fit:cover; aspect-ratio: 1; box-shadow: 0 4px 10px rgba(0,0,0,0.3);" alt="Cover">
                        <div class="card-title text-white fw-bold mb-0">Mix Relax</div>
                        <div class="card-text text-secondary" style="font-size: 0.85rem;">Creada por ti</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="albums" role="tabpanel">
            <div class="d-flex justify-content-between align-items-end mb-3">
                <h3 class="text-white fw-bold mb-0">Guardados recientemente</h3>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4 mb-5">
                <div class="col">
                    <a href="#" class="music-card text-decoration-none">
                        <img src="{{ asset('img/UVST.jpg') }}" class="w-100 mb-2 rounded-4 shadow" style="object-fit:cover; aspect-ratio: 1;" alt="Bad Bunny">
                        <div class="card-title text-white fw-bold mb-0 text-truncate">Un Verano Sin Ti</div>
                        <div class="card-text text-secondary" style="font-size: 0.85rem;">Bad Bunny</div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="music-card text-decoration-none">
                        <img src="{{ asset('img/Zoe.jpg') }}" class="w-100 mb-2 rounded-4 shadow" style="object-fit:cover; aspect-ratio: 1;" alt="Zoé">
                        <div class="card-title text-white fw-bold mb-0 text-truncate">Reptilectric</div>
                        <div class="card-text text-secondary" style="font-size: 0.85rem;">Zoé</div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="music-card text-decoration-none">
                        <img src="{{ asset('img/Sabrina.jpg') }}" class="w-100 mb-2 rounded-4 shadow" style="object-fit:cover; aspect-ratio: 1;" alt="Sabrina Carpenter">
                        <div class="card-title text-white fw-bold mb-0 text-truncate">Short n' Sweet</div>
                        <div class="card-text text-secondary" style="font-size: 0.85rem;">Sabrina Carpenter</div>
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="music-card text-decoration-none">
                        <img src="{{ asset('img/Smith.jpg') }}" class="w-100 mb-2 rounded-4 shadow" style="object-fit:cover; aspect-ratio: 1;" alt="The Smiths">
                        <div class="card-title text-white fw-bold mb-0 text-truncate">The Queen Is Dead</div>
                        <div class="card-text text-secondary" style="font-size: 0.85rem;">The Smiths</div>
                    </a>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="songs" role="tabpanel">
            <div class="d-flex justify-content-between align-items-end mb-3">
                <h3 class="text-white fw-bold mb-0">Tus favoritas</h3>
            </div>
            <div class="d-flex flex-column gap-2 mb-5">
                <div class="d-flex align-items-center p-2 song-item cursor-pointer transition-base">
                    <img src="{{ asset('img/UVST.jpg') }}" class="rounded me-3" style="width: 50px; height: 50px; object-fit: cover;">
                    <div class="flex-grow-1">
                        <div class="text-white fw-bold mb-0">Me Porto Bonito</div>
                        <div class="text-secondary" style="font-size: 0.85rem;">Bad Bunny, Chencho Corleone</div>
                    </div>
                    <div class="text-secondary me-3 d-none d-md-block">2:58</div>
                    <i class="bi bi-three-dots text-secondary fs-5"></i>
                </div>
                <div class="d-flex align-items-center p-2 song-item cursor-pointer transition-base">
                    <img src="{{ asset('img/Zoe.jpg') }}" class="rounded me-3" style="width: 50px; height: 50px; object-fit: cover;">
                    <div class="flex-grow-1">
                        <div class="text-white fw-bold mb-0">Labios Rotos</div>
                        <div class="text-secondary" style="font-size: 0.85rem;">Zoé</div>
                    </div>
                    <div class="text-secondary me-3 d-none d-md-block">4:08</div>
                    <i class="bi bi-three-dots text-secondary fs-5"></i>
                </div>
                <div class="d-flex align-items-center p-2 song-item cursor-pointer transition-base">
                    <img src="{{ asset('img/Sabrina.jpg') }}" class="rounded me-3" style="width: 50px; height: 50px; object-fit: cover;">
                    <div class="flex-grow-1">
                        <div class="text-white fw-bold mb-0">Espresso</div>
                        <div class="text-secondary" style="font-size: 0.85rem;">Sabrina Carpenter</div>
                    </div>
                    <div class="text-secondary me-3 d-none d-md-block">2:55</div>
                    <i class="bi bi-three-dots text-secondary fs-5"></i>
                </div>
                <div class="d-flex align-items-center p-2 song-item cursor-pointer transition-base">
                    <img src="{{ asset('img/Smith.jpg') }}" class="rounded me-3" style="width: 50px; height: 50px; object-fit: cover;">
                    <div class="flex-grow-1">
                        <div class="text-white fw-bold mb-0">There Is A Light That Never Goes Out</div>
                        <div class="text-secondary" style="font-size: 0.85rem;">The Smiths</div>
                    </div>
                    <div class="text-secondary me-3 d-none d-md-block">4:04</div>
                    <i class="bi bi-three-dots text-secondary fs-5"></i>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="artists" role="tabpanel">
            <div class="d-flex justify-content-between align-items-end mb-3">
                <h3 class="text-white fw-bold mb-0">Siguiendo</h3>
            </div>
            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-4 text-center mb-5">
                
                <div class="col">
                    <a href="#" class="text-decoration-none artist-trigger music-card"
                       data-bs-toggle="modal" data-bs-target="#artistDetailsModal"
                       data-artist-name="Bad Bunny"
                       data-artist-img="{{ asset('img/BadBunnyB.jpg') }}"
                       data-artist-bio="Fenómeno global de la música urbana. Ha redefinido el trap latino y el reguetón, convirtiéndose en uno de los artistas más escuchados del mundo."
                       data-artist-listeners="85.4M oyentes mensuales"
                       data-artist-songs='[{"title":"Me Porto Bonito","time":"2:58"},{"title":"Tití Me Preguntó","time":"4:03"},{"title":"Ojitos Lindos","time":"4:18"},{"title":"Efecto","time":"3:33"},{"title":"Moscow Mule","time":"4:05"}]'>
                        <img src="{{ asset('img/UVST.jpg') }}" class="artist-img mb-3" alt="Bad Bunny">
                        <div class="text-white fw-bold">Bad Bunny</div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="text-decoration-none artist-trigger music-card"
                       data-bs-toggle="modal" data-bs-target="#artistDetailsModal"
                       data-artist-name="Zoé"
                       data-artist-img="{{ asset('img/ZoeB.jpg') }}"
                       data-artist-bio="Banda mexicana de rock alternativo conocida por sus letras espaciales y sonido atmosférico. Iconos del rock en español moderno."
                       data-artist-listeners="6.2M oyentes mensuales"
                       data-artist-songs='[{"title":"Labios Rotos","time":"4:08"},{"title":"Soñé","time":"3:15"},{"title":"Luna","time":"4:52"},{"title":"Nada","time":"4:57"},{"title":"Arrullo de Estrellas","time":"4:12"}]'>
                        <img src="{{ asset('img/Zoe.jpg') }}" class="artist-img mb-3" alt="Zoé">
                        <div class="text-white fw-bold">Zoé</div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="text-decoration-none artist-trigger music-card"
                       data-bs-toggle="modal" data-bs-target="#artistDetailsModal"
                       data-artist-name="Sabrina Carpenter"
                       data-artist-img="{{ asset('img/SabrinaB.jpg') }}"
                       data-artist-bio="Cantante y actriz estadounidense. Su estilo pop combina letras ingeniosas con melodías pegadizas, ganando gran popularidad recientemente."
                       data-artist-listeners="45.1M oyentes mensuales"
                       data-artist-songs='[{"title":"Espresso","time":"2:55"},{"title":"Please Please Please","time":"3:06"},{"title":"Feather","time":"3:05"},{"title":"Manchild","time":"3:34"},{"title":"Taste","time":"2:37"}]'>
                        <img src="{{ asset('img/Sabrina.jpg') }}" class="artist-img mb-3" alt="Sabrina Carpenter">
                        <div class="text-white fw-bold">Sabrina Carpenter</div>
                    </a>
                </div>

                <div class="col">
                    <a href="#" class="text-decoration-none artist-trigger music-card"
                       data-bs-toggle="modal" data-bs-target="#artistDetailsModal"
                       data-artist-name="The Smiths"
                       data-artist-img="{{ asset('img/SmithB.jpg') }}"
                       data-artist-bio="Legendaria banda británica de indie rock de los 80. Conocidos por la voz única de Morrissey y el distintivo sonido de guitarra de Johnny Marr."
                       data-artist-listeners="12.8M oyentes mensuales"
                       data-artist-songs='[{"title":"There Is A Light That Never Goes Out","time":"4:04"},{"title":"This Charming Man","time":"2:43"},{"title":"How Soon Is Now?","time":"6:45"},{"title":"Heaven Knows I\u0027m Miserable Now","time":"3:34"},{"title":"Please, Please, Please...","time":"1:53"}]'>
                        <img src="{{ asset('img/Smith.jpg') }}" class="artist-img mb-3" alt="The Smiths">
                        <div class="text-white fw-bold">The Smiths</div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="artistDetailsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content text-white rounded-5 overflow-hidden shadow-lg">
                
                <div id="modal-artist-header" class="d-flex align-items-end p-4">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 rounded-circle bg-dark bg-opacity-50 p-2" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div style="z-index: 2;">
                        <h1 id="modal-artist-name" class="fw-bolder display-4 mb-0 text-shadow">Artist Name</h1>
                         <p id="modal-artist-listeners" class="fw-bold text-warning mb-0" style="letter-spacing: 1px;"><i class="bi bi-people-fill me-2"></i>Listeners</p>
                    </div>
                </div>

                <div class="modal-body p-4 bg-dark">
                    <div class="mb-4">
                        <h5 class="fw-bold text-white mb-2">Acerca del artista</h5>
                        <p id="modal-artist-bio" class="text-secondary fs-5" style="line-height: 1.6;">Description goes here...</p>
                    </div>

                    <h5 class="fw-bold text-white mb-3">Canciones Top</h5>
                    <div id="modal-artist-songs-container" class="d-flex flex-column gap-2">
                        </div>
                </div>
            </div>
        </div>
    </div>

   <script>
        document.addEventListener('DOMContentLoaded', function() {
            const artistModal = document.getElementById('artistDetailsModal');
            
            // ESTA ES LA LÍNEA MÁGICA: Saca el modal del contenedor atrapado y lo pone al frente
            document.body.appendChild(artistModal);
            
            artistModal.addEventListener('show.bs.modal', event => {
                const button = event.relatedTarget;
                
                // Extraer la info básica
                const name = button.getAttribute('data-artist-name');
                const img = button.getAttribute('data-artist-img');
                const bio = button.getAttribute('data-artist-bio');
                const listeners = button.getAttribute('data-artist-listeners');
                
                // Extraer el JSON de las canciones y convertirlo a un objeto JavaScript
                const songsJson = button.getAttribute('data-artist-songs');
                const songs = JSON.parse(songsJson);

                // Elementos del DOM a actualizar
                const modalHeader = artistModal.querySelector('#modal-artist-header');
                const modalName = artistModal.querySelector('#modal-artist-name');
                const modalBio = artistModal.querySelector('#modal-artist-bio');
                const modalListeners = artistModal.querySelector('#modal-artist-listeners');
                const songsContainer = artistModal.querySelector('#modal-artist-songs-container');

                // Llenar datos básicos
                modalHeader.style.backgroundImage = `url('${img}')`;
                modalName.textContent = name;
                modalBio.textContent = bio;
                modalListeners.innerHTML = `<i class="bi bi-people-fill me-2"></i>${listeners}`;

                // Limpiar canciones anteriores y generar las nuevas
                songsContainer.innerHTML = ''; 
                songs.forEach((song, index) => {
                    const songHtml = `
                        <div class="d-flex align-items-center p-2 song-item rounded-3">
                            <span class="text-secondary fw-bold me-3 ms-2">${index + 1}</span>
                            <div class="flex-grow-1 fw-bold text-white">${song.title}</div>
                            <div class="text-secondary me-3">${song.time}</div>
                            <i class="bi bi-play-circle-fill text-danger fs-4 cursor-pointer"></i>
                        </div>
                    `;
                    // Insertar el HTML generado en el contenedor
                    songsContainer.insertAdjacentHTML('beforeend', songHtml);
                });
            });
        });
    </script>

@endsection