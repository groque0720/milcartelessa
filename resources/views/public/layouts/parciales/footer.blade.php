<div class="mt-10 flex items-center justify-center">
    <div class="w-3/4">
        <div class="w-4/12 border ring-1 border-green-600 mx-auto mb-10"></div>
        <div class="flex justify-center items-center relative">
            <span class="text-2xl text-center">
            MAS DE 20 AÑOS EN EL RUBRO NOS AVALAN</span>
        </div>
        <div class="md:flex items-center justify-between mt-5">
            <div class="w-full md:w-2/5 flex flex-col items-center justify-center mb-5 md:mb-0">
                <div class="text-6xl font-bold text-center text-green-600">+1500</div>
                <div class="text-center text-green-600">CLIENTES</div>
            </div>
            <div class="w-full md:w-2/5 flex flex-col items-center justify-center">
                <div class="text-6xl font-bold text-center text-green-600">+4000</div>
                <div class="text-center text-green-600">PRODUCTOS ENTREGADOS</div>
            </div>
        </div>
        {{-- <div class="w-4/12 border ring-1 border-green-600 mx-auto mt-5"></div> --}}
    </div>
</div>

{{--  CONTACTOS  --}}
    <div class="grid grid-cols-1 md:grid-cols-3 mt-10">

        <div class="flex items-center justify-between py-7 p-3 bg-gray-500 text-white border">
            <div class="w-2/5 flex items-center justify-center">
                <i class="fas fa-map-marker-alt text-7xl md:text-5xl text-white"></i>
            </div>
            <div class="w-3/5 text-white">
                <div class="font-bold text-white">ESTAMOS EN:</div>
                <div class="text-white">Buenos Aires | Córdoba</div>
                <div class="text-white">Venado Tuerto | Rosario</div>
                <div class="text-white">Salta | Tucumán</div>
            </div>
        </div>

        <div class="flex items-center justify-between py-7 p-3 bg-gray-500 text-white border">
            <div class="w-2/5 flex items-center justify-center">
                <div><i class="fab fa-whatsapp text-7xl md:text-5xl text-white"></i></div>
            </div>
            <div class="w-3/5">
                <div class="font-bold text-white">HORARIOS DE ATENCIÓN:</div>
                <div class="text-white">Lunes a Domingo 24 hs.</div>
                <div class="text-white">+54 9 3462 551685</div>
                <div class="text-white">Patricia Valdez</div>
            </div>
        </div>

        <div class="flex items-center justify-between py-7 p-3 bg-gray-500 text-white border">
            <div class="w-2/5 flex items-center justify-center">
                <div><i class="fas fa-phone-volume text-7xl md:text-5xl text-white"></i></div>
            </div>
            <div class="w-3/5">
                <div class="font-bold text-white">TELÉFONOS DE CONTACTO:</div>
                <div class="text-white">03462 - 429639</div>
                <div class="text-white">03462 - 15551685</div>
                <div class="text-white">011 - 1569732042</div>
            </div>
        </div>
    </div>

    <div class="mt-10 mb-10">
        <div class="flex items-center justify-center">
            <img width="150px" src="{{ Storage::url($negocio->logo)  }}" alt="">
        </div>
        <div class="md:flex items-center justify-center mt-5 text-center">
            <div class="mr-2">www.milcarteles.com.ar</div><span class="hidden md:block mr-2">|</span>
            <div class="mr-2">{{ $negocio->email }}</div><span class="hidden md:block mr-2">|</span>
            <div class="mr-2">{{ $negocio->telefono }}</div>
        </div>
    </div>
