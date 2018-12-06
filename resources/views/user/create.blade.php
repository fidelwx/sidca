@extends('layouts.template')
@section('content')
<div class=" uk-width-1-2@s uk-padding-small uk-background-secondary">
	<form class="uk-grid-small" uk-grid method="POST" action="{{route('usuarios.store')}}">
		{{ csrf_field() }}
        <legend class="uk-legend uk-center">Crear Usuario</legend>

        <div class="uk-width-large">
        	<input name="user" class="uk-input" type="text" placeholder="Nombre de usuario">
        </div>
        <div class="uk-width-large">
            <input name="email" class="uk-input" type="email" placeholder="Correo Electronico">
        </div>
        <div class="uk-width-large">
            <input name="password" class="uk-input" type="password" placeholder="Contraseña">
        </div>
        <div class="uk-width-small">
            <input name="first_name" class="uk-input" type="text" placeholder="Nombres">
        </div>
        <div class="uk-width-small">
            <input name="last_name" class="uk-input" type="text" placeholder="Apellidos">
        </div>
        <div class="uk-width-small">
            <input name="identity" class="uk-input" type="text" placeholder="Cedula">
        </div>
        <div class="uk-width-large uk-margin">
            <select style="color: black;" name="role_id" class="uk-select">
                <option>...</option>
                @foreach($roles as $role)
                	<option value="{{ $role->id }}">{{ $role->rol }}</option>
               	@endforeach
            </select>
        </div>
        <div class="uk-width-large">
            <input name="submit" class="uk-input" type="submit" value="Enviar">
        </div>
	</form>
</div>
@endsection