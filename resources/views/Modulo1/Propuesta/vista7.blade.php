@extends('layouts.nav')

@section('content')
<header>

</header>



<div class="form-group">


	    <div id="">
				<form method="post"  role="from" action="{{route('vista2')}}" >
				  @csrf
					<input type="text" id="id_p" name="nombre_proyecto"   >
					<button type="submit" id="vista2" ></button>
				  </form>
		</div>
<section>
	<div class="contenedor3">
		<textarea maxlength="1205" class="campo" name="" id="Propuesta2" ></textarea>
	</div>
	<div>
		<p class="elemento "><b style="color: #0AB5A0">Cuál es tu elemento diferenciador:</b><br>
			Ya sea que tu oferta se entrega a domicilio, en centros comerciales, a través de aplicaciones web o cualquier otro
			aspecto<br> determinante, enumera todas las características de tu producto o servicio y compáralo con tu competencia
			directa, de esta forma<br> tendrás más claro qué es lo que te hace realmente diferente y lo que apreciarán tus clientes.
			(Saavedra, 2017)<br>
			<b style="color: #0AB5A0">Ejemplo: “Les permitirá mejorar sus ventas y su reputación online”</b></p>
		</div>
		<p class="formula">Fórmula: <b style="color: #0AB5A0">Para</b> (el cliente objetivo) + <b style="color:#0AB5A0">Que</b> (necesidad u oportunidad) + <b style="color:#0AB5A0">Nuestro</b> (nombre del producto/servicio) /categoría
			del <br>producto) + (<b style="color:#0AB5A0">Beneficio</b>/Factor diferenciador)</p>
			<a href="{{ route('Propuesta/paso6') }}" onclick="guardar()" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
			<a href="{{ route('Propuesta/paso4') }}" style="color:white;" class="anterior btn btn-planeem waves-effect waves-light">Anterior</a>
		</section>
		<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
		<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">Propuesta De Valor</h5>
						<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
						margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

					</div>
					<div class="modal-body">
						<p>Una propuesta de valor es una frase clara y concisa que explica
                            como su producto o servicio resuelve los problemas del cliente,
                            cubre una necesidad o mejora su situación específica, indicando claramente un beneficio......Vista 7)</p>
					</div>
				</div>
			</div>
		</div>
</div>
		elemento diferenciador
		<script>
			function guardar(){
				//Almacenamiento del localStorage
				var miDato = document.getElementById('Propuesta2').value;
				localStorage.setItem('Propuesta',miDato);
				//Porcentaje para la barra de progreso
				var numero = localStorage.getItem('numero');

				if(numero > 25){
					localStorage.setItem('numero',numero);
				}else{
					localStorage.setItem('Progreso','25%');
					localStorage.setItem('numero',25);
				}

			}
		</script>


		<script>
				//// Muestra los datos del  localStorage
			var Propuesta = localStorage.getItem('Propuesta');
			var hola = document.getElementById('Propuesta2').innerHTML =Propuesta;
		</script>
		<script>

			//Muestra el porcentaje y el progreso, de la barra de progreso (0%)
			var Progreso = localStorage.getItem('Progreso');
			document.getElementById("id").style.width=Progreso;
			document.getElementById("id").innerHTML = Progreso;
		</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


<script>

	$(document).ready(function () {
	  $('.items li:first-child').addClass("acti");
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



<style >
	body{

		background-image: url("img/fondoLogo.jpg");
	}
	.collapsing{
		margin-top: -20px;
		z-index: -1;

	}

	</style>



		@endsection
