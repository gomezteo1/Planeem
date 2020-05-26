@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection

	<div class="contenedor4">
		<h1 style="text-align: center; font-weight: bold; padding: 12px;">Matriz de Evaluación de Factores Internos</h1>
		<p style="padding: 10px;line-height: 23px;margin-left: 194px;width: 70%;font-size: 18px;text-align: justify;">
			La matriz de evaluación de factores internos denominada también (MEFI), es un instrumento para formular estrategia, 
			resume y evalúa las fuerzas y debilidades más importantes dentro de las áreas funcionales
			 de una empresa y además ofrece una base para identificar y evaluar las relaciones entre dichas áreas.
			<br><br>{vista factoresInternosI}
		</p>
	</div>
	<form action="{{ url('factorInt')}} " method="post"  role="from">
		@csrf 
		<input type="text" name="id_Planecion" value="{{$planeacion}}" >
		<button style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</button>
	</form>
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
					<ol style="line-height: 10px; margin-top: 1%;">
					   <b style="color: black; font-weight: bold; margin-left: 31px;">Desarrollo de la Matriz de Evaluación de Factores Internos:</b>
					   <br><br>
						<p style="padding: 10px;line-height: 21px;margin-left: 21px;width: 95%;font-size: 15px;text-align: justify;">
							A continuación, encontrará una lista de factores internos donde se muestran
							las fortalezas y debilidades de su empresa, estas son el resultado de
							la realización de la matriz de capacidad interna y matriz de perfil competitivo.
							Debe seguir los siguientes pasos:
							1.En la casilla peso ponderado: Asignar un peso entre 0.0 (no importante)
							hasta 1.0 (muy importante), el peso otorgado a cada factor expresa la
							importancia relativa del mismo, y el total de todos los pesos en su conjunto debe tener la suma de 1.0.
							2.En la casilla calificación: Asignar una calificación entre 1 y 4 a cada uno de los factores donde:<br>
							1.= Mayor debilidad<br>
							2.=Menor debilidad<br>
							3.=Menor fuerza<br>
							4.=Mayor fuerza<br>
							La Sumatoria total de las calificaciones ponderadas de cada factor
							permiten determinar el total ponderado de la empresa en su conjunto,
							teniendo en cuenta las siguientes interpretaciones:
							Si la calificación total del peso ponderado es por debajo del 2.5 indica
							que la empresa es Internamente DEBIL, Si la calificación total del
							peso ponderado es por encima del 2.5 indica que la empresa es Internamente FUERTE<br>
							¡Empecemos!.....
						</p>
					</ol>
				 </div>
			</div>	 
		</div>
	</div>
	
</section>
@yield('script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>

	$(document).ready(function () {
		$('.items li:nth-child(3)').addClass("acti");
		$('.items li').click(function () {
			$('.items li').removeClass("acti");
			$(this).addClass("acti");


		})

		$('.valores').mouseenter(function(){
			let mensaje = $(this).attr('mensaje');

			$('.hover').html(`<p>${mensaje}</p>`)
			$('.hover').show()

		})
		$('.valores').mouseleave(function(){

			$('.hover').hide()
		})
	})
</script>
@endsection
