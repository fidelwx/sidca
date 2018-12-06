<div class="uk-container uk-position-top uk-align-center">
	<!-- ALERTA DE ERROR -->
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