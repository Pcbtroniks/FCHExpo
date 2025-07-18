<aside id="aside" class="overflow-hidden fixed top-0 h-screen bg-black bg-opacity-50 z-30 transition-all duration-300">
    <section id="lateral-menu" class="w-0 bg-white h-screen opacity-100 shadow-inner transition-all duration-300">
        <ul>
            
            <li class="relative border-black border-opacity-30 border-b-2">
                <div class="bg-salmon w-full h-28 inner-shadow">
                    <img class="w-32 mx-auto" src="{{ asset('assets/logow.png') }}" alt="Logo">
                    <br>
                    <br>
                </div>
                <a href="javascript:void(0)" class="absolute top-0 right-0   focus:bg-red-500 text-white float-right w-14 h-14 leading-tight text-[2.5rem] text-center transition-all duration-150 rounded-xl rounded-shadow" id="closeNavBtn">&times;</a>
            </li>

            <li class="relative hover:bg-main-light hover:text-dark text-dark-medium border-black border-opacity-30 border-b cursor-pointer transition">
                <a class="text-lg font-light" href="{{route('home')}}"><p class="p-4">Inicio</p></a>
            </li>

            <li class="relative hover:bg-main-light hover:text-dark text-dark-medium border-black border-opacity-30 border-b cursor-pointer transition">
                <a class="text-lg font-light" href="{{ route('rooms') }}"><p class="p-4">Habitaciones</p></a>
            </li>

            <li class="relative hover:bg-main-light hover:text-dark text-dark-medium border-black border-opacity-30 border-b cursor-pointer transition">
                <a class="text-lg font-light" href="{{ route('desing-and-art') }}"><p class="p-4">Arte y Diseño</p></a>
            </li>

                        <li class="relative hover:bg-main-light hover:text-dark text-dark-medium border-black border-opacity-30 border-b cursor-pointer transition hover:bg-blue hover:text-white" id="liGourmet">
                <button class="text-lg font-light w-full text-left p-4 toggle-submenu" data-target="submenu-gourmet">Restaurantes</button>
                <ul id="submenu-gourmet" class="hidden ml-4 bg-salmon text-white font-bold">
                    <li><a href="/restaurant-ananas" class="block p-4 hover:bg-pink-600 ">Restaurante Ananás</a></li>
                    <li><a href="/restaurant-granada" class="block p-4 hover:bg-pink-600 ">Restaurante Granada</a></li>
                </ul>
            </li>

            <li class="relative hover:bg-main-light hover:text-dark text-dark-medium border-black border-opacity-30 border-b cursor-pointer transition">
                <a class="text-lg font-light" href="{{ route('services') }}"><p class="p-4">Servicios</p></a>
            </li>

            <li class="relative hover:bg-main-light hover:text-dark text-dark-medium border-black border-opacity-30 border-b cursor-pointer transition">
                <a class="text-lg font-light" href="{{ route('visit') }}"><p class="p-4">Visita Guadalajara</p></a>
            </li>

            <li class="relative hover:bg-main-light hover:text-dark text-dark-medium border-black border-opacity-30 border-b cursor-pointer transition">
                <a class="text-lg font-light" href="{{ route('contact') }}"><p class="p-4">Contacto</p></a>
            </li>
        </ul>
    </section>
</aside>
<span class="w-0 hidden"></span>
<span class="w-72 hidden"></span>