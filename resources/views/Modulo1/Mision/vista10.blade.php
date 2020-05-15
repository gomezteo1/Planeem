@extends('layouts.nav')

@section('content')
<header>
	<div>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>
</header>
<section  id = "text">
	<div class="contenedor3 was-validated">
		<textarea maxlength="1205" id="Mision"  name="Quiénes" class="campo form-control is-invalid"  required ></textarea>
	</div>
	<br>

</section>

<div  class="container" id="alert">
</div>
<div id="regiration_form">
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
			<button type="submit"   onclick="paso2()"   style="color:white;"   class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
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
				<button onclick="paso3()" style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
				<button onclick="paso1()" style="color:white;"  class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</button>
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
					<button onclick="paso4()" style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
					<button onclick="paso2()" style="color:white;" class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</button>
				</fieldset>
				<fieldset id="paso4">
					<div class="form-group">
						<div>
							<p class="hacemos"><b style="color: #0AB5A0">¿Por qué lo hacemos? = Productos, Servicios, Valores, principios, motivaciones</b><br>
								Se refiere a nuestros valores, principios y motivaciones.Por ejemplo: <br>
								<b style="color: #0AB5A0">Ejemplo: “somos una empresa colombiana dedicada a realizar pruebas de software para organizaciones comerciales, buscamos la excelencia en nuestros productos”</b>
								<b style="color: #0AB5A0">Ejemplo: “somos una organización joven que brinda asesoría comercial a personas que van iniciar un negocio, en el marco de la transparencia, la honestidad y la búsqueda del desarrollo”</b></p>
							</div>
							<p class="formula2">Fórmula:<b style="color: #0AB5A0"> ¿Quiénes somos?</b> = identidad, legitimidad + <b style="color: #0AB5A0">¿Qué buscamos?</b> = Propósitos + <b style="color: #0AB5A0">¿Para quienes trabajamos?</b> = Clientes + <b style="color: #0AB5A0">¿Por qué lo hacemos?</b> = Productos, Servicios, Valores, Principios, Motivaciones</p>
						</div>
						<a href="{{ route('Mision/list') }}" onclick="guardar()"  style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
						<button onclick="paso3()" style="color:white;" class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</button>
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
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

				<script src="{{asset('js/Vmodulo1/mision.js')}}"></script>

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

				<script>
					let progreso = localStorage.getItem('progressbar');
					let progreso2 = localStorage.getItem('progressbar2')
					document.getElementById('progress1').style.width = progreso;
					document.getElementById('progress2').style.width = progreso2;
					document.getElementById('icono').style.left= '28%';

				</script>







				@endsection