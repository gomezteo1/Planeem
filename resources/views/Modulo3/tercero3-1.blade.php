@extends('layouts.nav3')

@section('content')
<header>
	@yield('js')

	<div style=" text-align: center;">
		<h2 class="parrafoII" style="position: absolute; left: 41%; top: 35%;">Resultados de estrategias</h2>
	</div>
	<div>
		<p class="parrafito">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<a href="{{ route('tercero3-2') }} " style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
	<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content10">{{-- se coloco estilos de este modal en estilos css --}}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body">
					<ol style="line-height: 17px; margin-top: 47px;">
						<b style="color: black; font-weight: bold;">Matriz de evaluación de factores internos Matriz EFI</b>
						<br><br>
						Es una La Matriz de Evaluación de Factores Internos que denomina EFI se desarrolla iniciando con la lista de fortalezas
						y debilidades donde se resume y evalúa las fuerzas y debilidades más importantes dentro de las áreas funcionales de
						un negocio y además ofrece una base para identicar y evaluar las relaciones entre dichas áreas. (Rincón Torres, 2012).<br>
						<br>
						<b style="color: black; font-weight: bold;">La matriz EFI se desarrolla en cinco pasos:</b><br>
						Pasos para realizar la evaluación de La matriz EFI<br>
						1: se debe hacer una lista factores identicados que incluyan debilidades y fortalezas de la empresa (deben ser entre
						10 y 20)<br>
						2: Asignar un peso a cada variable, que va desde 0.0 a 1.0
						0.0 La fortaleza o Debilidad no es muy importante
						1.0 La fortaleza o Debilidad es muy importante<br>
						3: sumar los pesos asignados, esta suma no debe superar el 1.0<br>
						4: se debe asignar una calicación a cada variable que va de 1 hasta <br>
					</ol>
				</div>
			</div>
		</div>
	</div>
	
</section>
@yield('script')

@endsection
