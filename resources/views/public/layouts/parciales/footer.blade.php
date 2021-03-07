{{--  CONTACTOS  --}}
{{--     <div class="grid grid-cols-1 md:grid-cols-3 mt-10">

        <div class="flex items-center justify-between py-7 p-3 bg-gray-500 text-white border">
            <div class="w-2/5 flex items-center justify-center">
                <i class="fas fa-map-marker-alt text-7xl md:text-5xl"></i>
            </div>
            <div class="w-3/5">
                <div class="font-bold">ESTAMOS EN:</div>
                <div>Buenos Aires | Córdoba</div>
                <div>Venado Tuerto | Rosario</div>
                <div>Salta | Tucumán</div>
            </div>
        </div>

        <div class="flex items-center justify-between py-7 p-3 bg-gray-500 text-white border">
            <div class="w-2/5 flex items-center justify-center">
                <div><i class="fab fa-whatsapp text-7xl md:text-5xl"></i></div>
            </div>
            <div class="w-3/5">
                <div class="font-bold">HORARIOS DE ATENCIÓN:</div>
                <div>Lunes a Domingo 24 hs.</div>
                <div>+54 9 3462 551685</div>
                <div>Patricia Valdez</div>
            </div>
        </div>

        <div class="flex items-center justify-between py-7 p-3 bg-gray-500 text-white border">
            <div class="w-2/5 flex items-center justify-center">
                <div><i class="fas fa-phone-volume text-7xl md:text-5xl"></i></div>
            </div>
            <div class="w-3/5">
                <div class="font-bold">TELÉFONOS DE CONTACTO:</div>
                <div>03462 - 429639</div>
                <div>03462 - 15551685</div>
                <div>011 - 1569732042</div>
            </div>
        </div>
    </div> --}}

    <div class="mt-10 mb-10">
        <div class="flex items-center justify-center">
            <img width="150px" src="{{ Storage::url($negocio->logo)  }}" alt="">
        </div>
        <div class="md:flex items-center justify-center mt-5 text-center">
            <div class="mr-2">www.venadovial.com</div><span class="hidden md:block mr-2">|</span>
            <div class="mr-2">{{ $negocio->email }}</div><span class="hidden md:block mr-2">|</span>
            <div class="mr-2">{{ $negocio->telefono }}</div>
        </div>
{{--         <div class="flex items-center justify-center mt-5 p-2 bg-gray-300">
            <span class="text-white text-xs">Desarrollado por RGS</span>
        </div> --}}
    </div>