<script>
	document.getElementById("capaInterna").style.display = "none";

</script>

<div id="index">

	<!DOCTYPE html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=7">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>
		<script src="{{ asset('js/javas/scripthover.js') }}" defer></script>

		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">

		{{-- links del header planeem --}}
		<link rel="icon" type="image/png" href="{{asset('img/icono.png')}}">
		{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"> --}}
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<!--custom css-->
		<link rel="stylesheet" href="{{asset('css/estilos.css')}}">
		<link rel="stylesheet" href="{{asset('css/estilos/estilos.css')}}">
		<!-- mdbootstrap -->
		<link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
<!--[if lte IE 9]>
	<link href='{{asset('css/animations-ie-fix.css')}}' rel='stylesheet'>
<![endif]-->
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">





</head>
<body>
		<meta name="csrf-token" content="{{ csrf_token() }}">

	<div id="app">
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
				{{-- <a href="{{ route('index') }}/#top" class="logoPlaneem d-flex justify-content-center align-items-center mr-2"> --}}
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
<br><br>

<div class="containers">
	<nav class="navbar navbar-dark bg-verdeclaro radius">
		<h4 class="inicia">Inicia tu planeación aquí</h4>
		<a data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"><span class="icon-plus "></span></a>
	</nav>
	<div id="navbarToggleExternalContent">
		<div class="bg-verdeoscuro p-4 bordered">
			<br>
			<h4 class="inicia" style="text-align: center;">{{$proyect->nombre_proyecto}}</h4>
			<div class="form-group">
				<input type="checkbox" value="" id="invalidCheck" disabled="">&nbsp
		@if ($proyect->proceso == 'proceso0')
	<label   onclick="Planecion()"  onclick="updatePlanecion()" class="espacio" id="hover1"><p style="color: white;">Pensamiento y direccionamiento estratégico</p></label>		@endif 
		@if ($proyect->proceso != 'proceso0')
	<label   onclick="Planecion()"  onclick="updatePlanecion()" class="espacio" id="hover1"><p style="color: white;">Pensamiento y direccionamiento estratégico</p></label>		@endif 

  
			
			</div>

			<div class="form-group">
				<input type="checkbox" value="" id="invalidCheck" disabled="">&nbsp
				<label  onclick="capacidadInterna()" class="espacio" id="hover2"><p style="color: white;">Diagnóstico estratégico</p></label>
			</div>
			<div class="form-group">
				<input type="checkbox" value="" id="invalidCheck" disabled="">&nbsp
				<label onclick="estrategias()" class="espacio" id="hover3"><p style="color: white;">Diseño y formulación de estrategias</p></label>
			</div>
			<div class="form-group">
				<input type="checkbox" value="" id="invalidCheck" disabled="">&nbsp
				<label class="espacio"id="hover4"><p style="color: white;">Indicadores de gestión</p></label>
			</div>
			<div class="form-group">
				<a href="{{route('home')}}" class="close" style="color: white; margin-left: 78% !important;">Volver<span class="icon-undo2" style="color: white;padding-left: 8px;"></span></a>
			</div>
		</div>
	</div>
</div>
<!-- Button trigger modal -->
<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor: pointer;"></span>
{{-- aca los gif --}}
<section class="sectiongif">
	<img src="{{asset('img/GIFS/GifCentro.gif')}}"    lt="planeacion 1" class="gif gifcentro ">

	<img src="{{asset('img/GIFS/Gif1Numero.gif')}}" alt="planeacion 1" class="gif gif1 active">
	<div class="hovergif" id="afectado1">
		@if ($proyect->proceso == 'proceso0')
		<img   src="{{asset('img/GIFS/Gif1.gif')}}" alt="planeacion 1"  onclick="Planecion()"  class="gif gif1 static">
		@endif 
		@if ($proyect->proceso != 'proceso0')
		<img   src="{{asset('img/GIFS/Gif1Color.gif')}}" alt="planeacion 1"  onclick="updatePlanecion()"  class="gif gif1 static">
		@endif            
	</div>

	<div id="form">
		<form method="post"  role="from" action="{{route('vista2')}}" style="display: none;" >
			@csrf
			<input type="text" id="id_p" name="nombre_proyecto" value="{{$proyect['nombre_proyecto']}}"  >
			<input type="text" id="id-project" name="" value="{{$proyect['id_Planeacion']}}"  >

			<button type="submit" id="vista2" ></button>
		</form>
	</div>


	<div id="form">
		<form method="post"  role="from" action="{{route('vista2')}}" style="display: none;" >
			@csrf

			<input type="text" id="id_p" name="nombre_proyecto" value="{{$proyect['nombre_proyecto']}}"  >
			<input type="text" id="id-project" name="" value="{{$proyect['id_Planeacion']}}"  >

			<button type="submit" id="vista2" ></button>

		</form>
	</div>

	<div id="form">
		<form method="post"  role="from" action="{{route('update/pensamiento')}}" style="display: none;" >
			@csrf
			<input type="text" id="id_p" name="nombre_proyecto" value="{{$proyect['nombre_proyecto']}}"  >
			<input type="text" id="id-project" name="id_Planeacion" value="{{$proyect['id_Planeacion']}}"  >
			<button type="submit" id="udate" ></button>
		</form>
	</div>

	<div></div>



	<div id="form">

		<a href="{{ route('diagnosticoEstra') }} " id="capacidadInterna"  style="display: none;"   name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
	</div>


	<a href="{{ route('diagnosticoEstra') }} " id="capacidadInterna"  style="display: none;"   name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
</div>

<img src="{{asset('img/GIFS/Gif2Numero.gif')}}" alt="planeacion 2" class="gif gif2 active">
<div class="hovergif" id="afectado2">
	<img src="{{asset('img/GIFS/Gif2.gif')}}" alt="planeacion 2" onclick="capacidadInterna()" class="gif gif2 static">
</div>
</div>
<img src="{{asset('img/GIFS/Gif3Numero.gif')}}" alt="planeacion 3" class="gif gif3 active">
<div class="hovergif" id="afectado3">
	<img src="{{asset('img/GIFS/Gif3.gif')}}" alt="planeacion 3"  onclick="estrategias()" class="gif gif3 static">
<a id="estrategias" href="{{route('DisenoObjetivos')}}"></a>
{{-- 	<div  style="display: none;" id="form">
		<form method="post"  role="from" action="{{route('estrategias')}}" >
			@csrf
			<input type="text" id="id_p" name="nombre_proyecto" value="{{$proyect['nombre_proyecto']}}"  >
			<button type="submit" id="estrategias" ></button>
		</form>
	</div> --}}
</div>
<img src="{{asset('img/GIFS/Gif4Numero.gif')}}" alt="planeacion 4" class="gif gif4 active">
<div class="hovergif" id="afectado4">
	<img src="{{asset('img/GIFS/Gif4.gif')}}" alt="planeacion 4" class="gif gif4 static">
</div>
</section>
{{-- terminan los gif --}}
<a>
	<!-- Modal -->


	<div class="ajustar">
		<div class="modal" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content" style="height: 30rem !important;margin-top: 31%;height: 58%;margin-top: 31%;width: 200%;margin-left: -50%;">
					<div class="modal-header">
						<h5 class="modal-title tituloModal" id="exampleModalCenterTitle" style="margin-left: 40% !important;font-size: 2rem !important;">Bienvenid@</h5>
						<span class="icon-cancel-circle" style="color: #FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
						margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
	
					</div>
					<div class="modal-body">
						<p style="text-align: justify;">La planeación estratégica es el proceso de gestión que permite a las Mipymes definir y establecer los objetivos que se pretenden lograr, así como las actividades que se llevarán a cabo para alcanzarlos, esto teniendo como premisa una mejor toma de decisiones y la intención de generar el mapa de navegación  a la unidad de negocio.<br><br>
							<b style="font-weight: bold;font-size: 17px;">Este mapa consiste en:</b><br>
							· Definir misión, visión, valores y los objetivos de largo plazo de la empresa.<br>
							· Realizar un análisis interno y externo de la organización<br>
							· Establecer las estrategias que apoyan los objetivos, su plan respectivo y los medios de medición.<br>
							Lo anterior se logra a través de los  4 módulos  que PlaneEm pone a su disposición: <br>
							<b style="font-weight: bold;">· Módulo 1:</b> Pensamiento y direccionamiento estratégico.<br>
							<b style="font-weight: bold;">· Módulo 2:</b> Diagnóstico estratégico.<br>
							<b style="font-weight: bold;">· Módulo 3:</b> Diseño y formulación de estrategias.<br>
							<b style="font-weight: bold;">· Módulo 4:</b> Indicadores de Gestión.<br>
	
						</p>
					</div>
	
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!--script para javascript para que carga el modal -->

<script>
		let token = document.head.querySelector('meta[name="csrf-token"]');



	$(document).ready(function()
	{
		setTimeout(function(){
			$("#staticBackdrop").modal("show");
		}, 3000);

	});

</script>

<script>
	function updatePlanecion(){
		var nombre_proyecto = document.getElementById('id_p').value;
		var id = document.getElementById('id-project').value;
		localStorage.setItem('nombre_proyecto',nombre_proyecto)
		localStorage.setItem('id',id)

		document.getElementById("udate").click();

	}
</script>


<script>

	function Planecion(){

		var nombre_proyecto = document.getElementById('id_p').value;
		var id = document.getElementById('id-project').value;
		localStorage.setItem('nombre_proyecto',nombre_proyecto)
		localStorage.setItem('id',id)				
		document.getElementById("vista2").click();
		window.onload = vista2;
	}
</script>


<script>


	window.onload = vista2;

	function estrategias(){

		var nombre_proyecto = document.getElementById('id_p').value;
		var id = document.getElementById('id-project').value;
		localStorage.setItem('nombre_proyecto',nombre_proyecto)
		localStorage.setItem('id',id)


		document.getElementById("estrategias").click();
	}
</script>





<script>

	function capacidadInterna(){

		var nombre_proyecto = document.getElementById('id_p').value;
		var id = document.getElementById('id-project').value;
		localStorage.setItem('nombre_proyecto',nombre_proyecto)
		localStorage.setItem('id',id)


		

		document.getElementById("capacidadInterna").click();

		window.onload = vista2;

	}
</script>







<script>

	vista = false;

	if(vista == false){
		document.getElementById('form').style.display="none"
	}

</script>




</body>
</html>
</div>
