<!-- Imagen con botón de reproducción centrado -->
<div class="relative w-full ">
    <div class="dark-overlay">
    <img
        src="{{ asset('assets/img/more/img-video3.jpg') }}"
        alt="Video Thumbnail"
        class="w-full h-96 sm:h-[478px] object-cover cursor-pointer"
        onclick="openModal()"
    >
    </div>
    <button
        onclick="openModal()"
        class="absolute inset-0 flex items-center justify-center z-50 flex-col"
        aria-label="Play Video"
    >
        <svg class="w-20 h-20 text-white drop-shadow-lg hover:scale-110 transition-transform duration-200" fill="currentColor" viewBox="0 0 24 24">
            <path d="M8 5v14l11-7z" />
        </svg>
        <p class="text-xl font-light text-white mt-4">Conoce más de nuestras instalaciones.</p>
    </button>
</div>

<div id="videoModal" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 hidden">
    <div class="relative w-full max-w-4xl aspect-video">
        <iframe
            id="modalVideo"
            class="w-full h-full"
            src=""
            data-src="https://www.youtube-nocookie.com/embed/S6AfVm9ua2A?autoplay=1&si=7h49U53ZOXSjN3Xv"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
        ></iframe>

        <button
            onclick="closeModal()"
            class="absolute top-2 right-2 text-white text-3xl font-bold hover:text-red-500 transition-colors"
            aria-label="Cerrar"
        >
            &times;
        </button>
    </div>
</div>




<script>
    function openModal() {
        const modal = document.getElementById('videoModal');
        const iframe = document.getElementById('modalVideo');

        modal.classList.remove('hidden');
        iframe.src = iframe.getAttribute('data-src');
    }

    function closeModal() {
        const modal = document.getElementById('videoModal');
        const iframe = document.getElementById('modalVideo');

        iframe.src = '';
        modal.classList.add('hidden');
    }
</script>
