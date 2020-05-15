@extends('layouts.nav4')

@section('content')
<header>
	@yield('js')

	@section('f')
	<a href="{{ route('vista2') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection

	@yield('progres')
@include('modal/modal_modulo4')
</header>
<div>
	<div class="lista">
		<h4 style="line-height: 41px;">Objetivos</h4>
	</div>

	<div id="campo_texto"  class="campo_texto4">
		<h3 style="text-align: center;">Ejemplo Formulario</h3>
		<main class="indicadores2">
			<div>
				<input type="text" name=""  placeholder="Objetivo" class="inputIndicador">
			</div>
		</main>
		<span class="icon-arrow-down2 icono-down" ></span>
		<main class="indicadores">
			<div>
				<input type="text" name="" placeholder="Nombre del indicador" class="inputIndicador">
			</div>
		</main>
		<span class="icon-arrow-down2 icono-down" ></span>
		<main class="indicadores">
			<div>
				<input type="text" name="" placeholder="Que quiere medir" class="inputIndicador">
			</div>
		</main>
		<hr class="division">
		<main class="indicadores">
			<div>
				<input type="text" name="" placeholder="Sobre que lo quiere medir" class="inputIndicador">
			</div>
		</main>
	</div>
	<section id="factores5">
		<div id="factor">
			<form class="opciones2">
				<div class="formulario2">
					<div class="respuestas2">
						<div class="wrap" style=" ">
							<div class="radio">
								<div class="btn-group2" id="btn_planeem2">
									<a data-toggle="modal" data-target="#	">1</a>
									<a data-toggle="modal" data-target="#exampleModal4">2</a>
									<a>3</a>
									<a>4</a>
									<a>5</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
	<div class="modal fade" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-modificado2">
				<div class="modal-body">
					<div class="añadircapacidad">
						<textarea maxlength="504"  id="Añadrir" style="color:black;" class="campo4"></textarea>
					</div>
					<div><a style="color:white;" onclick="agregarv()"  data-dismiss="modal" aria-label="Close" class="aceptarcapacidad btn btn-planeem waves-effect waves-light">Añadir</a>
					</div>
					<div id="cancelar">
						<a value="cierra_AñadirCapa" class="cancelarcapacidad btn btn-planeem waves-effect waves-light" data-dismiss="modal" aria-label="Close" style=" outline: none !important;">Cancelar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<style>
		.modal-modificado2{
			width: 180% !important;
			height: 240px !important;
			border: #0AB5A0 2px solid !important;
			border-radius: 12px !important;
		}
		.modal-modificado3 {
			border: 2px solid #0AB5A0 !important;
			border-radius: 12px !important;
			width: 180% !important;
			height: 693px !important;
			margin-top: 0% !important;
			margin-left: -33% !important;
			padding: 28px;
		}
	</style>
	<div class="col-md-auto mx-auto mt-auto">
		<br>
		<a href="{{ route('vista2-1')}}" style="color:white;"   class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
		<a href="{{ route('tercero1-2') }}" style="color:white;" class="retroceder btn btn-planeem waves-effect waves-light">Anterior</a>
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
</div>

</div>
</form>



@yield('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
	$(document).ready(function()
	{
		$("#exampleModalScrollable").modal("show");
	});
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
