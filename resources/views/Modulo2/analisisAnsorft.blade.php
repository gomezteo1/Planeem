@extends('layouts.nav2')

@section('content')
<header>
	<div class="contenedor4">
		<h1 style="text-align: center; font-weight: bold; padding: 12px;">Análisis ANSOFF</h1>
		<p style="padding: 10px;line-height: 23px;margin-left: 194px;width: 70%;font-size: 18px;text-align: justify;">
			La Matriz Ansoff es una herramienta de toma de decisiones muy útil cuando se busca el
			crecimiento empresarial, relaciona los productos con los mercados, clasificando al
			binomio producto-mercado en base al criterio de novedad o actualidad. Como
			resultado se obtienen 4 cuadrantes con información sobre cuál es la mejor
			opción a seguir: estrategia de penetración de mercados, estrategia de desarrollo
			de nuevos productos, estrategia de desarrollo de nuevos mercados o estrategia
			de diversificación.
		</p>
	</div>
	{{-- <form id="form" style="display:none" action="{{ route('analisisEFI')}}" method="POST" role="form">
		@csrf
		<input type="text" name="id_Planeacion" value="{{$id_Planeacion}}">
		<button type="submit" id="btn1"></button>
		</form> --}}
	<a  onclick="btn12()" style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
	<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">{{-- se coloco estilos de este modal en estilos css --}}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body">
					Tanto en el eje X (EFE), como en el eje Y (EFI):<br>
					<br>
					Los valores de 1,0 a 1,99 representan una posición interna débil.<br>
					Una puntuación de 2,0 a 2,99 se considera la media.<br>
					Unos resultados entre de 3,0 a 4,0 representan una posición fuerte.
				</div>
			</div>
		</div>
	</div>
	
</section>

<form method="POST" style="display:none" id="form" action="{{route('analisisDOFA1')}}" >
	@csrf
		<input type="text" id="id_planecion" name="id_planecion">	
		<button  type="submit" id="btn12">		
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>

  $(document).ready(function () {
   $('.items li:nth-child(14)').addClass("acti");
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
