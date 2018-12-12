@extends('layouts.template')
@section('content')
@include('layouts.alert')
<div class=" uk-width-1-2@s uk-padding-small uk-background-secondary">
	<form class="uk-grid-small" uk-grid method="POST" action="{{route('profesores.update',$teacher->id)}}">
		{{ method_field('PATCH') }}
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
		<!-- Phones -->
		@if($count_phones == 2)
		@foreach($teacher->phones as $phone)
		<div class="uk-width-1-4@s">
			<input value="{{ $phone->number }}" name="phone{{ $i++ }}" class="uk-input"  id="input" type="number" placeholder="Telefono Movil">
		</div>
		@endforeach
		@else
		<div class="uk-width-1-4@s">
			<input value="{{ $teacher->phones->number }}" name="phone1" class="uk-input"  id="input" type="number" placeholder="Telefono Movil">
		</div>
		
		<div class="uk-width-1-4@s">
			<input value="" name="phone2" class="uk-input"  id="input" type="number" placeholder="Telefono Casa">
		</div>
		@endif
		<!-- /Phones -->

		<div class="uk-width-1-4@s">
			<input value="{{ $teacher->birthdate }}" class="uk-input" id="input" name="birthdate" type="date" placeholder="Fecha de Nac">
		</div>

		<div class="uk-width-1-2@s">
			<input value="{{ $teacher->address }}" class="uk-input" type="text" name="address" placeholder="Direccion">
		</div>	
		
		<!-- Emails -->
		@if($count_emails == 2)
		@foreach($teacher->emails as $correo)
		<div class="uk-width-1-2@s">
			<input value="{{ $correo->email }}" name="email{{ $i++ }}" class="uk-input"  id="input" type="email" placeholder="Correo Personal">
		</div>
		@endforeach
		@else
		<div class="uk-width-1-2@s">
			<input value="{{ $teacher->find($teacher->id)->emails->first()->email }}" name="email1" class="uk-input"  id="input" type="email" placeholder="Correo Personal">
		</div>
		<div class="uk-width-1-2@s">
			<input value="" name="email2" class="uk-input"  id="input" type="email" placeholder="Correo Institucional">
		</div>
		@endif
		<!-- /Email -->

		<div class="uk-width-1-4@s">
			<select class="uk-select" name="countrie_id" id="form-stacked-select">
				@foreach($paises as $pais)
					@if($teacher->countrie_id == $pais->id)
						<option selected value="{{ $pais->id }}">{{ $pais->country }}</option>
					@endif
						<option value="{{ $pais->id }}">{{ $pais->country }}</option>
				@endforeach
			</select>
		</div>

		<div class="uk-width-1-4@s">
			<select name="state_id" class="uk-select" id="form-stacked-select">
				@foreach($estados as $estado)
					@if($teacher->state_id == $estado->id)
						<option selected value="{{ $estado->id }}">{{ $estado->states }}</option>
					@endif
						<option value="{{ $estado->id }}">{{ $estado->state }}</option>
				@endforeach
			</select>
		</div>
		<div class="uk-width-1-2@s">
			<select class="uk-select" name="headquarters_id" id="form-stacked-select">
				@foreach($sedes as $sede)
					@if($teacher->sede_id == $sede->id)
						<option selected value="{{ $sede->id }}">{{ $sede->headquarter }}</option>
					@endif
					<option value="{{ $sede->id }}">{{ $sede->headquarter }}</option>
				@endforeach
			</select>
		</div>
		<div class="uk-width-1-2@s">
			<select class="uk-select" name="classification_id" id="form-stacked-select">
				@foreach($clasificaciones as $clasificacion)
					@if($teacher->classification_id == $clasificacion->id)
						<option selected value="{{ $clasificacion->id }}">{{ $clasificacion->classification }}</option>
					@endif
					<option value="{{ $clasificacion->id }}">{{ $clasificacion->classification }}</option>
				@endforeach
			</select>
		</div>

		<div class="uk-width-1-2@s">
			<select class="uk-select" name="status" id="form-stacked-select">
				@if($teacher->status == 'activo')
					<option value="Activo">Activo</option>
				@else
					<option value="Inactivo">Inactivo</option>
				@endif
			</select>
		</div>

		<div class="uk-width-1-1@s">
			<div class="uk-margin">
				<textarea class="uk-textarea" name="observation" value="" rows="2" placeholder="Observaciones">{{ $teacher->observation }}</textarea>
			</div>
		</div>

		<div class="uk-margin uk-width-1-1@s">
			<button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" name="boton">Guardar</button>
		</div>
	</form>
</div>
@endsection