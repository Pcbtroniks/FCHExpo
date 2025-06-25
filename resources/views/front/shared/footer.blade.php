<footer>

    <div class=" bg-salmon  relative py-16 px-4 flex md:flex-row md:px-6 sm:justify-center flex-col items-center gap-24">

        <div>
            <img class="max-w-xs" src="{{ asset('assets/logow.png') }}" alt="Logo Country Hotel">
        </div>

        <div class="sm:order-3">
            <ul class="grid grid-cols-2 gap-7">
                <li><a target="_blank" href="#"><img src="{{ asset('assets/icons/socials/WhatsApp Inc.svg') }}" alt="WhatsApp"></a></li>
                <li><a target="_blank" href="#"><img src="{{ asset('assets/icons/socials/Facebook.svg') }}" alt="Facebook"></a></li>
                <li class="col-span-2 mx-auto w-12"><a target="_blank" href="#"><img src="{{ asset('assets/icons/socials/Tiktok.svg') }}" alt="Tiktok"></a></li>
            </ul>
        </div>

        <div class="sm:w-[335px] px-3 text-white">
            <h4>Información de contacto</h4>

            <div class="h-8"></div>

            <div class="flex flex-col gap-10 text-left font-bold">
                <a class="flex gap-2" href="tel:+523336232000">
                    <img src="{{ asset('assets/icons/call-outline.svg') }}" alt="Phone Icon">
                    <div class="flex flex-col justify-center">
                        <span>+52 (33) 3623 2000</span>
                    </div>
                </a>
                <a class="flex gap-2" href="mailto:expo@fch-hotels.com">
                    <img src="{{ asset('assets/icons/services/mail-outline.svg') }}" alt="Location Icon">
                    <span>expo@fch-hotels.com</span>
                </a>
                <a class="flex gap-2" href="#">
                    <img src="{{ asset('assets/icons/location-outline.svg') }}" alt="Location Icon">
                    <span>
                        Calle Coral 2530, Residencial Victoriaa, 45089 Guadalajara, Jal
                    </span>
                </a>
            </div>
        </div>

    </div>

    <div class="bg-hielow p-2 ">

        <ul class="text-white font-bold flex flex-wrap gap-4 justify-center 2xl:gap-20 text-md">
            <li class="hover:text-black"><a href="{{route('home')}}">Inicio</a></li>
            <li class="hover:text-black"><a href="{{route('installations')}}">Instalaciones</a></li>
            <li class="hover:text-black"><a href="{{route('rooms')}}">Habitaciones</a></li>
            <li class="hover:text-black"><a href="{{route('services')}}">Servicios</a></li>
            <li class="hover:text-black"><a href="{{route('contact')}}">Contacto</a></li>
        </ul>

    </div>

    <div class="bg-aqua p-1 text-center">
        <p class="text-white/75 text-sm">
            &copy; 
            <script>document.write(new Date().getFullYear())</script>
            <noscript>2023</noscript>
            Hotel FCH Expo. Todos los derechos reservados.
            Powered by <a href="https://pcbtroniks.com" target="_blank" class="font-bold">Pcbtroniks</a>.
        </p>
    </div>

</footer>