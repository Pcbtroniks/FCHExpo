
<section>


    <div class="w-full bg-salmon-light p-4 sm:px-16 ">

        {{-- Rooms --}}
            <div class="max-w-screen-2xl mx-auto">

                {{-- card --}}

                <div class="card-shadow flex flex-col lg:flex-row xl:max-h-80 xl:h-80 max-w-[1253px] lg:mx-auto my-8">

                    <div class="h-52 lg:h-full min-h-5 basis-1/3 lg:overflow-hidden">
                        <picture>
                            <img class="h-full w-full object-cover lg:h-96 xl:h-80" src="{{ asset('assets/img/rooms/simple.jpg') }}" alt="Habitacion simple">
                        </picture>
                    </div>

                    <div class="p-4 sm:p-6 flex flex-col basis-2/3 xl:h-80">

                        <h2 class="text-2xl font-bold my-4 sm:my-2 text-dark-medium capitalize">Habitación simple</h2>

                        <div>

                            <p class="text-sm">
                                Esta habitación doble cuenta con artículos de aseo gratuitos, baño privado con ducha, armario, TV de pantalla plana y 1 cama.
                            </p>

                            <ul class="grid grid-cols-3 py-4 text-xs">
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Internet inalámbrico y WiFi gratuito</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Televisión plasma</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Señal de TV por cable</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Escritorio de trabajo</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Aire acondicionado</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Telefono</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Set para planchado</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Baño con acabado de mármol</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Espejo de vanidad</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Secadora de cabello</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Amenidades de baño</li>
                            </ul>

                        </div>

                        <div class="mt-8 xl:mt-4 justify-self-end">

                            <a target="_blank" href="{{ route('rengin.direct-booking') }}">
                                <button class="w-36 h-12 font-bold bg-salmon text-white text-sm">Reservar ahora</button>
                            </a>

                        </div>

                    </div>

                </div>

                {{-- card --}}

                <div class="card-shadow flex flex-col lg:flex-row xl:max-h-80 xl:h-80 max-w-[1253px] lg:mx-auto my-8">

                    <div class="h-52 lg:h-full min-h-5 basis-1/3 lg:overflow-hidden">
                        <picture>
                            <img class="h-full w-full object-cover lg:h-96 xl:h-80" src="{{ asset('assets/img/rooms/doble.jpg') }}" alt="Habitación Doble">
                        </picture>
                    </div>

                    <div class="p-4 sm:p-6 flex flex-col basis-2/3 xl:h-80">

                        <h2 class="text-2xl font-bold my-4 sm:my-2 text-dark-medium">Habitación Doble</h2>

                        <div>

                            <p class="text-sm">
                                Esta habitación doble cuenta con 2 camas individuales, armario, TV de pantalla plana y baño privado con ducha y artículos de aseo gratuitos.
                            </p>

                            <ul class="grid grid-cols-3 py-4 text-xs">
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Internet inalámbrico y WiFi gratuito</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Televisión plasma</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Señal de TV por cable</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Escritorio de trabajo</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Aire acondicionado</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Telefono</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Set para planchado</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Baño con acabado de mármol</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Espejo de vanidad</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Secadora de cabello</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Amenidades de baño</li>
                            </ul>

                        </div>

                        <div class="mt-4 justify-self-end">

                            <a target="_blank" href="{{ route('rengin.direct-booking') }}">
                                <button class="w-36 h-12 font-bold bg-salmon text-white text-sm">Reservar ahora</button>
                            </a>

                        </div>

                    </div>

                </div>

                {{-- card --}}

                <div class="card-shadow flex flex-col lg:flex-row xl:max-h-80 xl:h-80 max-w-[1253px] lg:mx-auto my-8">

                    <div class="h-52 lg:h-full min-h-5 basis-1/3 lg:overflow-hidden">
                        <picture>
                            <img class="h-full w-full object-cover lg:h-96 xl:h-80" src="{{ asset('assets/img/rooms/master.jpg') }}" alt="Habitación Triple">
                        </picture>
                    </div>

                    <div class="p-4 sm:p-6 flex flex-col basis-2/3 xl:h-80">

                        <h2 class="text-2xl font-bold my-4 sm:my-2 text-dark-medium">Habitación Triple</h2>

                        <div>

                            <p class="text-sm">
                                Esta habitación triple cuenta con artículos de aseo gratuitos, baño privado con ducha, armario, TV de pantalla plana y 3 camas.
                            </p>

                            <ul class="grid grid-cols-3 py-4 text-xs">
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Internet inalámbrico y WiFi gratuito</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Televisión plasma</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Señal de TV por cable</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Escritorio de trabajo</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Aire acondicionado</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Telefono</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Set para planchado</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Baño con acabado de mármol</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Espejo de vanidad</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Secadora de cabello</li>
                                <li class="leading-4 xl:leading-tight"><span class="font-bold text-salmon">•</span>Amenidades de baño</li>
                            </ul>

                        </div>

                        <div class="mt-4 justify-self-end">

                            <a target="_blank" href="{{ route('rengin.direct-booking') }}">
                                <button class="w-36 h-12 font-bold bg-salmon text-white text-sm">Reservar ahora</button>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

    </div>


</section>