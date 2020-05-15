@extends('layouts.nav')

@section('content')
<header>
</header>
<div class="form-group">
	<div class="Mision">
		<h1 style="text-align: center; font-weight: bold; padding: 12px;">MISIÓN ORGANIZACIONAL</h1>
		<p style="padding: 10px;line-height: 23px;margin-left: 194px;width: 70%;font-size: 18px;text-align: justify;" >La Misión es una declaración breve y clara del concepto de su organización. Establece lo que se hace, el mercado al que va dirigido y la propuesta que la diferencia de otras organizaciones, Esta permite que sus colaboradores, así como las personas y empresas vinculadas a su organización, reciban el mismo mensaje y se enfoquen todos los esfuerzos en una misma dirección. 
			Es importante identificar y construir la misión sin confundir los fines y los medios en los que se basan para  lograr su materialización, ejemplo: la misión de un supermercado no es vender productos físicos, en realidad es satisfacer necesidades básicas como la alimentación, entre otras. 
		</p>
	</div>
	<a href="{{ route('Mision/paso2') }}" style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
	<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">PROPUESTA DE VALOR</h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 4%;" data-dismiss="modal" aria-label="Close"></span>
					
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
</div>


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


<script >
	var por=0;

	if (por ==0) {
		document.getElementById('prog','icono').style.display = 'none';

	}
</script>






@endsection