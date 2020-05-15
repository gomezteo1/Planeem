@extends('layouts.navmod')

@section('content')
<header>
	<div>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>
</header>

<div id="regiration_form">
	<form method="post"  role="from" action="{{route('update/vision1')}}" novalidate>

		@foreach ($pensamiento as $pensamiento)
		@if ($pensamiento->id_Planeacion == $proyecto->id_Planeacion)
		<input style="display: none;"  type="text"  value="{{$pensamiento->Vision_Organizacional}}" id="Vision_Organizacional">
		<input style="display: none;"  type="text"  value="{{$pensamiento->id_Planeacion}}" id="id_Planeacion" name="id_Planeacion">
		@endif
		@endforeach

		<div class="contenedor3">
			@csrf
			{{-- Campo de texto  --}}
			<textarea maxlength="1205" class="campo form-control is-invalid"  id="Vision" name="Vision_Organizacional" ></textarea>
		</div>
		<div  class="container" id="alert">

		</div>
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
					</form>
				</div>


				<script src="{{asset('js/Vmodulo1/Vision.js')}}"></script>

				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

				<script>
					var propuesat = $( "#Vision_Organizacional" ).val();
					document.getElementById('Vision').innerHTML = propuesat;

					var id_Planeacion = $('#id_Planeacion').val();
					document.getElementById('id_Planeacion1').innerHTML = id_Planeacion;

				</script>

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
					});
				</script>





				@endsection