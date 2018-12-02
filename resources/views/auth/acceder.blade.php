@extends('layouts.template')
@section('content')
<div class="uk-height-1-1 ">
	<div class="uk-flex uk-flex-center uk-flex-middle  uk-height-viewport">
		<div class="uk-width-medium uk-padding-small uk-background-secondary">
			<form class="form-horizontal" method="POST" action="{{ route('login') }}">
				<fieldset class="uk-fieldset">
					{{ csrf_field() }}

					<legend class="uk-legend uk-text-center">SIDCA - Registro</legend>
					<div class="uk-margin">
						@if ($errors->has('user'))
						<div class="uk-alert-danger" uk-alert>
							<p>
								<strong>{{ $errors->first('user') }}</strong>
							</p>
						</div>
						@endif
						
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: user"></span>
							<input id="user" type="text" class="uk-input uk-form-large" placeholder="Usuario" name="user" value="{{ old('user') }}" required>

						</div>
					</div>

					<div class="uk-margin">
						@if ($errors->has('password'))
						<div class="help-block">
							<p>
								<strong>{{ $errors->first('password') }}</strong>
							</p>
						</div>
						@endif
						<div class="uk-inline uk-width-1-1">
							<span class="uk-form-icon uk-form-icon-flip" data-uk-icon="icon: lock"></span>
							<input id="password" type="password" class="uk-input uk-form-large" placeholder="Contraseña" name="password" required>

						</div>
					</div>
					<div >
						<div >
							<div >
								<label>
									<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 	Recordar?
								</label>
							</div>
						</div>
					</div>
					<div class="uk-margin">
							<button type="submit" class="uk-button uk-button-primary uk-button-primary uk-button-large uk-width-1-1">Iniciar Sesion
							</button>

							<a class="btn btn-link" href="{{ route('password.request') }}">
								Contraseña Olvidada?
							</a>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
@endsection