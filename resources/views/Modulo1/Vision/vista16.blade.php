@extends('layouts.nav')

@section('content')
<header>
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
</header>
<div class="contenedor3 was-validated">
	{{-- Campo de texto  --}}
	<textarea maxlength="1205" class="campo form-control is-invalid" required id="Vision" name="Que_hara_mi_empresa" ></textarea>
</div>

<div  class="container" id="alert">
	
</div>
<div id="regiration_form">
	<fieldset id="paso1">
		<div>
			<div>
				<p class="enunciadoHara"><b style="color: #0AB5A0">¿Qué hará mi empresa en cinco años?</b><br>
					¿Con qué lo vamos a hacer?<br>
					¿Desde qué posición lo vamos a hacer?<br>
					¿Seremos los líderes? <br>
					¿Habremos ganado participación?<br>
					<b style="color: #0AB5A0">Ejemplo: “Mejorar la salud y el bienestar a través de productos de salud y de higiene”</b></p>
				</div>
				<br>
				<br>
				<p class="formulaMision">Fórmula: <b style="color: #0AB5A0">¿Qué hará mi empresa en cinco años?</b> + <b style="color: #0AB5A0">¿Qué hará mi empresa por el entorno en cinco años?</b> +
					<b style="color: #0AB5A0">¿Qué hará mi empresa por la sociedad en cinco años?</b></p>
				</div>
				<button type="submit" onclick="paso2()" style="color:white;"   class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
			</fieldset>
			<fieldset id="paso2">
				<div>
					<div>
						<p class="hara"><b style="color: #0AB5A0">¿Qué hará mi empresa por el entorno en cinco años?</b><br>
							¿Qué acciones implementaremos?<br>
							<b style="color: #0AB5A0">Ejemplo:”Reduciendo el impacto ambiental usando empaques reciclables”</b></p>
						</div>
						<br>
						<br>
						<p class="formulaMision">Fórmula: <b style="color: #0AB5A0">¿Qué hará mi empresa en cinco años?</b> + <b style="color: #0AB5A0">¿Qué hará mi empresa por el entorno en cinco años?</b> +
							<b style="color: #0AB5A0">¿Qué hará mi empresa por la sociedad en cinco años?</b></p>
						</div>
						<button onclick="paso3()" style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
						<button onclick="paso1()" style="color:white;"  class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</button>
					</fieldset>
					<fieldset id="paso3">
						<div>
							<div>
								<p class="hara2"><b style="color: #0AB5A0">¿Qué hará mi empresa por la sociedad en cinco años?</b><br>
									¿Será más incluyente?<br>
									¿Tendrá un gran ambiente de trabajo?<br>
									¿Será un gran lugar para trabajar?<br>
									<b style="color: #0AB5A0">Ejemplo:”Mejorando la vida de las personas ofreciendo trabajo digno”</b>
								</p>
							</div>
							<p class="formula">Fórmula: <b style="color: #0AB5A0">¿Qué hará mi empresa en cinco años?</b> + <b style="color: #0AB5A0">¿Qué hará mi empresa por el entorno en cinco años?</b> + <b style="color: #0AB5A0">¿Qué hará mi empresa por la sociedad en cinco años?</b>
							</p>
						</div>
						<a href="{{ route('tist') }}" onclick="guardar()" style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
						<button onclick="paso2()" style="color:white;" class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</button>
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
				<script src="{{asset('js/Vmodulo1/Vision.js')}}"></script>

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
				<script>
					let progreso = localStorage.getItem('progressbar');
					let progreso2 = localStorage.getItem('progressbar2')
					document.getElementById('progress1').style.width = progreso;
					document.getElementById('progress2').style.width = progreso2;
					document.getElementById('icono').style.left= '28%';

				</script>




				@endsection