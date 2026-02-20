<div class="d-flex justify-content-center mt-2 mb-4">
    <div class="px-2 py-2 rounded-pill shadow-lg" style="background-color: #1c1c1e; border: 1px solid #333;">
        <ul class="nav nav-pills align-items-center mb-0 flex-nowrap overflow-auto" style="gap: 5px;">
            
            <li class="nav-item ms-2">
                <a class="nav-link rounded-pill px-4 py-2 fw-semibold {{ request()->routeIs('home') ? 'bg-white text-dark' : 'text-light' }}" href="{{ route('home') }}" style="transition: 0.3s ease;">
                    <i class="bi {{ request()->routeIs('home') ? 'bi-house-fill' : 'bi-house' }} me-1"></i> Inicio
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill px-4 py-2 fw-semibold {{ request()->routeIs('explore') ? 'bg-white text-dark' : 'text-light' }}" href="{{ route('explore') }}" style="transition: 0.3s ease;">
                    <i class="bi {{ request()->routeIs('explore') ? 'bi-grid-fill' : 'bi-grid' }} me-1"></i> Explorar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill px-4 py-2 fw-semibold {{ request()->routeIs('library') ? 'bg-white text-dark' : 'text-light' }}" href="{{ route('library') }}" style="transition: 0.3s ease;">
                    <i class="bi {{ request()->routeIs('library') ? 'bi-music-note-list' : 'bi-music-note-list' }} me-1"></i> Biblioteca
                </a>
            </li>

            <li class="nav-item d-none d-sm-block">
                <div style="width: 1px; height: 20px; background-color: #444; margin: 0 10px;"></div>
            </li>

            <li class="nav-item pe-2">
                <a class="nav-link rounded-pill px-3 py-2 fw-semibold text-secondary custom-hover" href="#" style="transition: 0.3s ease;">
                    <i class="bi bi-collection-play me-1"></i> Mis Playlists
                </a>
            </li>

        </ul>
    </div>
</div>