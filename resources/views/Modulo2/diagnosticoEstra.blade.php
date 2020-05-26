@extends('layouts.nav2')

@section('content')

<header>
	@yield('js')

		@section('f')
	@endsection

	<div style=" text-align: center;">
		<h2 class="tituloestra animated bounceInDown">Diagnóstico Estratégico</h2>
		<img class="imgdiagnostico animated bounceInDown" src="img/diagnostico.png">
	</div>
	<div class="parrafito">
		<p style="line-height: 23px;margin-left: 80px;width: 80%;font-size: 18px;text-align: justify;" >El diagnóstico estratégico consiste en analizar cuál es la situación de su empresa, en procesos, etapas y fases, teniendo en cuenta diferentes elementos del diagnóstico basados en el aspecto interno y externos, que nos permite satisfacer las necesidades de todos los involucrados: Accionistas, Empleados, Clientes y Stakeholders. 
			Para ello se requiere la recopilación adecuada de información, y así considerar la causa y consecuencia de cada escenario.
			En este módulo 2, desarrollaremos 3 pasos importantes donde nos encontraremos con diferentes matrices que nos permiten realizar un análisis interno y externo de nuestra empresa y de esta manera obtener una visión más amplia de nuestro entorno empresarial 
			<br><strong>Paso 1: Análisis interno</strong>  
			<br><strong>Paso 2: Análisis externo</strong> 
			<br><strong>Paso 3: Resultados del Diagnóstico</strong> 

			</p>
	</div>
	<br>

	<a href="{{route('capacidadInterna')}} " style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>

	<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body"> 
					<p>
						Para realizar la Matriz de Capacidad Interna es fundamental realizar los siguientes pasos:
						<br>1) se identifica si los factores mencionados representan para su empresa una debilidad o fortaleza.
						<br>2) Después se debe asignar una calificación a cada factor considerando su importancia de la siguiente manera:
						<br>A (si es alto).
						<br>M (si es medio).
						<br>B (si es bajo).
						<br>En caso de no aplicar se puede marcar la opción N/A.
						<br><br>¡Empecemos!
						{vista diagnosticoEstra}
					</p>
				</div>
			</div>
		</div>
	</div>
	
</section>

@yield('script');

@endsection
