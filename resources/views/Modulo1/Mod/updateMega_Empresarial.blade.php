@extends('layouts.navmod')

@section('content')
<header>
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
</header>
<div class="form-group">
	<form  method="post"  role="from" action="{{route('update/mega1')}}" novalidate >

		@foreach ($pensamiento as $pensamiento)
		@if($pensamiento->id_Planeacion == $proyecto->id_Planeacion)
		<input style="display: none;"  type="text"  value="{{$pensamiento->Mega_Empresarial}}" id="Mega_Empresarial">
		<input style="display: none;"  type="text"  value="{{$pensamiento->id_Planeacion}}" id="id_Planeacion" name="id_Planeacion">
		@endif
		@endforeach

		@csrf
		<div class="contenedor3">

			<textarea maxlength="1205"  id="Mega" class="campo form-control is-invalid" name="Mega_Empresarial" required></textarea>

		</div>

		<br>
		<div  class="container" id="alert">

		</div>
		<div id="regiration_form">
			<fieldset id="paso1">
				<div>
					<div>
						<p class="desafiante"><b style="color: #0AB5A0">Objetivo desafiante</b><br>
							Debe de ser ambicioso, claro y contundente, pero debe de tener un punto de llegada claro y que pueda
							ser medible
							<br>
							<b style="color: #0AB5A0">Ejemplo: “Tener un millón de clientes”</b><br></p>

						</div>
						<p class="formula3"> Fórmula(A):<b style="color: #0AB5A0"> Objetivo desafiante</b> + <b style="color: #0AB5A0">Definición de nicho</b> + <b style="color: #0AB5A0">Horizonte de tiempo</b>
						</p>

					</div>
					<a onclick="paso2()"   style="color:white;"   class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
				</fieldset>
				<fieldset id="paso2">
					<div>

						<div>
							<p class="desafiante"><b style="color: #0AB5A0">Definición de nicho</b><br>

								Se refiere a una porción de un segmento de mercado en la que los individuos poseen características y necesidades<br>

								homogéneas, y estas últimas no están del todo cubiertas por la oferta general del mercado y requiere ser
								satisfecha<br>
								<b style="color: #0AB5A0">Ejemplo: “Tener un millón de clientes on-line”</b><br></p>

							</div>
							<p class="formulaDesafiante"> Fórmula(A):<b style="color: #0AB5A0"> Objetivo desafiante</b> + <b style="color: #0AB5A0">Definición de nicho</b> + <b style="color: #0AB5A0">Horizonte de tiempo</b>
							</p>
						</div>
						<a onclick="paso3()"  style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
						<a onclick="paso1()" style="color:white;"  class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</a>
					</fieldset>
					<fieldset id="paso3">
						<div>

							<div>
								<p class="desafiante"><b style="color: #0AB5A0">Definición de nicho</b><br>

									Se refiere a una porción de un segmento de mercado en la que los individuos poseen características y necesidades<br>

									homogéneas, y estas últimas no están del todo cubiertas por la oferta general del mercado y requiere ser
									satisfecha<br>
									<b style="color: #0AB5A0">Ejemplo: “Tener un millón de clientes on-line”</b><br></p>

								</div>
								<p class="formulaDesafiante"> Fórmula(A):<b style="color: #0AB5A0"> Objetivo desafiante</b> + <b style="color: #0AB5A0">Definición de nicho</b> + <b style="color: #0AB5A0">Horizonte de tiempo</b>
								</p>
							</div>
							<button type="submit" style="color:white;" onclick="guardar()" class=" next siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
							<a onclick="paso2()" style="color:white;" class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</a>
						</fieldset>
					</div>
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
									<p>Una de las mejores maneras de comenzar a redactar la visión es usar frases concisas y en infinitivo que vayan
										de lo particular a lo global y de lo concreto a lo emotivo.<br>
										La imagen debe reflejar una aceptación de las características de la empresa, los socios y el equipo. Además.
										depende completamente de los objetivos estratégicos.
									</p>
								</div>
							</div>
						</div>
					</div>
					<textarea maxlength="1205"  style="display: none;" id="id_p" class="campo" name="nombre_proyecto" required></textarea>
				</form>
			</div>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

			<script>
				var propuesat = $( "#Mega_Empresarial" ).val();
				document.getElementById('Mega').innerHTML = propuesat;

				var id_Planeacion = $('#id_Planeacion').val();
				document.getElementById('id_Planeacion1').innerHTML = id_Planeacion;

			</script>

			<script>

				$(document).ready(function () {
					$('.items li:nth-child(4)').addClass("acti");
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

			<script src="{{asset('js/Vmodulo1/Mega.js')}}"></script>



			<script>

				document.getElementById('id_p').innerHTML = localStorage.getItem('nombre_proyecto');
			</script>






			<script>
				let progreso = localStorage.getItem('progressbar');
				let progreso2 = localStorage.getItem('progressbar2')
				document.getElementById('progress1').style.width = progreso;
				document.getElementById('progress2').style.width = progreso2;
				document.getElementById('icono').style.left= '28%';

			</script>

			@endsection
