<div class="p-4 d-flex flex-column h-100">
    
    <div class="text-white mb-4 mt-2 d-flex align-items-center">
        <i class="bi bi-soundwave fs-2 me-2" style="color: #ff2d55;"></i> 
        <span class="fs-4 fw-bolder" style="letter-spacing: -1px;">Música</span>
    </div>
    
    <ul class="nav nav-pills flex-column mb-auto gap-1">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link fw-semibold rounded-3 px-3 py-2 {{ request()->routeIs('home') ? 'bg-secondary bg-opacity-25 text-white' : 'text-secondary custom-hover' }}" style="transition: 0.2s;">
                <i class="bi {{ request()->routeIs('home') ? 'bi-house-door-fill' : 'bi-house-door' }} fs-5 me-2 align-middle"></i> Inicio
            </a>
        </li>
        
        <li class="nav-item">
            <a href="#" class="nav-link fw-semibold rounded-3 px-3 py-2 text-secondary custom-hover" style="transition: 0.2s;">
                <i class="bi bi-search fs-5 me-2 align-middle"></i> Buscar
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('explore') }}" class="nav-link fw-semibold rounded-3 px-3 py-2 {{ request()->routeIs('explore') ? 'bg-secondary bg-opacity-25 text-white' : 'text-secondary custom-hover' }}" style="transition: 0.2s;">
                <i class="bi {{ request()->routeIs('explore') ? 'bi-compass-fill' : 'bi-compass' }} fs-5 me-2 align-middle"></i> Explorar
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('library') }}" class="nav-link fw-semibold rounded-3 px-3 py-2 {{ request()->routeIs('library') ? 'bg-secondary bg-opacity-25 text-white' : 'text-secondary custom-hover' }}" style="transition: 0.2s;">
                <i class="bi {{ request()->routeIs('library') ? 'bi-collection-play-fill' : 'bi-collection-play' }} fs-5 me-2 align-middle"></i> Biblioteca
            </a>
        </li>
    </ul>



</div>