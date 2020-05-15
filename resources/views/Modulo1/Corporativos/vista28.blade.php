@extends('layouts.nav')

@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>

	@endsection
</header>
<div class="contenedor9">

	<div   class="editavalor">
<h3 style="color: black; text-align: center;">VALORES CORPORATIVOS</h3>





	<form method="post"  role="from" action="{{route('Corporativos')}}">
     @csrf

        <div id="datos"></div>

        <div style="display:none" id="text"></div>





			<input type="text" style="display:none"  ass="form-control" value="{{$proyect['id_Planeacion']}}" id="id_Planeacion" name="id_Planeacion" aria-describedby="emailHelp" placeholder="Enter email">


			<section id="caja3">
				<h3 style="text-align: center; color: #0AB5A0;">Edita tu valor</h3>
				<h4 style="text-align: center;">Título</h4>
				<br>
				<textarea maxlength="510" class="campo"  id="mi_empresa" name=""></textarea>
				<br><br>
				<a  href="#" style="color:white;" class="aceptarvalor btn btn-planeem waves-effect waves-light">Aceptar</a>
			</section>
			<!-- Modal de seguir adelante -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content" id="modalAvance">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"></h5>
							<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
							margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
						</div>
						<div class="modal-body" style="text-align: center;">
							<h1>A continuación va ver su resumen</h1>
						</div>
						<div class="modal-footer">
							<a class="buttonModal btn btn-planeem waves-effect waves-light" data-dismiss="modal">Cancelar</a>
							<button style="color:white;" type="submit" class="buttonModal btn btn-planeem waves-effect waves-light">Siguiente</button>
							{{-- <button type="button" class="btn btn-primary">Continuar</button> --}}
						</div>
					</div>
				</div>
			</div>






	</div>

</div>

<br>
<br>


<a data-toggle="modal" data-target="#exampleModal"  style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light atras">Siguiente</a>

<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-he@ader">
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

<style>
	#modalAvance{
		border-radius: 18px !important;
		/*width: 126%;*/
		border: 2px solid #0AB5A0;
	}
</style>
</form>


	@yield('script')




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="{{asset('js/items_plus/option.js')}}" > </script>


		<script>
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
	var valor1 = localStorage.getItem('valor');
	var valor2 = localStorage.getItem('valor2');
	var valor3 = localStorage.getItem('valor3');
	var valor4 = localStorage.getItem('valor4');
	var valor5 = localStorage.getItem('valor5');
	// descripciones
	var Descripcion1 = localStorage.getItem('Descripcion1');
	var Descripcion2 = localStorage.getItem('Descripcion2');
	var Descripcion3 = localStorage.getItem('Descripcion3');
	var Descripcion4 = localStorage.getItem('Descripcion4');
	var Descripcion5 = localStorage.getItem('Descripcion5');
	var total;
	var arry = [valor1,valor2,valor3,valor4,valor5];
	var DescripcionArry = [Descripcion1,Descripcion2,Descripcion3,Descripcion4,Descripcion5]
	// arryList para los valores
	for(var i = 0; i < arry.length ; i++ ){

			if(arry[0] == null){
					document.getElementById('valor').style.display = 'none';
					document.getElementById('Descripcion1').style.display = 'none';
			}else  {
					document.getElementById("valor").innerHTML = arry[0];
					document.getElementById("Descripcion1").innerHTML = DescripcionArry[0];
			}

			if(arry[1] == null){
					document.getElementById('valor2').style.display = 'none';
					document.getElementById('Descripcion2').style.display = 'none';
			}else{
					document.getElementById('valor2').innerHTML = arry[1];
					document.getElementById("Descripcion2").innerHTML = DescripcionArry[1];
			}
			if(arry[2] == null){
					document.getElementById('valor3').style.display = 'none';
					document.getElementById('Descripcion3').style.display = 'none';
			}else{
				document.getElementById('valor3').innerHTML = arry[2];
				document.getElementById("Descripcion3").innerHTML = DescripcionArry[2];
			}
			if(arry[3]  == null){
				document.getElementById('valor4').style.display = 'none';
				document.getElementById('Descripcion4').style.display = 'none';
			}else{
				document.getElementById('valor4').innerHTML = arry[3];
				document.getElementById("Descripcion4").innerHTML = DescripcionArry[3];
			}
			if(arry[4]  == null){
					document.getElementById('valor1.2','Descripcion5').style.display = 'none';

			}else{
					document.getElementById('valor1.2').innerHTML = arry[4];
					document.getElementById("Descripcion5").innerHTML = DescripcionArry[4];
			}
	}
	</script>




			<script>
				var nombre_proyecto=localStorage.getItem('nombre_proyecto');
				document.getElementById('nombre_proyecto').innerHTML = nombre_proyecto;
			</script>

@endsection
