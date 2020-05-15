@extends('layouts.nav4')

@section('content')

<header>
	@yield('js')
	@section('f')
	<a href="{{ route('vista2') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection

	<div style=" text-align: center;">
		<h2 class="tituloestra" style="line-height: 15px;">Indicadores de Objetivos</h2>
		<img class="imgdiagnostico" src="img/modulo4.png">
	</div>
	<br>
	<div class="parrafito">
		<p style="line-height: 23px;margin-left: 80px;width: 80%;font-size: 18px;text-align: justify;" >El diagnóstico estratégico permite llevar a su empresa al logro de procesos, etapas y fases teniendo
			en cuenta diferentes elementos del diagnóstico basados en el aspecto externo e interno de la
			empresa, dentro de la cual se busca satisfacer las necesidades de todos los involucrados:
			accionistas, trabajadores, clientes para ello se requiere la recopilación adecuada de información, y
		así considerar la causa y consecuencia de cada escenario.(Gonzales & Mator, 2017)</p>
	</div>
	<br>
	<a href="{{route('vista1-2')}} " style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>

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
						Como realizar la calificación de la Matriz PCI (Perfil de Capacidad interna)

						Para realizar la calificación de la matriz se debe seleccionar la capacidad, identificar si
						es una fortaleza o debilidad para la empresa, luego si:
						<br><br>
						1. Es una fortaleza se debe calificar D si es débil (débil), M si es (media) y A si es (alta)
						<br>
						2. Es debilidad debo calificar si es D si es débil (débil), M si es (media) y A si es (alta)
						Luego, se califica que impacto tiene esa debilidad o fortaleza para la empresa: D(débil),
						M (media), A(alta)
					</p>
				</div>
			</div>
		</div>
	</div>

</section>
@yield('script')
<script>





	$(document).ready(function () {
		$('.items3 li:nth-child(2)').addClass("acti3");
		$('.items3 li').click(function () {
			$('.items3 li').removeClass("acti3");
			$(this).addClass("acti3");


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
