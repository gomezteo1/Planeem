@extends('layouts.nav')
	
@section('content')
	<header>

	</header>
	
	<section  id = "text">
		<div class="contenedor3">
				<textarea maxlength="1205" id="Mision"  name="Quiénes" class="campo"  required ></textarea>
		</div>
	<br>
		
		<br>
		<div>
			<p class="formula">Fórmula:<b style="color: #0AB5A0"> ¿Quiénes somos?</b> = identidad, legitimidad + <b style="color: #0AB5A0">¿Qué buscamos?</b> = Propósitos + <b style="color: #0AB5A0">¿Para quienes trabajamos?</b> = Clientes<br>
				
				+ <b style="color: #0AB5A0">¿Por qué lo hacemos?</b> = Productos, Servicios, Valores, Principios, Motivaciones</p>
		</div>

		<a href="{{ route('Mision/list') }} " onclick="guardar()" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>

	 </section>



<script>

</script>
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 
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
	function guardar(){
		let mision = document.getElementById('Mision').value;
	
		if(mision == ""){
	 
		}else{
			try{
				localStorage.setItem('Mision1',mision);
			}catch(e){
				 console.log(e);
			}
		}
	}
	</script>

<script>
    // Muestra los datos del  localStorage
		var Mision6 = localStorage.getItem('Mision1');
		var hola = document.getElementById('Mision').innerHTML =Mision6;
  </script>


@endsection