<!--modal-->

<div id="modal-sections" uk-modal>
	<div class="uk-modal-dialog ">
		<button class="uk-modal-close-default" type="button" uk-close></button>
		<div class="uk-modal-header uk-background-secondary">
			<h2 class="uk-modal-title">Modificacion:</h2>
		</div>
		<form method="POST" action="{{route('profesores.update',$teacher->id)}}">
			<div class="uk-modal-body uk-background-secondary">
				<div class="uk-grid-small" uk-grid>
					{{ csrf_field() }}

					<legend class="uk-legend uk-text-center">SIDCA - Modificar</legend>

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
					@if($teachers->find($teacher->id)->phones->count() == 2)
					@foreach($teacher->phones as $phone)
					<div class="uk-width-1-4@s">
						<input value="{{ $phone->number }}" name="phone{{ $i++ }}" class="uk-input"  id="input" type="number" placeholder="Telefono Movil">
					</div>
					@endforeach
					@else
					<div class="uk-width-1-4@s">
						<input value="{{ $teacher->find($teacher->id)->phones->first()->number }}" name="phone1" class="uk-input"  id="input" type="number" placeholder="Telefono Movil">
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
					@if($teachers->find($teacher->id)->emails->count() == 2)
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
					<div class="uk-width-1-2@s">
						<select class="uk-select" name="headquarters_id" id="form-stacked-select">
							<option value="{{ $teacher->headquarter_id }}" >Sede</option>
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

					<div class="uk-width-1-2@s">
						<select class="uk-select" name="status" id="form-stacked-select">
							<option value="{{ $teacher->status }}">Estatus</option>
							<option value="Activo">Activo</option>
							<option value="Inactivo">Inactivo</option>
						</select>
					</div>

					<div class="uk-width-1-1@s">
						<div class="uk-margin">
							<textarea class="uk-textarea" name="observation" value="" rows="2" placeholder="Observaciones">{{ $teacher->observation }}</textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="uk-modal-footer uk-text-right uk-background-secondary">
				<button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
				<button class="uk-button uk-button-primary" type="submit">Save</button>
			</div>
		</form>
	</div>
</div>

<!--/modal-->

