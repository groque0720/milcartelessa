@extends('public.layouts.app')

@section('title', $negocio->nombre)

@section('contenido')
	<div class="w-full">
		    <div class="ancho-100">
		        <layout-cabecera-tira-superior v-bind:negocio="{{ $negocio }}" :query="''"></layout-cabecera-tira-superior>
		        <layout-cabecera v-bind:negocio="{{ $negocio }}" :query="''"></layout-cabecera>
		    </div>
		    <div class="container md:w-9/12 p-2 mx-auto flex flex-col justify-between md:flex-row md:space-x-3">

		    	<div class="w-ful md:w-3/5 p-5 border rounded bg-gray-100 shadow-md bg-yellow-50">

		    		@if (session('info'))
		    			<div class="flex items-center justify-center space-x-3 h-full">
		    				{{-- <span>{{ session('info') }}</span> --}}
		    				<div class="flex flex-col space-x-3 text-center">
		    					<span class="text-3xl">Hemos Recibido tu mensaje..</span>
			    				<span class="text-2xl">Gracias por ponerte en contacto con nosotros</span>
			    				<span class="text-2xl">Te responderemos a la brevedad.</span>
		    				</div>

		    			</div>
		    		@else
			    		<div class="text-center"><span class="text-4xl font-bold">Contactanos</span></div>
			    		<div class="text-center my-4"><span class="text-lg ">Ponte en contacto con nosotros por cualquier consulta. Te responderemos a la brevedad.</span></div>
			            <form action="{{ route('contacto', $negocio->url) }}" class="form relative bg-transparent" method="POST">
			            	{{ csrf_field() }}
			            	<div class="flex space-x-5 mt-3">
			            		<div class="flex flex-col w-1/2">
			            			<input type="text" name="nombre" id="" value="{{ old('nombre') }}" placeholder="Nombre" class="border p-2">
			            			{!! $errors->first('nombre', '<small class="text-red-500 pl-2">:message</small>') !!}
			            		</div>
			                    <div class="flex flex-col w-1/2">
			                    	<input type="tel" name="telefono" value="{{ old('telefono') }}" id="" placeholder="Teléfono" class="border p-2">
			                    	{!! $errors->first('telefono', '<small class="text-red-500 pl-2">:message</small>') !!}
			                    </div>


			                </div>
			                <input type="email" name="email" id="" value="{{ old('email') }}" placeholder="Email" class="border p-2 w-full mt-3">
			                {!! $errors->first('email', '<small class="text-red-500 pl-2">:message</small>') !!}
			                <textarea name="mensaje" id="" cols="10" rows="3" placeholder="Mensaje" class="border p-2 mt-3 w-full">{{ old('mensaje') }}</textarea>
			                {!! $errors->first('mensaje', '<small class="text-red-500 pl-2">:message</small>') !!}
			                <input type="submit" value="Enviar" class="w-full mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3">
			            </form>
		            @endif
		    	</div>
		    	<div class="w-full md:w-2/5 p-2 border shadow-md mt-10 md:mt-0 flex flex-col justify-around bg-gray-200 text-white">
		    		<div class="flex justify-center">
		    			<span class="text-4xl font-bold">Información de contacto</span>
		    		</div>
		    		<div class="text-center">
		    			<span class="text-3xl font-bold">{{ $negocio->nombre }}</span>
		    		</div>
		    		<div class="text-center flex items-center justify-center space-x-3">
		    			<i class="fas fa-phone-volume text-right w-3/12 text-blue-500 text-7xl"></i>
		    			<span class="text-xl flex-grow text-left" >{{ $negocio->telefono }}</span>
		    		</div>
		    		<div class="text-center flex items-center justify-center space-x-3">
		    			<i class="fab fa-whatsapp text-right w-3/12 text-blue-500 text-2xl"></i></i>
		    			<span class="text-xl flex-grow text-left">{{ $negocio->celular }}</span>
		    		</div>
		    		<div class="text-center flex items-center justify-center space-x-3">
		    			<i class="fas fa-map-marker-alt text-right w-3/12 text-blue-500 text-3xl"></i>
		    			<span class="text-xl flex-grow text-left">{{ $negocio->direccion }}</span>
		    		</div>
		    		<div class="text-center flex items-center justify-center space-x-3">
		    			<i class="fas fa-envelope text-right w-3/12 text-blue-500 text-2xl"></i>
		    			<span class="text-xl flex-grow text-left">{{ $negocio->email }}</span>
		    		</div>
		    		<div class="flex items-center justify-center">
		    			<layout-redes-sociales v-bind:negocio="{{ $negocio }}"></layout-redes-sociales>
		    		</div>
		    	</div>
		    </div>
	</div>

@endsection