@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
</header>
<div class="contenedorpe">
	<h2 style="text-align: center;font-weight: bold;">   Perfil de Capacidad Interna –PCI</h2>
	<p style="line-height: 23px;margin-left: 80px;font-size: 18px;text-align: justify;"><br><br>
		Es un método que permite evaluar las fortalezas y debilidades de la compañía en relación con las oportunidades y amenazas, a manera de diagnóstico estratégico involucrando los factores que afectan la operación corporativa. <br>Para su desarrollo se examinarán 5 categorías:
		<br>1. La capacidad directiva. 
		<br>2. La capacidad competitiva (de mercadeo).
		<br>3. La capacidad financiera. 
		<br>4. La capacidad tecnológica (productiva). 
		<br>5. La capacidad de talento humano.


	</p>
</div>
<form  method="post"  role="from" action="{{route('capacidadInte')}}" >
	@csrf
	<textarea name="nombre_proyecto"   style="display: none;" id="nombre_proyecto" ></textarea>
	<button   type="submit" style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</button>
</form>

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
				<p>
					Para realizar la Matriz de Capacidad Interna es fundamental realizar los siguientes pasos:
					<br>1) se identifica si los factores mencionados representan para su empresa una debilidad o fortaleza.
					<br>2) Después se debe asignar una calificación a cada factor considerando su importancia de la siguiente manera:
					<br>A (si es alto).
					<br>M (si es medio).
					<br>B (si es bajo).
					<br>En caso de no aplicar se puede marcar la opción N/A.
					<br><br>¡Empecemos!
					{vista capacidadInterna}
				</p>
			</div>
		</div>
	</div>

</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
@yield('script')


@endsection
