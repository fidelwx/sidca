@extends('layouts.template')
@section('content')
<!-- FORM -->
	<div class=" uk-width-1-2@s uk-padding-small uk-background-secondary">
		<form class="uk-grid-small" uk-grid method="POST" action="{{route('profesores.store')}}">
			{{ csrf_field() }}
			<legend class="uk-legend uk-text-center">SIDCA - Registro</legend>
			<div class="uk-width-1-4@s">
			    <input name="identity" class="uk-input"  id="input" type="number" placeholder="Cedula">
			</div>
			<div class="uk-width-1-4@s">
			    <input name="first_name" class="uk-input" type="text" placeholder="Nombres">
			</div>
			<div class="uk-width-1-4@s">
			    <input name="last_name" class="uk-input" type="text" placeholder="Apellidos">
			</div>
			
			<div class="uk-width-1-4@s">
			    <input name="phone1" class="uk-input"  id="input" type="number" placeholder="Telefono Movil">
			</div>
			<div class="uk-width-1-4@s">
			    <input class="uk-input" name="phone2"  id="input" stype="number" placeholder="Telefono Casa">
			</div>
			<div class="uk-width-1-4@s">
			    <input class="uk-input" id="input" name="birthdate" type="date" placeholder="Fecha de Nac">
			</div>
			<div class="uk-width-1-2@s">
			    <input class="uk-input" type="text" name="address" placeholder="Direccion">
			</div>						
			<div class="uk-width-1-2@s">
			    <input class="uk-input" type="email" placeholder="Correo Personal" name="email1">
			</div>
			<div class="uk-width-1-2@s">
			    <input class="uk-input" name="email2" type="email" placeholder="Correo Institucional @unerg.edu.ve">
			</div>
			
			<div class="uk-width-1-4@s">
			    <select class="uk-select" name="country" id="form-stacked-select">
	                
	                <option>Pais</option>
	                @forelse($paises as $pais)
	               <option value="{{$pais->id}}">{{$pais->country}}</option>
		            @empty
		            	Esta Vacio!
		            @endforelse
	            </select>
			</div><div class="uk-width-1-4@s">
			    <select name="states" class="uk-select" id="form-stacked-select">
			    	
	                <option>Estados</option>
	                @forelse($estados as $estado)
	               <option value="{{$estado->id}}">{{$estado->states}}</option>
		            @empty
		            	Esta Vacio!
		            @endforelse
	            </select>
			</div><div class="uk-width-1-4@s">
			    <select class="uk-select" name="municipalities" id="form-stacked-select" placehoder="Sidca">
	                
	                <option>Municipio</option>
	                <option>simon bolivar</option>
	            </select>
			</div><div class="uk-width-1-4@s">
			    <select class="uk-select" name="parishes" id="form-stacked-select">
	                
	                <option>Parroquia</option>
	                <option>Camburito</option>
	            </select>
			</div>
			<div class="uk-width-1-4@s">
			   <select class="uk-select" name="headquarter" id="form-stacked-select">
	               <option>Sede</option>
	            @forelse($sedes as $sede)
	               <option value="{{$sede->id}}">{{$sede->headquarter}}</option>
	            @empty
	            	Esta Vacio!
	            @endforelse
	            </select>
			</div>
			<div class="uk-width-1-2@s">
			   <select class="uk-select" name="classification" id="form-stacked-select">
	                <option>Clasificacion</option>
	                @forelse($clasificaciones as $clasificacion)
	               <option value="{{$clasificacion->id}}">{{$clasificacion->classification}}</option>
		            @empty
		            	Esta Vacio!
		            @endforelse
	            </select>
			</div>
			
			<div class="uk-width-1-4@s">
			    <select class="uk-select" name="status" id="form-stacked-select">
	                <option>Estatus</option>
	                
	            </select>
			</div>
			<div class="uk-width-1-1@s">
                <div class="uk-margin">
                    <textarea class="uk-textarea" name="observation" rows="2" placeholder="Observaciones"></textarea>
                </div>
            </div>
            <div class="uk-margin uk-width-1-1@s">
                <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" name="boton">Guardar</button>
            </div>
		</form>
	</div>
	<!-- /FORM -->
@endsection