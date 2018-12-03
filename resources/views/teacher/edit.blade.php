@extends('layouts.template')
@section('content')
<div class=" uk-width-1-2@s uk-padding-small uk-background-secondary">
	<form class="uk-grid-small" uk-grid method="POST" action="{{route('profesores.store')}}">
		{{ csrf_field() }}

		<legend class="uk-legend uk-text-center">SIDCA - Registro</legend>

		<div class="uk-width-1-4@s">
			<input value="{{ $teacher->identity }}" name="identity" class="uk-input"  id="input" type="number" placeholder="Cedula">
		</div>

		<div class="uk-width-1-4@s">
			<input value="{{ $teacher->first_name }}" name="first_name" class="uk-input" type="text" placeholder="Nombres">
		</div>

		<div class="uk-width-1-4@s">
			<input value="{{ $teacher->last_name }}" name="last_name" class="uk-input" type="text" placeholder="Apellidos">
		</div>
		@forelse($teacher->phones as $phone)
		<div class="uk-width-1-4@s">
			<input value="{{ $phone->number }}" name="phone{{ $i++ }}" class="uk-input"  id="input" type="number" placeholder="Telefono Movil">
		</div>
		@empty
			<div class="uk-width-1-4@s">
				<input value="" name="phone{{ $h++ }}" class="uk-input"  id="input" type="number" placeholder=@if($h == 1)
				"Telefono Movil"
				@else
				"Telefono Casa"
				@endif>
			</div>
		@endforelse
		<div class="uk-width-1-4@s">
			<input value="{{ $teacher->birthdate }}" class="uk-input" id="input" name="birthdate" type="date" placeholder="Fecha de Nac">
		</div>

		<div class="uk-width-1-2@s">
			<input value="{{ $teacher->address }}" class="uk-input" type="text" name="address" placeholder="Direccion">
		</div>	

		<div class="uk-width-1-2@s">
			<input value="{{ $teacher->email1 }}" class="uk-input" type="email" placeholder="Correo Personal" name="email1">
		</div>

		<div class="uk-width-1-2@s">
			<input value="{{ $teacher->email2 }}" class="uk-input" name="email2" type="email" placeholder="Correo Institucional @unerg.edu.ve">
		</div>

		<div class="uk-width-1-4@s">
			<select class="uk-select" name="countrie_id" id="form-stacked-select">
				<option value="{{ $teacher->countrie_id }}">Pais</option>
				@forelse($paises as $pais)
				<option value="{{$pais->id}}">{{$pais->country}}</option>
				@empty
				Esta Vacio!
				@endforelse
			</select>
		</div>

		<div class="uk-width-1-4@s">
			<select name="state_id" class="uk-select" id="form-stacked-select">
				<option  value="{{ $teacher->state_id }}">Estados</option>
				@forelse($estados as $estado)
				<option value="{{$estado->id}}">{{$estado->states}}</option>
				@empty
				Esta Vacio!
				@endforelse
			</select>
		</div>
		<div class="uk-width-1-4@s">
			<select class="uk-select" name="headquarters_id" id="form-stacked-select">
				<option value="{{ $teacher->headquarters_id }}" >Sede</option>
				@forelse($sedes as $sede)
				<option value="{{$sede->id}}">{{$sede->headquarter}}</option>
				@empty
				Esta Vacio!
				@endforelse
			</select>
		</div>
		<div class="uk-width-1-2@s">
			<select class="uk-select" name="classification_id" id="form-stacked-select">
				<option  value="{{ $teacher->classification_id }}">Clasificacion</option>
				@forelse($clasificaciones as $clasificacion)
				<option value="{{$clasificacion->id}}">{{$clasificacion->classification}}</option>
				@empty
				Esta Vacio!
				@endforelse
			</select>
		</div>

		<div class="uk-width-1-4@s">
			<select class="uk-select" name="status" id="form-stacked-select">
				<option value="{{ $teacher->status }}">Estatus</option>
				<option value="Activo">Activo</option>
				<option value="Inactivo">Inactivo</option>
			</select>
		</div>

		<div class="uk-width-1-1@s">
			<div class="uk-margin">
				<textarea class="uk-textarea" name="observation" value="{{ $teacher->observation }}" rows="2" placeholder="Observaciones"></textarea>
			</div>
		</div>

		<div class="uk-margin uk-width-1-1@s">
			<button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" name="boton">Guardar</button>
		</div>
	</form>
</div>
@endsection