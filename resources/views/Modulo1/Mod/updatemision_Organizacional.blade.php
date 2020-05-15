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
	<form method="post"  role="from" action="{{route('update/Mision1')}}" novalidate>
		@csrf

		@foreach ($pensamiento as $pensamiento)
		@if($pensamiento->id_Planeacion == $proyecto->id_Planeacion)
		<input style="display: none;"  type="text"  value="{{$pensamiento->Mision_Organizacional}}" id="Mision_Organizacional">
		<input style="display: none;"  type="text"  value="{{$pensamiento->id_Planeacion}}" id="id_Planeacion" name="id_Planeacion" >
		@endif
		@endforeach

		{{-- Campo de texto  --}}
		<section  id = "text">
			<div class="contenedor3" {{-- style="margin-top: -29% !important;" --}}>
				<textarea maxlength="1205" class="campo form-control is-invalid"  id="Mision" name="Mision_Organizacional" ></textarea>		   
			</div>
			<br>
		</section>
		<div  class="container" id="alert">
		</div>

		<fieldset id="paso1">
			<div class="form-group">
				<div>
					<p class="quienes"><b style="color: #0AB5A0">¿Quiénes somos? = identidad, legitimidad</b><br>
						Es decir, cuál es nuestra identidad.Por ejemplo:<br>

						<b style="color: #0AB5A0">Ejemplo: “somos una empresa colombiana”</b><br>
						<b style="color: #0AB5A0">Ejemplo: “somos una organización joven”</b></p>
					</div>
					<p class="formula2">Fórmula:<b style="color: #0AB5A0"> ¿Quiénes somos?</b> = identidad, legitimidad + <b style="color: #0AB5A0">¿Qué buscamos?</b> = Propósitos + <b style="color: #0AB5A0">¿Para quienes trabajamos?</b> = Clientes  + <b style="color: #0AB5A0">¿Por qué lo hacemos?</b> = Productos, Servicios, Valores, Principios, Motivaciones</p>
				</div>
				<a onclick="paso2()"   style="color:white;"   class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
			</fieldset>
			<fieldset id="paso2">
				<div class="form-group">
					<div>
						<p class="buscamos"><b style="color: #0AB5A0">¿Qué buscamos? = Propósitos</b><br>
							Cuál es nuestra tarea.<br>

							<b style="color: #0AB5A0">Ejemplo: “somos una empresa colombiana dedicada a realizar pruebas de software”</b><br>
							<b style="color: #0AB5A0">Ejemplo: “somos una organización joven que brinda asesoría comercial”</b></p>
						</div>
						<p class="formula2">Fórmula:<b style="color: #0AB5A0"> ¿Quiénes somos?</b> = identidad, legitimidad + <b style="color: #0AB5A0">¿Qué buscamos?</b> = Propósitos + <b style="color: #0AB5A0">¿Para quienes trabajamos?</b> = Clientes + <b style="color: #0AB5A0">¿Por qué lo hacemos?</b> = Productos, Servicios, Valores, Principios, Motivaciones</p>
					</div>
					<a onclick="paso3()" style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
					<a onclick="paso1()" style="color:white;"  class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</a>
				</fieldset>
				<fieldset id="paso3">
					<div class="form-group">
						<div>
							<p class="trabajamos"><b style="color: #0AB5A0">¿Para quienes trabajamos? = Clientes</b><br>
								Se refiere a quiénes son nuestros clientes<br>
								<b style="color: #0AB5A0">Ejemplo: “somos una empresa colombiana dedicada a realizar pruebas de software para organizaciones comerciales”</b><br>
								<b style="color: #0AB5A0">Ejemplo: “somos una organización joven que brinda asesoría comercial a personas que van iniciar un negocio”</b></p>
							</div>
							<p class="formula2">Fórmula:<b style="color: #0AB5A0"> ¿Quiénes somos?</b> = identidad, legitimidad + <b style="color: #0AB5A0">¿Qué buscamos?</b> = Propósitos + <b style="color: #0AB5A0">¿Para quienes trabajamos?</b> = Clientes + <b style="color: #0AB5A0">¿Por qué lo hacemos?</b> = Productos, Servicios, Valores, Principios, Motivaciones</p>
						</div>
						<a onclick="paso4()" style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
						<a onclick="paso2()" style="color:white;" class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</a>
					</fieldset>
					<fieldset id="paso4">
						<div class="form-group">
							<div>
								<p class="hacemos"><b style="color: #0AB5A0">¿Por qué lo hacemos? = Productos, Servicios, Valores, principios, motivaciones</b><br>
									Se refiere a nuestros valores, principios y motivaciones.Por ejemplo: <br>
									<b style="color: #0AB5A0">Ejemplo: “somos una empresa colombiana dedicada a realizar pruebas de software para organizaciones comerciales, buscamos la excelencia en nuestros productos”</b><br><b style="color: #0AB5A0">Ejemplo: “somos una organización joven que brinda asesoría comercial a personas que van iniciar un negocio, en el marco de la transparencia, la honestidad y la<br> búsqueda del desarrollo”</b></p>
								</div>
								<p class="formula2">Fórmula:<b style="color: #0AB5A0"> ¿Quiénes somos?</b> = identidad, legitimidad + <b style="color: #0AB5A0">¿Qué buscamos?</b> = Propósitos + <b style="color: #0AB5A0">¿Para quienes trabajamos?</b> = Clientes + <b style="color: #0AB5A0">¿Por qué lo hacemos?</b> = Productos, Servicios, Valores, Principios, Motivaciones</p>
							</div>
							<button type="submit" onclick="guardar()" style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
						<a onclick="paso3()" style="color:white;" class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</a>
						</fieldset>
					</form>
					</div>



					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

					<script src="{{asset('js/Vmodulo1/mision.js')}}"></script>




					<script>
						var propuesat = $( "#Mision_Organizacional" ).val();
						document.getElementById('Mision').innerHTML = propuesat;

						var id_Planeacion = $('#id_Planeacion').val();
						document.getElementById('id_Planeacion1').innerHTML = id_Planeacion;

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









					@endsection