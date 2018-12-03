@extends('layouts.template')
@section('content')
<!-- FORM -->
<!-- ALERTA DE ERROR -->
<div class="uk-container uk-position-top uk-align-center">
	
	@if($errors->all())
	<div class="uk-align-center uk-text-center uk-alert-danger" uk-alert="animation:true">
		@foreach($errors->all() as $error)
		<button class="uk-alert-close uk-close-large" id="close" type="button" uk-close></button>
		<p><strong>{{ $error }}</strong></p>
		@endforeach
	</div>
	@endif

	<!-- ALERTA DE SUCCESS -->
	@if(session('info'))
	<div class="uk-align-center uk-text-center uk-alert-success" uk-alert>
		<button class="uk-alert-close" id="close" type="button" uk-close></button>
		<p><strong>{{ session('info') }}</strong></p>
	</div>
	@endif
</div>
<div class=" uk-width-1-2@s uk-padding-small uk-background-secondary">
	<form class="uk-grid-small" uk-grid method="POST" action="{{route('profesores.store')}}">
		{{ csrf_field() }}

		<legend class="uk-legend uk-text-center">SIDCA - Registro</legend>
		<div class="uk-width-1-4@s">
			<input value="{{ old('identity') }}" name="identity" class="uk-input"  id="input" type="number" placeholder="Cedula">
		</div>
		<div class="uk-width-1-4@s">
			<input value="{{ old('first_name') }}" name="first_name" class="uk-input" type="text" placeholder="Nombres">
		</div>
		<div class="uk-width-1-4@s">
			<input value="{{ old('last_name') }}" name="last_name" class="uk-input" type="text" placeholder="Apellidos">
		</div>

		<div class="uk-width-1-4@s">
			<input value="{{ old('phone1') }}" name="phone1" class="uk-input"  id="input" type="number" placeholder="Telefono Movil">
		</div>
		<div class="uk-width-1-4@s">
			<input value="{{ old('phone2') }}" class="uk-input" name="phone2"  id="input" stype="number" placeholder="Telefono Casa">
		</div>
		<div class="uk-width-1-4@s">
			<input value="{{ old('birthdate') }}" class="uk-input" id="input" name="birthdate" type="date" placeholder="Fecha de Nac">
		</div>
		<div class="uk-width-1-2@s">
			<input value="{{ old('address') }}" class="uk-input" type="text" name="address" placeholder="Direccion">
		</div>						
		<div class="uk-width-1-2@s">
			<input value="{{ old('email1') }}" class="uk-input" type="email" placeholder="Correo Personal" name="email1">
		</div>
		<div class="uk-width-1-2@s">
			<input value="{{ old('email2') }}" class="uk-input" name="email2" type="email" placeholder="Correo Institucional @unerg.edu.ve">
		</div>

		<div class="uk-width-1-4@s">
			<select class="uk-select" name="countrie_id" id="form-stacked-select">

				<option value="{{ old('countrie_id') }}">Pais</option>
				@forelse($paises as $pais)
				<option value="{{$pais->id}}">{{$pais->country}}</option>
				@empty
				Esta Vacio!
				@endforelse
			</select>
		</div><div class="uk-width-1-4@s">
			<select name="state_id" class="uk-select" id="form-stacked-select">

				<option  value="{{ old('state_id') }}">Estados</option>
				@forelse($estados as $estado)
				<option value="{{$estado->id}}">{{$estado->states}}</option>
				@empty
				Esta Vacio!
				@endforelse
			</select>
		</div>
		<!-- <div class="uk-width-1-4@s">
			<select class="uk-select" name="municipality_id" id="form-stacked-select" placehoder="Sidca">

				<option value="{{ old('municipality_id') }}">Municipio</option>
				<option value="1">simon bolivar</option>
			</select>
		</div>
		<div class="uk-width-1-4@s">
			<select class="uk-select" name="parish_id" id="form-stacked-select">

				<option value="{{ old('parish_id') }}">Parroquia</option>
				<option value="1">Camburito</option>
			</select>
		</div> -->
		<div class="uk-width-1-4@s">
			<select class="uk-select" name="headquarters_id" id="form-stacked-select">
				<option value="{{ old('headquarters_id') }}" >Sede</option>
				@forelse($sedes as $sede)
				<option value="{{$sede->id}}">{{$sede->headquarter}}</option>
				@empty
				Esta Vacio!
				@endforelse
			</select>
		</div>
		<div class="uk-width-1-2@s">
			<select class="uk-select" name="classification_id" id="form-stacked-select">
				<option  value="{{ old('classification_id') }}">Clasificacion</option>
				@forelse($clasificaciones as $clasificacion)
				<option value="{{$clasificacion->id}}">{{$clasificacion->classification}}</option>
				@empty
				Esta Vacio!
				@endforelse
			</select>
		</div>

		<div class="uk-width-1-4@s">
			<select class="uk-select" name="status" id="form-stacked-select">
				<option value="">Estatus</option>
				<option value="1">Activo</option>
				<option value="2">Inactivo</option>
			</select>
		</div>
		<div class="uk-width-1-1@s">
			<div class="uk-margin">
				<textarea class="uk-textarea" name="observation" value="{{ old('observation') }}" rows="2" placeholder="Observaciones"></textarea>
			</div>
		</div>
		<div class="uk-margin uk-width-1-1@s">
			<button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" name="boton">Guardar</button>
		</div>
	</form>
</div>
<!-- /FORM -->
@endsection