<div>
    <div class="container h-screen w-full ">
        <div class="containerImg dark-overlay overflow-hidden w-full h-full absolute -z-10 ">
            <img class="bg-cover object-cover w-full h-full" src="{{asset('assets/img/restaurant/granada1.jpg')}}">
            <img class="bg-cover object-cover w-full h-full hidden" src="{{asset('assets/img/restaurant/granada2.jpg')}}">
            <img class="bg-cover object-cover w-full h-full hidden" src="{{asset('assets/img/restaurant/granada3.jpg')}}">
        </div>

        <div class=" z-10 absolute top-1/3 text-white  left-1/4">
            <div>
                  <h1 class="text-5xl font-bold">GRANADA</h1>
                  <p class="w-1/3 text-4xl mt-6">Combinamos calidad, estilo
                    y platillos deliciosos para traerte
                    una experiencia gastronómica
                    placentera y a tu medida.</p>
            </div>
            <a target="_blanck" href="{{ route('rengin.direct-booking') }}">
                    <button class="cta-main  bg-main mt-6">
                        <span class="text-xl p-2 text-center">Ver menú</span>
                    </button>
                </a>
        </div>
</div>

