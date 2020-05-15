<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=7">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	{{-- links del header planeem --}}
	<link rel="icon" type="image/png" href="{{asset('img/icono.png')}}">
	<!--bootstrap css-->
	{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"> --}}
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!--custom css-->
	<link rel="stylesheet" href="{{asset('css/estilos.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos/estilos.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos_modulo1/estilos_modulo1.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos_modulo1/loader.css')}}">
	<link rel="stylesheet" href="{{asset('css/estilos_modulo1/estilos_resposive.css')}}">
	<!-- mdbootstrap -->
	<link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
    <!--[if lte IE 9]>
        <link href='{{asset('css/animations-ie-fix.css')}}' rel='stylesheet'>
    <![endif]-->
    <link href="https5://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

</head>
<body>
	<div id="page-loader"><span class="preloader-interior"></span></div>
	<div id="app">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
				<a href="{{ route('index') }}/#top" class="logoPlaneem d-flex justify-content-center align-items-center mr-2">
					<div class="boxSep mr-2">
						<div class="imgLiquidFill imgLiquid">
							<img src="{{asset('img/icono.png')}}" style="vertical-align: baseline; width: 50px; height:50px"
							alt="logo PlaneƎm">
						</div>
					</div>
					<h1 class="h1-responsive tituloQueEs fuenteTitulo d-flex align-items-center verde m-0">Plane<span
						class="naranja planeem">E</span>m</h1>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
					aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">

					<div class="navbar-collapse">
						<ul class="navbar-nav ml-auto mr-md-3">
							@if (Route::has('login'))
							@auth
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->username }}<span class="icon-switch"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									{{ __('Cerrar sesión') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
						@endauth
						@endif
					</ul>
				</div>
			</div>
		</nav>
	</header>
</div>
<br><br><br><br>

<div class="menu_header">
	<input type="checkbox" id="btn-menu">
	<label for="btn-menu"><span class="icon-list2" style="color: white;"></span></label>
	<nav class="SegundoConten">
		<form method="post" style="display:none"		role="from" action="{{route('index/plam')}}">
			@csrf
			<input type="text" id="nombre_proyecto" name="nombre_proyecto">
			<button id="btn" type="submit"></button>
		</form>
		<a onclick="index()" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>

		<br>
		<h4 class="pensamiento">Pensamiento y Direccionamiento Estratégico.</h4>
		<br><br>
		<ul class="items">

			<li ><a><h6>Propuesta de valor</h6><span class="rounded-circle">01</span></a></li>

			<li ><a   id="linkid"><h6>Misión Organizacional</h6><span class="rounded-circle">02</span></a></li>

			<li ><a   id="linkid3"  ><h6>Visión Organizacional</h6><span class="rounded-circle">03</span></a></li>

			<li ><a    id="linkid4"><h6>Mega Empresarial</h6><span class="rounded-circle">04</span> </a></li>

			<li ><a  id="linkid5"><h6>Valores Corporativos</h6><span class="rounded-circle">05</span></a></li>
		</ul>
		<a data-toggle="modal" data-target="#exportar" href="#" id="boton2" value="Exportar" onclick="Mostra_Oculta()" class="exportar btn btn-planeem waves-effect waves-light">Exportar</a>
	</nav>
</div>

<!--modal pregunta-->
<div class="modal fade" id="exportar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-modificado1">
			<div class="modal-header">
				<h2 class="modal-title" id="exampleModalLabel" style="margin: 0 auto; font-weight: bold;">Seleccione su formato de exportación</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;">
					<span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px; cursor: pointer;"></span>
				</button>
			</div>
			<div class="modal-body" style="margin: 0 auto;">
				<a type="button" class="btn" data-toggle="modal" data-target="#exampleModalLong1word">
					<img class="word" src="../../img/word.png">
				</a>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.modal-modificado1 {
		border: #0AB5A0 2px solid !important;
		border-radius: 12px !important;
		width: 115%!important;
		height: 225px !important;
		margin-top: 50% !important;
		margin-left: 0 !important;
	}
</style>
<!--exportar word--->
<form method="post"  role="from" action="{{route('createWord')}}" >
	@csrf
	<div class="modal fade" id="exampleModalLong1word" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content5 ">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
						<textarea name="nombre_proyecto" id="nombre_proyecto3" style="display:none" ></textarea>

				<div class="modal-body">
					<div class="modulo1">
						<h2>Módulo 1</h2>
					</div>
						<div>
						<div class="barrita" ><h4 style="font-size: 16px;">Propuesta de valor</h4></div>
						<input class="barritache"  type="checkbox" style="cursor: pointer;" name="Propuesta_valor" value="Propuesta_valor">
					</div>
					<div>
						<div class="barrita2"><h4 style="font-size: 15px;">Misión Organizacional</h4></div>
						<input class="barritache2" type="checkbox" name="Mision_Organizacional" value="Mision_Organizacional" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita3"><h4 style="font-size: 15px;">Visión Organizacional</h4></div>
						<input class="barritache3" type="checkbox" style="cursor: pointer;" name="Vision_Organizacional" value="Vision_Organizacional">
					</div>
					<div>
						<div class="barrita4"><h4 style="font-size: 15px;">Mega Empresarial</h4></div>
						<input class="barritache4" type="checkbox" style="cursor: pointer;" name="Mega_Empresarial" value="Mega_Empresarial" >
					</div>
					<div>
						<div class="barrita5"><h4 style="font-size: 15px;">Valores Corporativos</h4></div>
						<input class="barritache5" type="checkbox" style="cursor: pointer;" name="v" value="v">
					</div>
					<div class="modulo2">
						<h2>Módulo 2</h2>
					</div>
					<div class="modulo2_scroll">
						<div>
							<div class="barrita6_nav"></div>
							<input class="barritache6_nav" type="checkbox"  style="cursor: pointer;">
						</div>
						<div>
							<div class="barrita7_nav"></div>
							<input class="barritache7_nav" type="checkbox" style="cursor: pointer;">
						</div>
						<div>
							<div class="barrita8_nav"></div>
							<input class="barritache8_nav" type="checkbox" style="cursor: pointer;">
						</div>
						<div>
							<div class="barrita9_nav"></div>
							<input class="barritache9_nav" type="checkbox" style="cursor: pointer;">
						</div>
						<div>
							<div class="barrita10_nav"></div>
							<input class="barritache10_nav" type="checkbox" style="cursor: pointer;">
						</div>
					</div>
					<div class="modulo3">
						<h2>Módulo 3</h2>
					</div>
					<div>
						<div class="barrita11"></div>
						<input class="barritache11" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita12"></div>
						<input class="barritache12" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita13"></div>
						<input class="barritache13" type="checkbox" style="cursor: pointer;">
					</div>
					<div class="modulo4">
						<h2>Módulo 4</h2>
					</div>
					<div>
						<div class="barrita16"></div>
						<input class="barritache16" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita17"></div>
						<input class="barritache17" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita18"></div>
						<input class="barritache18" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita19"></div>
						<input class="barritache19" type="checkbox" style="cursor: pointer;">
					</div>
					<div>
						<div class="barrita20"></div>
						<input class="barritache20" type="checkbox" style="cursor: pointer;">
					</div>
					<button type="submit" class="exportar24 btn btn-planeem waves-effect waves-light">Exportar</button>
				</div>
			</div>
		</div>
	</div>
</form>


<main class="">
	@yield('content')
</main>

<style>
	body{
		background-image: url({{asset('img/fondoLogo.jpg')}}) !important;
	}
	.collapsing{
		margin-top: -20px;
		z-index: -1;
	}
</style>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{asset('js/items_plus/items.js')}}"></script>
<script src="{{asset('js/valores/agregar.js')}}"></script>
<script src="{{asset('js/valores/exportar.js')}}"></script>
<script src="{{asset('js/valores/cerrar.js')}}"></script>
<script src="{{asset('js/valores/editar.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
	$(window).load(function(){
		$('#page-loader').fadeOut(10);
	});
</script>
<script>
	$(document).ready(function(){
		var current = 1,current_step,next_step,steps;
		steps = $("fieldset").length;
		$(".next").click(function(){
			current_step = $(this).parent();
			next_step = $(this).parent().next();
			next_step.show();
			current_step.hide();
			setProgressBar(++current);
		});
		$(".previous").click(function(){
			current_step = $(this).parent();
			next_step = $(this).parent().prev();
			next_step.show();
			current_step.hide();
			setProgressBar(--current);
		});
		setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
  	var percent = parseFloat(100 / steps) * curStep;
  	percent = percent.toFixed();
  	$(".progress-bar")
  	.css("width",percent+"%");
  }
});
</script>
</body>


<script>

	$('#nombre_proyecto').val(localStorage.getItem('nombre_proyecto'));

	function index(){
		document.getElementById('btn').click()
	}

</script>


<script>
	var nombre_proyecto = localStorage.getItem('nombre_proyecto');
	var id_Planeacion = localStorage.getItem('id');
	$('#nombre_proyecto').val(nombre_proyecto);
	$('#nombre_proyecto2').html(id_Planeacion);
	$('#nombre_proyecto3').html(id_Planeacion);



		function index(){
			document.getElementById('btn').click()
		}

	</script>

</html>
