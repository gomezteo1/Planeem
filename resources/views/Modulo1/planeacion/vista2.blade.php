@extends('layouts.nav')

@section('content')

@section('f')
@foreach ($id_plane as $id_plane)
@if ($id_plane->nombre_proyecto == $proyecto->nombre_proyecto )
<a href="{{route('proyect',$id_plane->id_Planeacion)}}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
@endif
@endforeach
@endsection
<section>
	<div >
		<h2 class="titulopensa">Pensamiento y Direccionamiento Estratégico</h2>
		<img class="imgpensamiento" src="img/pensamiento.png">
	</div>
	<div class="parrafito">
		<p style="padding: 10px;line-height: 23px;margin-left: 194px;width: 70%;font-size: 18px;text-align: justify;" >Es un enfoque gerencial que permite a la alta dirección determinar en las empresas un rumbo claro a través de establecer la misión, la visión, el mega empresarial, la promesa de valor y los valores corporativos. Cinco elementos que le ayudarán a responder las preguntas:  <b style="font-weight: bold;">¿Quiénes Somos?</b> <b style="font-weight: bold;">¿Qué hacemos?</b>  <b style="font-weight: bold;">¿Cómo Lo Hacemos? </b> Y <b style="font-weight: bold;">¿Hacia Dónde Vamos?.</b>
			<a href="{{ route('Propuesta/paso1') }} " name="nuevo" style="color:white;" class="Ahora_pensa btn btn-planeem waves-effect waves-light">Siguiente</a>
		</p>

	</div>

	<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">Propuesta De Valor</h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body">
				
					<p>Es una estrategia de la empresa para cada segmento de clientes, describiendo la combinación única de producto, precio, servicio e imagen. La Propuesta de Valor debe comunicar aquello que la empresa espera hacer mejor o de manera diferente que la competencia para sus clientes.
                        A través de ella, se puede determinar lo que diferencia su producto o servicio de la competencia.

                    </p>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>

  $(document).ready(function () {
    $('.items li:first-child').addClass("acti");
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

@endsection
