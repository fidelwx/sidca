<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>SIDCA | Registro</title>
	<link rel="icon" href="{{asset('img/Unerg-1.png')}}">
	<!-- CSS FILES -->
	<link rel="stylesheet" href="{{asset('css/uikit.min.css')}}" />
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="uk-light wrap uk-background-norepeat uk-background-cover uk-background-center-center uk-background-secondary" style="background-image: url({{asset('img/P6265793.JPG')}})">
	<div class="uk-offcanvas-content">
		<div class="uk-flex uk-flex-center uk-flex-middle uk-height-viewport uk-position-z-index uk-position-relative" data-uk-height-viewport="min-height: 400">

			<!-- NAV -->
			<div class="uk-position-top">
				<div class="uk-container uk-container-small">
					<nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
						<div class="uk-navbar-left">
							<div class="uk-navbar-item">
								<a class="uk-logo" href="cover.html"><img src="{{asset('img/image.png')}}" alt="Logo"><span>SIDCA</span></a>
							</div>
						</div>
						@guest

						@else
						<div class="uk-navbar-right">
							<ul class="uk-navbar-nav">
								<li class="uk-active uk-visible@m"><a href="" data-uk-icon="home"></a></li>
								<li class="uk-visible@s"><a href="/profesores/">PROFESOR</a></li>
								<li class="uk-visible@s"><a href="#">NOMINA</a></li>
								<li class="uk-visible@s"><a href="#">PRECARGAR DATOS</a></li>
								<li><a class="uk-navbar-toggle" data-uk-toggle data-uk-navbar-toggle-icon uk-toggle="target: #offcanvas-slide"></a></li>
							</ul>
						</div>
						@endguest
					</nav>
				</div>
			</div>
			<!-- /NAV -->

			@yield('content')

			<!-- FOOT -->
			<div class="uk-position-bottom-center uk-position-small">
				<span class="uk-text-small uk-text-center">© 2018 | Direccion De Informatica | <a href="https://www.unerg.edu.ve">Unerg</a></span>
			</div>
			<!-- /FOOT -->

		</div>

		<!-- OFFCANVAS -->
		<div id="offcanvas-slide" uk-offcanvas="overlay: false; flip:true">
			<div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
				<button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
				<ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
					<li class="uk-active"><a href="#">Menu Principal</a></li>
					<li class="uk-parent">
						<a href="#" >PROFESOR</a>
						<ul class="uk-nav-sub">
							<li><a href="{{route('profesores.create')}}">Registrar Profesor</a></li>
							<li><a href="{{route('profesores.index')}}">Listado de Profesores</a></li>
						</ul>
					</li>
					<li class="uk-parent">
						<a href="#" >NOMINA</a>
						<ul class="uk-nav-sub">
							<li><a href="#">SubMenu 1</a></li>
							<li><a href="#">SubMenu 2</a></li>
							<ul class="uk-nav-sub">
								<li><a href="">SubMenu 3</a></li>
								<li><a href="">SubMenu 4</a></li>
							</ul>
						</ul>
					</li>
					<li class="uk-parent">
						<a href="#" >PRECARGAR DATOS</a>
						<ul class="uk-nav-sub">
							<li><a href="#">SubMenu 1</a></li>
							<li><a href="#">SubMenu 2</a></li>
							<ul class="uk-nav-sub">
								<li><a href="">SubMenu 3</a></li>
								<li><a href="">SubMenu 4</a></li>
							</ul>
						</ul>
					</li>
					<li class="uk-nav-divider"></li>
				<li><a href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Salir</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</li>
				</ul>
				<h3>¿Porque Sidca?</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
		<!-- /OFFCANVAS -->

	</div>
	<!-- JS FILES -->
	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('js/myjs.js')}}"></script>
	<script src="{{asset('js/uikit.min.js')}}"></script>
	<script src="{{asset('js/uikit-icons.min.js')}}"></script>
</body>
</html>
