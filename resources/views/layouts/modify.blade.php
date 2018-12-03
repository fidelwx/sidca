<!--modal-->

<div id="modal-sections" uk-modal>
	<div class="uk-modal-dialog ">
		<button class="uk-modal-close-default" type="button" uk-close></button>
		<div class="uk-modal-header uk-background-secondary">
			<h2 class="uk-modal-title">Modificacion:</h2>
		</div>
		<div class="uk-modal-body uk-background-secondary">
			<form class="uk-grid-small" uk-grid method="POST" action="{{ route('profesores.update',$teacher->id) }}">

				<div class="uk-width-1-2@s">
					<input class="uk-input" type="text" placeholder="Nombres" >
				</div>
				<div class="uk-width-1-2@s">
					<input class="uk-input" type="text" placeholder="Apellidos" value="{{ $teacher->last_name }}">
				</div>
				<div class="uk-width-1-2@s">
					<input class="uk-input" type="number" placeholder="Cedula" value="{{ $teacher->identity }}">
				</div>
				<div class="uk-width-1-4@s">
					<input class="uk-input" type="number" placeholder="Telefono Movil" value="{{ $teacher->phone1 }}">
				</div>
				<div class="uk-width-1-4@s">
					<input class="uk-input" type="number" placeholder="Telefono Casa" value="{{ $teacher->phone2 }}">
				</div>
				<div class="uk-width-1-2@s">
					<input class="uk-input" type="text" placeholder="Correo Personal" value="{{ $teacher->email1 }}">
				</div>
				<div class="uk-width-1-2@s">
					<input class="uk-input" type="text" placeholder="Correo Institucional @unerg.edu.ve" value="{{ $teacher->email2 }}">
				</div>
				<div class="uk-width-1-4@s">
					<input class="uk-input" type="date" placeholder="Fecha de Nac" value="{{ $teacher->birthdate }}">
				</div>
				<div class="uk-width-1-4@s">
					<input class="uk-input" type="text" placeholder="Lugar de Nac" value="{{ $teacher->first_name }}">
				</div>
				<div class="uk-width-1-4@s">
					<input class="uk-input" type="text" placeholder="Estado" value="{{ $teacher->first_name }}">
				</div>
				<div class="uk-width-1-4@s">
					<input class="uk-input" type="text" placeholder="Estatus" value="{{ $teacher->first_name }}">
				</div>
				<div class="uk-width-1-1@s">
					<div class="uk-margin">
						<textarea class="uk-textarea" rows="2" placeholder="Observaciones" value="{{ $teacher->first_name }}"></textarea>
					</div>
				</div>
			</form>
		</div>
		<div class="uk-modal-footer uk-text-right uk-background-secondary">
			<button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
			<button class="uk-button uk-button-primary" type="button">Save</button>
		</div>
	</div>
</div>

<!--/modal-->

