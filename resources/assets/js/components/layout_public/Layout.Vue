<template>
    <div class="ancho-100">
        <layout-cabecera-tira-superior v-bind:negocio="negocio" :query="query"></layout-cabecera-tira-superior>
        <layout-cabecera v-bind:negocio="negocio" :query="query"></layout-cabecera>
        <layout-cabecera-marquesina v-bind:negocio="negocio" :query="query"></layout-cabecera-marquesina>
<!--         <div v-if="true">
            <div class="ancho-95 flex flex-item-center flex-content-center margen-auto p-5"  style="padding-top: 15px;">
                <layout-busqueda-autocompletar :negocio="negocio" :query="query"></layout-busqueda-autocompletar>
            </div>
            <div class="ancho-95 flex flex-item-center flex-content-center margen-auto p-5 m-b-10" v-if="query.length">
                <span class="txt-italic">Resultado de Productos "<span class="txt-negrita">{{ query }}</span>"</span>
            </div>
        </div> -->
        <layout-grid-productos v-bind:negocio="negocio" v-bind:query="query" :mostrarBusqueda="true"></layout-grid-productos>
<!--         <layout-grid-columnas v-if="view_activa == 1" :negocio="negocio"  :mostrarBusqueda="true" :query="query"></layout-grid-columnas> -->
        <!-- <layout-grid-columnas-ordenado v-if="view_activa == 2" v-bind:negocio="negocio"></layout-grid-columnas-ordenado> -->
        <!-- <layout-grid-albumes v-if="view_activa == 2" v-bind:negocio="negocio"></layout-grid-albumes> -->
    </div>
</template>

<script>
    export default {
        props:['negocio','query'],
        data(){
            return {
                view_activa: 1,
            }
        },
        mounted() {
            this.viewSelect(this.view_activa);
        },
        methods: {
            viewSelect(view){
                $('.view_icon').removeClass('view_activa');
                $('.view_icon_'+view).addClass('view_activa');
                this.view_activa = view;
            }
        }
    }
</script>