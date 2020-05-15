@extends('layouts.nav')
	
@section('content')
	<header>
		

	</header>




	<div id="">
			<form method="post"  role="from" action="{{route('vista2')}}" >
			  @csrf
			  <input type="text" id="id_p" name="nombre_proyecto"   >
			  <button type="submit" id="vista2" ></button>
			  </form>
		</div>



		<div class="contenedor3">
			{{-- Campo de texto  --}}
			<textarea maxlength="1205" class="campo "  id="Vision" name="Que_hara_mi_empresa" ></textarea>
	</div>
	<br>
	<br>
	<div>
	<p class="formula3">Fórmula: <b style="color: #0AB5A0">¿Qué hará mi empresa en cinco años?</b> + <b style="color: #0AB5A0">¿Qué hará mi empresa por el entorno en cinco años?</b><br> +
		<b style="color: #0AB5A0">¿Qué hará mi empresa por la sociedad en cinco años?</b></p>
	</div>


	<a href="{{ route('tist') }} " onclick="guardar()" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>

	
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
	// Muestra los datos del  localStorage
	var Vision = localStorage.getItem('Vision');
	var hola = document.getElementById('Vision').innerHTML =Vision;
  </script>




 <script>
			function guardar(){
			let Vision = document.getElementById('Vision').value;
			if(Vision == ""){

			}else{
				try{
					localStorage.setItem('Vision',Vision);
				}catch(e){
					console.log(e);
				}
			}
		}
 </script>




  
@endsection