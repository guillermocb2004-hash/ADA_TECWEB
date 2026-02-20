<footer class="player-bar d-flex align-items-center justify-content-between px-4">
    
    <div class="d-flex align-items-center" style="width: 30%;">
        <img src="{{ asset('img/UVST.jpg') }}" class="rounded me-3 d-none d-sm-block shadow" style="width:56px; height:56px; object-fit:cover;" alt="Cover">
        
        <div class="d-flex flex-column justify-content-center">
            <span class="text-white fw-bold mb-0" style="font-size: 0.95rem;">Me Porto Bonito</span>
            <span class="text-secondary" style="font-size: 0.8rem;">Bad Bunny</span>
        </div>
        
        <i class="bi bi-heart ms-4 d-none d-md-block text-secondary fs-5" style="cursor: pointer;" id="likeBtn"></i>
    </div>

    <div class="d-flex flex-column align-items-center justify-content-center" style="width: 40%;">
        <div class="d-flex align-items-center gap-4 mb-2">
            <i class="bi bi-shuffle text-secondary fs-5" role="button"></i>
            <i class="bi bi-skip-start-fill text-white fs-4" role="button"></i>
            <i class="bi bi-play-circle-fill btn-play-circle" role="button" id="playBtn" style="font-size: 2.2rem;"></i>
            <i class="bi bi-skip-end-fill text-white fs-4" role="button"></i>
            <i class="bi bi-repeat text-secondary fs-5" role="button"></i>
        </div>
        <div class="d-flex align-items-center w-100 gap-3" style="font-size: 0.75rem;">
            <span class="text-secondary" id="currentTimeText">0:45</span>
            <div class="progress-bar-bg flex-grow-1" role="button" id="timeBarBg">
                <div class="progress-bar-fill" style="width: 30%; transition: width 0.1s ease-out;" id="timeBarFill"></div>
            </div>
            <span class="text-secondary">2:58</span>
        </div>
    </div>

    <div class="d-flex align-items-center justify-content-end gap-3" style="width: 30%;">
        <i class="bi bi-mic text-secondary d-none d-lg-block fs-5" role="button"></i>
        <i class="bi bi-music-note-list text-secondary d-none d-lg-block fs-5" role="button"></i>
        <i class="bi bi-pc-display text-secondary d-none d-lg-block fs-5" role="button"></i>
        
        <div class="d-flex align-items-center gap-2">
            <i class="bi bi-volume-up text-secondary fs-5" id="volIcon" role="button"></i>
            <div class="progress-bar-bg d-none d-sm-block" style="width: 100px;" role="button" id="volBarBg">
                <div class="progress-bar-fill" style="width: 70%; transition: width 0.1s ease-out;" id="volBarFill"></div>
            </div>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // ---  LÓGICA DEL BOTÓN PLAY/PAUSE ---
        const playBtn = document.getElementById('playBtn');
        let isPlaying = false;
        
        if(playBtn) {
            playBtn.addEventListener('click', () => {
                if (isPlaying) {
                    playBtn.classList.remove('bi-pause-circle-fill');
                    playBtn.classList.add('bi-play-circle-fill');
                } else {
                    playBtn.classList.remove('bi-play-circle-fill');
                    playBtn.classList.add('bi-pause-circle-fill');
                }
                isPlaying = !isPlaying;
            });
        }

        // ---  LÓGICA DE BARRAS INTERACTIVAS (Reutilizable) ---
        function setupInteractiveBar(bgId, fillId) {
            const barBg = document.getElementById(bgId);
            const barFill = document.getElementById(fillId);
            
            if(barBg && barFill) {
                // Detectar el clic en la barra
                barBg.addEventListener('mousedown', function(e) {
                    updateBar(e);
                    
                    // Permitir arrastrar si el usuario mantiene presionado el click
                    document.addEventListener('mousemove', updateBar);
                    document.addEventListener('mouseup', function() {
                        document.removeEventListener('mousemove', updateBar);
                    }, { once: true });
                });

                // Función que calcula y aplica el porcentaje
                function updateBar(e) {
                    const rect = barBg.getBoundingClientRect();
                    // Calcular la posición del clic restando el inicio de la barra
                    let clickX = e.clientX - rect.left;
                    
                    // Convertir a porcentaje (0 a 100)
                    let percentage = (clickX / rect.width) * 100;
                    
                    // Evitar que se salga de los límites
                    if (percentage < 0) percentage = 0;
                    if (percentage > 100) percentage = 100;
                    
                    // Actualizar el estilo CSS de la barra blanca
                    barFill.style.width = percentage + '%';

                    // Si es la barra de volumen, cambiar el icono visualmente si llega a 0
                    if(bgId === 'volBarBg') {
                        const volIcon = document.getElementById('volIcon');
                        if(percentage === 0) {
                            volIcon.className = 'bi bi-volume-mute text-secondary fs-5';
                        } else if(percentage < 50) {
                            volIcon.className = 'bi bi-volume-down text-secondary fs-5';
                        } else {
                            volIcon.className = 'bi bi-volume-up text-secondary fs-5';
                        }
                    }
                }
            }
        }

        // Activar la barra de tiempo y la de volumen
        setupInteractiveBar('timeBarBg', 'timeBarFill');
        setupInteractiveBar('volBarBg', 'volBarFill');

        //  Lógica del botón de "Me gusta" (Corazón)
        const likeBtn = document.getElementById('likeBtn');
        if(likeBtn) {
            likeBtn.addEventListener('click', function() {
                if(this.classList.contains('bi-heart')) {
                    this.classList.replace('bi-heart', 'bi-heart-fill');
                    this.classList.replace('text-secondary', 'text-danger'); 
                } else {
                    this.classList.replace('bi-heart-fill', 'bi-heart');
                    this.classList.replace('text-danger', 'text-secondary');
                }
            });
        }

    });
</script>