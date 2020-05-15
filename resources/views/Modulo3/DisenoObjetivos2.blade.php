@extends('layouts.nav3')

@section('content')
<header>
	@yield('js')
	@include('modal/modal3')
</header>


	<div style=" text-align: center;">
		<h2 class="parrafoII" style="position: absolute;left: 44%;top: 295px;">Diseño de objetivos</h2>
	</div>
	<div>
		<p class="parrafoIII">
			<b style="text-align: center; font-weight: bold;">¿QUÉ ES?</b><br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
			<b style="font-weight: bold;">¿CÓMO SE ESTRUCTURA?</b><br>	
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div>

	<form method="post"  role="from" action="{{route('Verbos')}}" >
            @csrf
                <textarea name="nombre_proyecto" style="color:white" id="nombre_proyecto" cols="30" rows="10"></textarea>
                <button type="submit"  style="color:white;" name="nuevo" class="Ahora_pensa2 btn btn-planeem waves-effect waves-light">Siguiente</button>
			</form>
		<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>

</section>

@yield('script')


<script>
	var nombre = localStorage.getItem('id');
	document.getElementById('nombre_proyecto').innerHTML =  nombre;

	
</script>

@endsection
