@extends('layouts.nav')

@section('content')
<header>

</header>
<div class="Mision" style="height: 20rem;;">
	<h1 style="text-align: center; font-weight: bold; padding: 12px;">VISIÓN ORGANIZACIONAL</h1>
	<p style="padding: 10px;line-height: 23px;margin-left: 138px;width: 79%;font-size: 18px;text-align: justify;" >La Visión es el conjunto de ideas generales, que proveen el marco de referencia de lo que una unidad de negocio quiere ser en el futuro. Señala el rumbo y da dirección. Es una representación de cómo creemos que deba ser el futuro para nuestra empresa ante los ojos de los clientes, proveedores, empleados y propietarios
		Visualizar el futuro implica un permanente examen de la organización frente a sus clientes, su competencia, su propia cultura, y sobre todo discernir entre lo que ella es hoy, y aquello que desea ser en el futuro, todo esto frente a su capacidades y oportunidades.
		como el camino al cual se dirige la empresa a largo plazo y sirve de rumbo y aliciente para orientar las decisiones estratégicas de crecimiento junto a las de competitividad
		Una de las mejores maneras de comenzar a redactar la visión es usar frases concisas y en infinitivo que vayan de lo particular a lo global y de lo concreto a lo emotivo.
	</p>
</div>
<a href="{{ route('Vision/paso2') }} " style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
</section>
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



<script >
	var por=0;

	if (por ==0) {
		document.getElementById('prog','icono').style.display = 'none';

	}
</script>









@endsection