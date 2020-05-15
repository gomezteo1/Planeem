@extends('layouts.nav')

@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
</header>
{{-- <form action="/Modulo1/pensamiento"  method="POST"  role="from" > --}}





<div class="contenedor9">
	<div class="resumen">
		<div>
			<h3 style="text-align: center;" id="Propuesta">Propuesta de Valor</h3>
			<p id="Propuesta1">.</p>
			<h3 style="text-align: center;" id="Mision">Misión Organizacional</h3>
			<p id="Mision1"></p>
			<h3 style="text-align: center;" id="Vision">Visión Organizacional</h3>
			<p id="Vision1"></p>
			<h3 style="text-align: center;" id="Mega">Mega Empresarial</h3>
			<p id="MEGA1" ></p>

			<h3 style="text-align: center;" id="Valores">Valores Corporativos</h3>
            <div id="text4"></div>


		</div>
	</div>
</div>




<a data-toggle="modal" data-target="#modalRelatedContent" style="color:white;" class="siguienteResumen btn btn-planeem waves-effect waves-light">Siguiente</a>
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
<!--Modal: modalRelatedContent-->
<div class="modal fade right" id="modalRelatedContent" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
<div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
  <div class="modal-content" id="modalAvance">
    <div class="modal-header" style="background: #0AB5A0  !important;">
      <p class="heading">Alerta!</p>

      <span class="icon-cancel-circle" style="color:white; font-size: 32px; cursor: pointer; margin-top: 4px;
      margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-5">
          <img src="../img/icono2.png" style="width: 65%;">
        </div>

        <div class="col-7" style="margin: 0 auto;">
          <h4>¿Desea continuar con el Módulo 2?</h4>
          <br>
		  <a href="{{ route('diagnosticoEstra') }}"  class="buttonModal btn btn-planeem waves-effect waves-light">Si</a>
		  <a id="no" class="buttonModal btn btn-planeem waves-effect waves-light">No</a>
		   <form method="post"  		role="from" action="{{route('index/plam')}}">
				@csrf
				<input type="text" id="nombre_proyecto" name="nombre_proyecto">
				<button id="btn" type="submit"></button>
		  </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<style>
  #modalAvance{
    border-radius: 18px !important;
    width: 126%;
  }
</style>


</form>


@yield('script')




<script>
	function vista2(){
			document.getElementById("vista2").click();
		 }
</script>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


<script>
		$('#no').click(function(){
			document.getElementById("btn").click();
		});


	</script>
<script>
	var nombre_proyecto = localStorage.getItem('nombre_proyecto');
	$('#nombre_proyecto').val(nombre_proyecto);

		$(document).ready(function () {
			$('.items li:nth-child(5)').addClass("acti");
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
		// Muestra los Muestra los valores
      var Propuesta = localStorage.getItem('propuesta');
      var hola = document.getElementById('Propuesta1').innerHTML =Propuesta;


           if( Propuesta == null){
			document.getElementById('Propuesta').style.display = 'none';
		   }





	  var Mision = localStorage.getItem('Mision1');
	  var hola = document.getElementById('Mision1').innerHTML =Mision;

	  if( Mision == null){
			document.getElementById('Mision').style.display = 'none';
		}





	  var mi_empresa = localStorage.getItem('Vision');
      var hola = document.getElementById('Vision1').innerHTML =mi_empresa;

	  if( mi_empresa == null){
			document.getElementById('Vision').style.display = 'none';
		   }

	  var Para = localStorage.getItem('Mega1');
      var hola = document.getElementById('MEGA1').innerHTML =Para;


	  if( Para == null){
			document.getElementById('Mega').style.display = 'none';
		   }



	  </script>





<script src="{{asset('js/items_plus/option_plus.js')}}" > </script>


















@endsection
