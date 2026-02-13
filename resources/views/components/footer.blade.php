</div> </div> </div> <footer class="player-bar d-flex align-items-center justify-content-between">
    
    <div class="d-flex align-items-center" style="width: 30%;">
    <img src="{{ asset('img/UVST.jpg') }}" class="rounded me-3 d-none d-sm-block" style="width:56px; height:56px; object-fit:cover;" alt="Cover">
        <div class="d-flex flex-column justify-content-center">
            <span class="text-white fw-bold" style="font-size: 0.9rem;">Un Verano Sin Ti</span>
            <span style="font-size: 0.75rem;">Bad Bunny</span>
        <img src="https://via.placeholder.com/56/333/fff?text=Img" class="rounded me-3 d-none d-sm-block" alt="Cover">
        <div class="d-flex flex-column justify-content-center">
            <span class="text-white fw-bold" style="font-size: 0.9rem;">Canción de Prueba</span>
            <span style="font-size: 0.75rem;">Nombre del Artista</span>
        </div>
        <i class="bi bi-heart ms-4 d-none d-md-block"></i>
    </div>

    <div class="d-flex flex-column align-items-center justify-content-center" style="width: 40%;">
        <div class="d-flex align-items-center gap-3 mb-1">
            <i class="bi bi-shuffle text-secondary fs-5" role="button"></i>
            <i class="bi bi-skip-start-fill text-white fs-4" role="button"></i>
            <i class="bi bi-play-circle-fill btn-play-circle" role="button" id="playBtn"></i>
            <i class="bi bi-skip-end-fill text-white fs-4" role="button"></i>
            <i class="bi bi-repeat text-secondary fs-5" role="button"></i>
        </div>
        <div class="d-flex align-items-center w-100 gap-2" style="font-size: 0.7rem;">
            <span>0:45</span>
            <div class="progress-bar-bg" role="button"><div class="progress-bar-fill"></div></div>
            <span>3:20</span>
        </div>
    </div>

    <div class="d-flex align-items-center justify-content-end gap-2" style="width: 30%;">
        <i class="bi bi-mic d-none d-lg-block"></i>
        <i class="bi bi-volume-up text-white"></i>
        <div class="progress-bar-bg d-none d-sm-block" style="width: 100px;">
            <div class="progress-bar-fill" style="width: 70%;"></div>
        </div>
    </div>
</footer>

<script>
    const playBtn = document.getElementById('playBtn');
    let isPlaying = false;
    if(playBtn){
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
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>