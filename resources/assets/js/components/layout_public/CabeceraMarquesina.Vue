<template>
    <div class="shadow-sm ">
        <!-- marquesina -->
            <!-- mobil -->
        <div class="flex-1 md:hidden px-5">
            <div class="h-0.5 w-full"></div>
            <div class="flex items-center justify-center mt-5">
                <span class="text-3xl text-center"><span class="text-green-600 uppercase text-3xl">{{ negocio.nombre }}</span><br> LLEVA SU EMPRESA A LO MÁS ALTO</span>
            </div>
            <div class="mt-5 text-center">
                <p>{{ negocio.descripcion }}</p>
            </div>
            <div class="mt-5 text-center">
                <p>Somos la empresa que estabas buscando!</p>
            </div>
            <div class="flex flex-col md:flex-row items-center justify-center z-10 mt-5">
                <div class="m-2 mb-5 md:mb-0"><a :href="'/'+negocio.url+'/contacto'" class="bg-green-600 p-3  px-5 border  flex items-center"><i class="fas fa-envelope text-white mr-2"></i> <span class="text-white">CONTACTANOS</span></a></div>
                <div class="m-2 mb-5 md:mb-0"><a :href="'/'+negocio.url+'/lugares_disponibles'" class="bg-green-600 p-3  px-5 border  flex items-center"><i class="fas fa-map-marker-alt text-white mr-2"></i> <span class="text-white">LUGARES DISPONIBLES</span></a></div>
            </div>
            <div class="overflow-hidden mt-5" >
                <img class="w-full object-cover" style="height: 250px;"
                    :src="'/storage/'+negocio.url+'/portada.jpg'" :alt="negocio.nombre" alt="">
                 <!-- src="https://milcartelessa.com/wp-content/uploads/2020/07/Portada-Uno-Venado-Vial-scaled-1900x611.jpg" alt=""> -->
            </div>
        </div>
            <!-- pantalla -->
        <div class="flex-1 hidden md:block">
            <div class="relative overflow-hidden">
                <div class="parallax" style="height: 400px;">
                        <img class="w-full object-cover h-screen bg-cover transform  -translate-y-24"
                            :src="'/storage/'+negocio.url+'/portada.jpg'" alt="">
                </div>
                <div class="absolute top-0 left-0  w-3/5 lg:w-2/5 h-full p-10 py-10 bg-white bg-opacity-75">
                        <svg class="hidden right-0 lg:block absolute inset-y-0 h-full w-48 transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                            <polygon class="text-white text-opacity-75" points="50,0 100,0 50,100 50,100" />
                        </svg>
                        <div class="w-full h-full flex flex-col items-center justify-between">
                            <div class="flex flex-col items-center justify-center space-y-3">
                                <span class="text-green-600 uppercase text-3xl">{{ negocio.nombre }}</span>
                                <span class="text-3xl text-center">LLEVA SU EMPRESA A LO MÁS ALTO</span>
                            </div>
                            <div class="mt-5 text-center">
                                <p class="text-xl">{{ negocio.descripcion }}</p>
                            </div>
                            <div>
                                <p class="text-xl">Somos la empresa que estabas buscando!</p>
                            </div>
                            <div class="flex flex-col md:flex-row items-center justify-center z-10">
                                <div class="m-2 mb-5 md:mb-0"><a :href="'/'+negocio.url+'/contacto'" class="bg-green-600 p-3  px-5 border  flex items-center"><i class="fas fa-envelope text-white mr-2"></i> <span class="text-white">CONTACTANOS</span></a></div>
                <div class="m-2 mb-5 md:mb-0"><a :href="'/'+negocio.url+'/lugares_disponibles'" class="bg-green-600 p-3  px-5 border  flex items-center"><i class="fas fa-map-marker-alt text-white mr-2"></i> <span class="text-white">LUGARES DISPONIBLES</span></a></div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div>

<!--     <div class="ancho-100">
        <div class="ancho-100 flex" style="background: rgba(255,255,255,0.9); position: fixed; z-index: 1; top:0; left: 0; box-shadow: 0px 1px 3px 1px #7BABFB;">
            <div class="ancho-100 flex flex-item-center flex-space-between" style="height: 55px; padding: 10px;">
                <div class="flex flex-item-center cursor" @click.prevent="irHomeNegocio()">
                    <img style="max-width: 60px; max-height: 40px; margin-left: 15px;" :src="'/storage/'+negocio.logo" :alt="negocio.nombre">
                    <span class="m-l-10" style="font-size: 1.2em;">{{ negocio.nombre }}</span>
                </div>
                <div class="flex flex-item-center flex-content-end">
                    <div class="flex flex-item-center">
                        <layout-redes-sociales v-bind:negocio="negocio"></layout-redes-sociales>
                    </div>
                    <div class="flex flex-item-center flex-content-center m-r-10 m-l-10" style="border-left: 1px solid #ccc; width: 50px;">
                        <a href="/acceder" title="login">
                              <i class="flex margen-auto fas fa-user txt-celeste"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</template>

<script>
    export default {
        props:['negocio'],
        data(){
            return {
            }
        },
        mounted() {
            let parallax = document.querySelector('.parallax');
            function scrollParallax() {
                let scrollTop = document.documentElement.scrollTop;
                parallax.style.transform = 'translateY('+ scrollTop * -0.4 +'px)';
            }
            window.addEventListener('scroll', scrollParallax);
        },
        methods: {
            irHomeNegocio(){
                window.location = '/'+this.negocio.url;
            }
        }
    }
</script>