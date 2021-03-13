<template>
    <div class="animado w-full relative">
        <!-- cabecera -->
        <div class="w-full relative bg-gray-100 overflow-hidden container mx-auto " >
            <div class="cabecera-menu p-2  md:w-4/5 m-auto ">
                <div class="cabecera-menu-contenido w-100 flex justify-between items-center">
                    <div>
                       <a :href="'/'"><img class="logo-empresa w-36 max-h-20 object-cover transition-all " :src="'/storage/'+negocio.logo" :alt="negocio.nombre" alt=""></a>
                    </div>
                    <div class="flex items-center">
                        <div>
                            <layout-redes-sociales v-bind:negocio="negocio"></layout-redes-sociales>
                        </div>
                        <a :href="'/'+negocio.url+'/contacto'" class="mx-1">
                            <div class="p-2 rounded-full bg-blue-300 flex justify-center items-center w-10 h-10">
                               <i class="fas fa-envelope text-white"></i>
                            </div>
                        </a>
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
            let cabecera_menu = document.querySelector('.cabecera-menu');
            let cabecera_tira_superior = document.querySelector('.cabecera-tira-superior');
            let altura = cabecera_menu.offsetTop + cabecera_tira_superior.offsetTop;

            function scrollCabeceraMenu() {
                let scrollTop = document.documentElement.scrollTop;
                if (window.pageYOffset > altura) {
                    cabecera_menu.classList.add('fixed');
                }else{
                    cabecera_menu.classList.remove('fixed');
                }
            }
            window.addEventListener('scroll', scrollCabeceraMenu);
        },
        methods: {
            irHomeNegocio(){
                window.location = '/'+this.negocio.url;
            }
        }
    }
</script>