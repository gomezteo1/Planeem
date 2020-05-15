@extends('layouts.nav')

@section('content')
<header>
</header>
<div class="form-group">
	<div class="Mision">
		<h5 style="text-align: center; font-weight: bold; padding: 12px;">VALORES CORPORATIVOS </h5>
		<p style="padding: 12px; margin-left:50px;">Los valores corporativos son la creencia de lo que la empresa es de manera compartida por los integrantes de la misma. Cabe resaltar que los valores que marcan el comportamiento de los miembros y que con el paso del tiempo se transmiten de unos a otros y orientan y determinan la actividad y el quehacer de la empresa. Alineados y en coherencia con su estrategia de actuación.
			A continuación, se muestra una lista desplegable, de valores corporativos que pueden acoplarse a los ideales de su organización.
		</p>
	</div>
	<form method="post"  role="from" action="{{route('indexValor')}}" >
		@csrf
		<input style="display:none" name="nombre_proyecto" id="nombre_proyecto"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	
		<button type="submit" style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</button>
	</form>

	<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">PROPUESTA DE VALOR</h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 4%;" data-dismiss="modal" aria-label="Close"></span>
					
				</div>
				<div class="modal-body">
					<p>Son las expectativas que de forma unilateral el consumidor se forma en su mente, es lo que el cliente
						imagina que obtendrá a la hora de adquirir determinado bien o servicio, en esto podemos influir, pero en
						mayor parte son las experiencias personales del consumidor y las condiciones generales del mercado lo
						que determinan sus expectativas personales a la hora de comprar
						a través de ella determinarás lo que diferencia tu producto o servicio de la competencia, además que te
					ayudará a encontrar la forma en que atenderás a tus clientes o segmento de mercado. (Saavedra, 2017)</p>
				</div>
			</div>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script>
		var nombre_proyecto = localStorage.getItem('nombre_proyecto');
		$('#nombre_proyecto').val(nombre_proyecto);
	</script>



<script>
		
	

	$(document).ready(function () {
		$('.items li:nth-child(2)').addClass("acti");
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
<script>
	var por=0;

	if (por ==0) {
		document.getElementById('prog','icono').style.display = 'none';

	}
</script>






@endsection