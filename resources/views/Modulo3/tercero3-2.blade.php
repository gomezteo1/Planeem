@extends('layouts.nav3')

@section('content')
<header>
	<div>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>
@include('modal/modal3')
</header>

@csrf

<div id="regiration_form" novalidate action="action.php"  method="post">
	<fieldset>
		<form class="form-row justify-content-center">
			<h4 class="text-center">OBJETIVOS A LARGO PLAZO</h4>
			<div class="formulario5">
				<div class="form-group col-md-12">
					<label for="formGroupExampleInput" style="text-align: center;margin-left: 47%;font-size: 20px;">Objetivo</label>
					<textarea class="campo_estrategia2"></textarea>
				</div>
				<div>
					<label for="formGroupExampleInput2" style="text-align: center;margin-left: 47%;font-size: 20px;">Estrategia</label>
				</div>
				<div class="btn-group" id="btn_planeem">
					<a data-toggle="modal" data-target="#exampleModal1" data-whatever="@fat">1</a>
					<a data-toggle="modal" data-target="#exampleModal1">2</a>
					<a>3</a>
					<a>4</a>
					<a>5</a>
					<a>6</a>
				</div>
			</div>
		</form>
		<button type="button" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
	</fieldset>
	<fieldset>
		<form class="form-row justify-content-center">
			<h4 class="text-center">OBJETIVOS A MEDIANO PLAZO</h4>
			<div class="formulario5">
				<div class="form-group col-md-12">
					<label for="formGroupExampleInput" style="text-align: center;margin-left: 47%;font-size: 20px;">Objetivo</label>
					<textarea class="campo_estrategia2"></textarea>
				</div>
				<div>
					<label for="formGroupExampleInput2" style="text-align: center;margin-left: 47%;font-size: 20px;">Estrategia</label>
				</div>
				<div class="btn-group" id="btn_planeem">
					<a data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat">1</a>
					<a data-toggle="modal" data-target="#exampleModal3">2</a>
					<a>3</a>
					<a>4</a>
					<a>5</a>
					<a>6</a>
				</div>
			</div>
		</form>
		<button type="button" class="AhoraEstra previous btn btn-default">Anterior</button>
		<button type="button" class="next btn AhoraEstra3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
	</fieldset>
	<fieldset>
		<form class="form-row justify-content-center">
			<h4 class="text-center">OBJETIVOS A CORTO PLAZO</h4>
			<div class="formulario5">
				<div class="form-group col-md-12">
					<label for="formGroupExampleInput" style="text-align: center;margin-left: 47%;font-size: 20px;">Objetivo</label>
					<textarea class="campo_estrategia2"></textarea>
				</div>
				<div>
					<label for="formGroupExampleInput2" style="text-align: center;margin-left: 47%;font-size: 20px;">Estrategia</label>
				</div>
				<div class="btn-group" id="btn_planeem">
					<a data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat">1</a>
					<a data-toggle="modal" data-target="#exampleModal2">2</a>
					<a>3</a>
					<a>4</a>
					<a>5</a>
					<a>6</a>
				</div>
			</div>
		</form>
		<button type="button" class="AhoraEstra previous btn btn-default">Anterior</button>
		<a href="{{ route('ObjetivosResumen') }}" class="next btn AhoraEstra3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</a>
	</fieldset>
</div>
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


@yield('script')

<style >
	body{

		background-image: url("../img/fondoLogo.jpg");
	}
	.collapsing{
		margin-top: -20px;
		z-index: -1;

	}

</style>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
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