<template>
    <div class="">
        <div v-if="mostrarBusqueda">
            <div class="ancho-95 flex flex-item-center flex-content-center margen-auto bg-yellow-50"  style="padding-top: 20px; padding-bottom: 15px;">
                <layout-busqueda-autocompletar :negocio="negocio" :query="query"></layout-busqueda-autocompletar>
            </div>
            <div class="ancho-95 flex flex-item-center flex-content-center margen-auto p-5 m-b-10" v-if="query.length">
                <span class="txt-italic">Resultado de Productos "<span class="txt-negrita">{{ query }}</span>"</span>
            </div>
        </div>
        <div class="ancho-95 flex margen-auto" v-if="query">
            <layout-grid-columnas-ordenado  v-bind:negocio="negocio" :query="query"></layout-grid-columnas-ordenado>
        </div>
        <div class="ancho-95 flex margen-auto m-b-10 m-t-10" v-if="query">
            <div class="ancho-100 flex flex-item-center flex-content-center ">
                <span class="fz-18 txt-negrita txt-mayuscula">Todos los albumes</span>
            </div>
        </div>
        <div class="ancho-95 flex margen-auto" v-if="query">
            <layout-grid-columnas-ordenado  v-bind:negocio="negocio" :query="query" v-bind:secundario="true"></layout-grid-columnas-ordenado>
        </div>
        <div class="ancho-95 flex margen-auto m-b-10 m-t-10" v-if="query">
            <div class="ancho-100 flex flex-item-center flex-content-center ">
                <span class="fz-18 txt-negrita txt-mayuscula">Otros</span>
            </div>
        </div>
        <div class="w-full md:w-4/5 my-10 mx-auto px-5">
            <div class="flex items-center justify-center">
                <h1 class="text-3xl font-bold text-center">NUESTROS PRODUCTOS Y SERVICIOS</h1>
            </div>
            <div class="flex items-center justify-center">
               <p class="text-gray-500 text-xl">No somos solo una empresa publicitaria</p>
            </div>
            <div  class="grid grid-cols-2 md:grid-cols-3 gap-5 mt-10 flex">
                <template>
                    <div v-for="(album, f) in albumes_infinite" class="w-full bg-gray-100 p-2 border cursor-auto relative rounded shadow-lg"  @click.prevent="irProducto(album.codigo, '')" style="cursor: pointer;">
                        <div class="flex flex-col">
                            <div class="overflow-hidden" >
                                <img class="object-cover w-full h-40 sm:h-52 md:h-64 lg:h-96" :src="'/storage/'+album.imagen_ppal" alt="">
                            </div>
                            <div class="flex justify-center items-center mt-3">
                                <p class="uppercase text-center font-bold">{{ album.producto}}</p>
                            </div>
                            <div class="h-12">

                            </div>
                            <div class="absolute bottom-0 w-full">
                                <div class="w-full flex justify-center items-center p-2">
                                   <a href="" class="p-2 px-4 bg-green-600 text-white rounded-sm text-xl">Ver Más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <infinite-loading @infinite="InfiniteHandler">
                        <div slot="no-more"></div>
                        <div slot="spinner"></div>
                        <div slot="no-results"></div>
                    </infinite-loading>
                </template>

            </div>
        </div>
    </div>

<!--     <div class="ancho-100" style="margin-bottom: 15px;">
        <div class="ancho-100 flex p-10 ">
            <div v-for="(columnas, c) in nro_columnas" class="ancho-100 ">
                <template>
                    <div v-for="(album, f) in albumes_infinite"  v-if="boleanMostrar(c, f)" class="tarjeta borde-radio-5 m-10 sombra-box cursor" style="position: relative;">

                        <div class="ancho-100 flex flex-item-center flex-space-between" style="height: 200px;">
                            <div class="ancho-50 imagen flex" style="height: 200px; overflow: hidden;">
                                <img style="object-fit: cover;" class="ancho-100" :src="'/storage/'+album.imagen_ppal" alt="">
                            </div>
                            <div class="ancho-50 flex flex-direction-column flex-space-between p-10" style="height: 100%;">
                                <div class="ancho-100 flex flex-item-center" style="min-height: 15px;" >
                                    <span class="txt-negrita">{{ album.producto}}</span>
                                </div>
                                <div class="ancho-100 flex p-r-10 m-b-5" style="height: 85px; overflow: hidden;">
                                    <center><span>{{ $root.truncarTexto(album.descripcion, 110) }}</span></center>
                                </div>
                                <div class="flex flex-no-wrap" id="style-1" style="overflow: hidden;">
                                    <div v-if="i<=2" v-for="(imagen, i) in album.imagenes" class="flex m-r-10" style="flex: 0 0 auto; width: 55px; height: 55px; overflow: hidden; border-radius: 2px; padding-bottom: 5px;">
                                        <img style="object-fit: cover; width: 100%;"  :src="'/storage/'+imagen.imagen" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <infinite-loading @infinite="InfiniteHandler">
                        <div slot="no-more"></div>
                        <div slot="spinner"></div>
                        <div slot="no-results"></div>
                    </infinite-loading>
                </template>
            </div>
        </div>
    </div> -->
</template>

<script>
    export default {
        props:['negocio','mostrarBusqueda','query'],
        data(){
            return {
                nro_columnas: 0,
                ancho: 0,
                page: 0,
                albumes_infinite:[],
            }
        },
        mounted() {
            this.ancho = window.innerWidth;
            window.addEventListener('resize', this.handleResize);
            this.handleResize();
        },
        methods: {
            handleResize() {

                var ancho_usuario = window.innerWidth;

                // if (ancho_usuario <= 480) {
                //     this.nro_columnas = 2;
                // }

                // if (ancho_usuario > 480 && ancho_usuario <= 767) {
                if (ancho_usuario <= 767) {
                    this.nro_columnas = 1;
                }

                if (ancho_usuario > 767 && ancho_usuario <= 979) {
                    this.nro_columnas = 2;
                }

                if (ancho_usuario > 979) {
                    this.nro_columnas = 3;
                }

                this.ancho = window.innerWidth;

            },
            InfiniteHandler($state){
                this.page++;
                let url = '/'+this.negocio.url+'/productos_por_posicion?page=' + this.page;
                // let url = '/'+this.negocio.url+'/productos/1/buscar?page=' + this.page;
                axios.get(url)
                .then( response => {
                    let imagenes = response.data.data;
                    if (imagenes.length) {
                        this.albumes_infinite = this.albumes_infinite.concat(imagenes);
                        // console.log(this.albumes_infinite);
                        // this.productos = this.productos_infinite;
                        $state.loaded();
                    }else{
                        $state.complete();
                    }
                });
            },
            boleanMostrar(c, f){
                var columna = c+1;
                var nro_imagen = f+1;

                var fila = Math.ceil( nro_imagen / this.nro_columnas)-1;
                var valor = nro_imagen - (fila * this.nro_columnas);

                if (columna == valor) {
                    return true;
                }else{
                    return false;
                }
            },
            irProducto(producto_codigo, id){
                //console.log(id);
                window.location = '/'+this.negocio.url+'/producto/'+producto_codigo+'/'+id;
            }
        }
    }
</script>
<style scoped>
    img {
       cursor: zoom-in;
    }
    .tarjeta  {
        transition: all .2s;
        filter: brightness(100%);
    }
    .tarjeta:hover {
        transform: scale(1.01);
        filter: brightness(90%);
    }
    .tarjeta:hover .imagen-titulo {
        display: block !important;
    }
    .tarjeta:hover .imagen-acciones {
        display: block !important;
    }
    .imagen-titulo {
        position: absolute;
        top: 0;
        left: 0;
/*        height: 40px;
        background: red;
        background: linear-gradient(to top, rgba(255,255,255,0), rgba(255,255,255,1));*/
        padding: 5px;
    }
    .imagen-acciones {
        position: absolute;
        bottom: 0;
        left: 0;
    }
    .scrollbar {
        height: 100%;
        padding: 0px !important;
    }
</style>