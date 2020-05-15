@extends('layouts.nav3')

@section('content')
<header>
	@yield('js')


	@yield('progres')
</header>
<form method="post"  role="from" action="{{route('FormulacionCon')}}">
	@csrf
<input type="text" style="display:none" name="id_planecion" value="{{$proyecto->id_Planeacion}}">
<section class="contenedorAsociar">
	<div class="estrategias_conten">
		<h1 style="text-align: center;">Estrategias</h1>
		@foreach ($debilidad as $debilidad)
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<div class="def-number-input number-input safari_only">
					<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
						<input class="quantity" min="1" max="{{$cantidad}}" name="pocision[]" value="" type="number">
					<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
		<input name="id_estrategia[]" value="{{$debilidad->nombre}}" style="display:none" type="text">
		<input type="text" class="form-control" id="inputObjetivo" value="{{$debilidad->nombre}}" placeholder="Estrategia" maxlength="200" aria-label="Objetivo" aria-describedby="basic-addon1">
		</div> 
		@endforeach

		@foreach ($fortaleza as $fortaleza)
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<div class="def-number-input number-input safari_only">
					<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
						<input class="quantity" min="1" max="{{$cantidad}}" name="pocision[]" value="" type="number">
					<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
		<input name="id_estrategia[]" value="{{$fortaleza->nombre}}" style="display:none" type="text">
		<input type="text" class="form-control" id="inputObjetivo" value="{{$fortaleza->nombre}}" placeholder="Estrategia" maxlength="200" aria-label="Objetivo" aria-describedby="basic-addon1">
		</div> 
		@endforeach

		@foreach ($oportunidad as $oportunidad)
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<div class="def-number-input number-input safari_only">
					<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
						<input class="quantity" min="1" max="{{$cantidad}}" name="pocision[]" value="" type="number">
					<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
		<input name="id_estrategia[]" value="{{$oportunidad->nombre}}" style="display:none" type="text">
		<input type="text" class="form-control" id="inputObjetivo" value="{{$oportunidad->nombre}}" placeholder="Estrategia" maxlength="200" aria-label="Objetivo" aria-describedby="basic-addon1">
		</div> 
		@endforeach

		
		@foreach ($amenaza as $amenaza)
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<div class="def-number-input number-input safari_only">
					<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
						<input class="quantity" min="1" max="{{$cantidad}}" name="pocision[]" value="" type="number">
					<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
				</div>
			</div>
		<input name="id_estrategia[]" value="{{$amenaza->nombre}}" style="display:none" type="text">
		<input type="text" class="form-control" id="inputObjetivo" value="{{$amenaza->nombre}}" placeholder="Estrategia" maxlength="200" aria-label="Objetivo" aria-describedby="basic-addon1">
		</div> 
		@endforeach
	</div>
	<div class="objetivos_conten">
		<h1 style="text-align: center;">Objetivos</h1>
		@foreach ($Objetivos as $Objetivos)
		<div class="campo_texto2">

			<div class="input-group mb-3">
				<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">{{$Objetivos->posiciones}}</span>
			</div>
				<input name="id_respustaverbos[]" value="{{$Objetivos->id_respustaverbos}}" style="display:none" type="text">
				<input type="text" class="form-control" id="inputObjetivo"  value="{{$Objetivos->Objetivos}}" maxlength="199" placeholder="Objetivo" aria-label="Objetivo" aria-describedby="basic-addon1">
			</div> 
		</div>
		@endforeach

	</div>
</section>
{{-- <a  href="{{ route('FormulacionResumen') }}"  onclick="guardar()"   style="color:white;"   class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a> --}}
<button   type="submit"  style="color:white;"   class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>

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

<label type="text" id="nombre"></label><br>                          
<!-- Modal -->
</div>
</form>

</div>


@yield('script')


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 

<script>    
	$(document).ready(function()
	{
		$("#exampleModalScrollable").modal("show");
	});
</script>





<script>
	function guardar(){


		if (document.getElementById('Para_paso1').value == 0) {

			document.getElementById("id").innerHTML = "error";

		}else{
			var miDato = document.getElementById('Para_paso1').value;
			localStorage.setItem('Para',miDato);
			localStorage.setItem('Progreso','10%');
		}
	};
</script>



<script>
	var Progreso = localStorage.getItem('Progreso')
	document.getElementById("id").style.width=Progreso;
	document.getElementById("id").innerHTML = Progreso;
</script>

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