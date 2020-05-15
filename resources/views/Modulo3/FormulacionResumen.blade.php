@extends('layouts.nav3')

@section('content')
<header>
	@yield('js')


	@yield('progres')
</header>
<section class="contenedorAsociar">
	<h1 style="text-align: center;">Objetivos con estrategias seleccionadas</h1>
	<div class="objetivos_conten1">


		@foreach ($formulacion as $formulacion)
					<div class="resumenObjetivos">

						<input type="text" class="objetivoTexto" name="" 
						
						value="{{$formulacion->Objetivos}}"  
						
						parrafo="{{$formulacion->id_estrategia}}">
						
					</div>
		@endforeach
		{{-- <div class="resumenObjetivos">
			<input type="text" class="objetivoTexto" name="" parrafo="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo">
		</div>
		<div class="resumenObjetivos">
			<input type="text" class="objetivoTexto" name="" parrafo="lo logre">
		</div> --}}
	</div>
</div>
<div class="hover2">
	<h2 style="text-align: center; margin-top: 30%; ">Tus estrategias</h2>
	
</div>

</section>
<form>
	<input type="text" 																																																																																																																																																																																																																																																																																																																																								>
	<a  href="{{ route('modulo2-4') }}"  onclick="guardar()"   style="color:white;"   class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>

</form>
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

<label type="text" id="nombre"></label><br>                          
<!-- Modal -->
</div>
</form>

</div>


@yield('script')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 

<script>    
	$(document).ready(function()
	{
		$("#exampleModalScrollable").modal("show");
	});
</script>





<script>
	function guardar(){


		if (document.getElementById('Para_paso1').value == 0) {

			document.getElementById("id").innerHTML = "error";

		}else{
			var miDato = document.getElementById('Para_paso1').value;
			localStorage.setItem('Para',miDato);
			localStorage.setItem('Progreso','10%');
		}
	};
</script>



<script>
	var Progreso = localStorage.getItem('Progreso')
	document.getElementById("id").style.width=Progreso;
	document.getElementById("id").innerHTML = Progreso;
</script>

<script>

	$(document).ready(function () {
		$('.items3 li:nth-child(2)').addClass("acti3");
		$('.items3 li').click(function () {
			$('.items3 li').removeClass("acti3");
			$(this).addClass("acti3");


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