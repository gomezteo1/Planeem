@extends('layouts.nav')

@section('content')
<header>

</header>
<div class="Mision" style="height: 20rem;;">
	<h1 style="text-align: center; font-weight: bold; padding: 12px;">Visión Organizacional</h1>
	<p style="padding: 10px;line-height: 23px;margin-left: 138px;width: 79%;font-size: 18px;text-align: justify;" >La Visión es el conjunto de ideas generales, que proveen el marco de referencia de lo que una unidad de negocio quiere ser en el futuro. Señala el rumbo y da dirección.
        Es una representación de cómo la empresa debe ser en el futuro ante los ojos de los clientes, proveedores, empleados y propietarios.
        Una de las mejores maneras de comenzar a redactar la visión es usar frases concisas y en infinitivo que vayan de lo particular a lo global y de lo concreto a lo emotivo dando respuesta a las siguientes preguntas:<br>
        ¿Qué haremos?<br>
        ¿Seguiremos fabricando lo mismo?<br>
        ¿Nos volveremos sustentables?<br>
        ¿Mejoraremos los procesos de producción?
	</p>
</div>
<a href="{{ route('Vision/paso2') }} " style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
</section>
<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 170px; font-weight: bold;">Desarrollo De La Visión Organizacional</h5>
				<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
				margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

			</div>
			<div class="modal-body">
				<p>Para desarrollar la Visión Organizacional debe responder las siguientes preguntas en los recuadros habilitados:<br>

                    ¿Qué hará mi empresa en cinco años?<br>
                    ¿Qué hará mi empresa por el entorno en cinco años?<br>
                    ¿Qué hará mi empresa por la sociedad en cinco años?<br>
                    ....VISTA 15)</p>
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
