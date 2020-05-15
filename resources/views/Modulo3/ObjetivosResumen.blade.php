@extends('layouts.nav3')

@section('content')
<header>
@include('modal/modal3')
</header>

@csrf

<div class="ObjetivosResumen">
	<div class="accordion" id="accordionExample">
		<div class="card">
			<div class="card-header headerObjetivos" id="headingOne">
				<h1 class="mb-0" style="text-align: center;">
					Objetivos a largo plazo
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="float: right;">
						<span class="icon-plus "></span>
					</button>
				</h1>
			</div>

			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				<div class="card-body" style="background: white;border: #0AB5A0 1px solid;">
					<div class="btn-group" id="btn_planeem">
						<a data-toggle="modal" data-target="#exampleModal4" data-whatever="@fat">1</a>
						<a data-toggle="modal" data-target="#exampleModal4">2</a>
						<a>3</a>
						<a>4</a>
						<a>5</a>
						<a>6</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header headerObjetivos" id="headingTwo">
				<h1 class="mb-0" style="text-align: center;">
					Objetivos a mediano plazo
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="float: right;">
						<span class="icon-plus"></span>
					</button>
				</h1>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				<div class="card-body" style="background: white;border: #0AB5A0 1px solid;">
					<div class="btn-group" id="btn_planeem">
						<a data-toggle="modal" data-target="#exampleModal4" data-whatever="@fat">1</a>
						<a data-toggle="modal" data-target="#exampleModal4">2</a>
						<a>3</a>
						<a>4</a>
						<a>5</a>
						<a>6</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header headerObjetivos" id="headingThree">
				<h1 class="mb-0" style="text-align: center;">
					Objetivos a corto plazo
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="float: right;">
						<span class="icon-plus "></span>
					</button>
				</h1>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				<div class="card-body" style="background: white;border: #0AB5A0 1px solid;">
					<div class="btn-group" id="btn_planeem">
						<a data-toggle="modal" data-target="#exampleModal4" data-whatever="@fat">1</a>
						<a data-toggle="modal" data-target="#exampleModal4">2</a>
						<a>3</a>
						<a>4</a>
						<a>5</a>
						<a>6</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
	.campo_estrategia2 {
    border: 2px solid #0AB5A0;
    border-radius: 10px;
    outline: none;
    width: 105%;
    height: 220px;
    padding: 2px 8px;
}
</style>
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