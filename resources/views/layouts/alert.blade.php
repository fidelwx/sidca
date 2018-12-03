<!-- ALERTA DE ERROR -->
@if($errors->all())
<div class="uk-alert-danger" uk-alert="animation:true">
	@foreach($errors->all() as $error)
	<a href="" class="uk-alert-close" uk-close></a>
	<p><strong>{{ $error }}</strong></p>
	@endforeach
</div>
@endif

<!-- ALERTA DE SUCCESS -->
@if(session('info'))
<div class="uk-alert-success" uk-alert>
	<a href="" class="uk-alert-close" uk-close></a>
	<p><strong>{{ session('info') }}</strong></p>
</div>
@endif