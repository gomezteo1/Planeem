@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')

	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection

	<div class="contenedor4">
		<h1 style="text-align: center; font-weight: bold; padding: 12px;">Análisis DOFA</h1>
		<p style="padding: 10px;line-height: 23px;margin-left: 194px;width: 70%;font-size: 18px;text-align: justify;">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum
		</p>
	</div>

	<a onclick="btn12()" style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
	<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content10">{{-- se coloco estilos de este modal en estilos css --}}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body">
					<ol style="line-height: 17px; margin-top: 1%;">
						<b style="color: black; font-weight: bold;">La matriz EFE se desarrolla en cinco pasos:</b>
						<br><br>
						Pasos para realizar la evaluación de La matriz EFE<br>
						1: se debe hacer una lista factores identicados que incluyan Amenazas y oportunidades de la empresa (deben ser
						entre 10 y 20)<br>
						2: Asignar un peso a cada variable, que va desde 0.0 a 1.0
						0.0 Oportunidad o Amenaza no es muy importante
						1.0 Oportunidad o Amenaza es muy importante<br>

						3: A cada factor externo clave se le asigna una calicación de 1 a 4 puntos para indicar que tan ecaz responden las es-
						trategias actuales de la empresa a este factor donde:<br><br>

						Clasicación<br>
						Condición<br>
						4 -La respuesta es superior<br>
						3 -La respuesta está por encima del promedio<br>
						2 -La respuesta es promedio<br>
						1 -La respuesta es deciente<br>
						Por último se suman las puntuaciones ponderadas para cada variable. Con el n de determinar la puntuación
						ponderada total para la empresa
					</ol>
				</div>
			</div>
		</div>
	</div>
	
  <form method="POST" style="display:none" id="form" action="{{route('analisisDOFA')}}" >
	@csrf
		<input type="text" id="id_planecion" name="id_planecion">	
		<button  type="submit" id="btn12">		
</form>


</section>
@yield('script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>

  $(document).ready(function () {
   $('.items li:nth-child(13)').addClass("acti");
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
	var id = localStorage.getItem('id')
	$('#id_planecion').val(id);
	

	function btn12(){
		document.getElementById('btn12').click();
	}

</script>
@endsection
