@extends('public.layouts.app')

@section('title', $negocio->nombre)

@section('contenido')
	<div class="w-full">
		    <div class="ancho-100">
		        <layout-cabecera-tira-superior v-bind:negocio="{{ $negocio }}" :query="''"></layout-cabecera-tira-superior>
		        <layout-cabecera v-bind:negocio="{{ $negocio }}" :query="''"></layout-cabecera>
		    </div>
	    <div class="flex justify-center items-center p-5">
	    	<h1 class="text-3xl">Lugares Disponibles para Cartelería</h1>
	    </div>
	    <div class="flex justify-center items-center md:w-3/4 mx-auto border">
	    	<iframe src="https://www.google.com/maps/d/embed?mid=1H60Fsq2F_s6lEe4TRiZjN3IrmafFxE3b" width="100%" height="700"></iframe>
	    </div>
	</div>
@endsection