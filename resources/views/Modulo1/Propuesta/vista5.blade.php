@extends('layouts.nav')

@section('content')
<header>

</header>




<div id="">
	<form method="post"  role="from" action="{{route('vista2')}}" >
		@csrf
		  <input type="text" id="id_p" name="nombre_proyecto"   >
		  <button type="submit" id="vista2" ></button>
	  </form>
  </div>




	<div class="contenedor3">
		<p id="MEGA" ></p>
		{{-- Campo de texto  --}}
		<textarea maxlength="1205" class="campo"  id="Propuesta2" name="" required></textarea>
	</div>

	<label for="exampleInputEmail1" id="hola">Email address</label>

	<div>
		<p class="necesidad"><b style="color: #0AB5A0">Que</b> (necesidad u oportunidad)<br>
			Trata de ser lo más específico en este punto, ya que de esta forma sabrás qué estás ofertando en el mercado y qué
			cantidad<br> de clientes potenciales tendrás.<br>
			<b style="color: #0AB5A0">Ejemplo: “Que quieren mejorar su presencia en internet”</b></p>
		</div>
		<p class="formula2">Fórmula: <b style="color: #0AB5A0">Para</b> (el cliente objetivo) + <b style="color:#0AB5A0">Que</b> (necesidad u oportunidad) + <b style="color:#0AB5A0">Nuestro</b> (nombre del producto/servicio) /categoría
			del<br> producto) + (<b style="color:#0AB5A0">Beneficio</b>/Factor diferenciador)</p>
			<a   href="{{ route('Propuesta/paso5') }} " onclick="guardar()" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
			<a href="{{ route('Propuesta/paso2') }}" style="color:white;" class="anterior btn btn-planeem waves-effect waves-light">Anterior</a>	
			<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
			<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-scrollable" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">PROPUESTA DE VALOR</h5>
							<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
							margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
							
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
		</form>
		<script>
			function guardar(){

				//Almacenamiento del localStorage
				var miDato = document.getElementById('Propuesta2').value;
				localStorage.setItem('Propuesta',miDato);
				//Porcentaje para la barra de progreso 
				var Progreso = localStorage.getItem('Progreso');
				var numero = localStorage.getItem('numero');
                if(numero > 15){
					localStorage.setItem('numero',numero);
				}else{
					localStorage.setItem('Progreso','15%');
					localStorage.setItem('numero',15);
				}
				
			}
		</script>


		<script>
			//// Muestra los datos del  localStorage
			var Propuesta = localStorage.getItem('Propuesta');
			document.getElementById("Propuesta2").innerHTML = Propuesta;
			//Muestra el porcentaje de la barra de progreso (0%) 
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