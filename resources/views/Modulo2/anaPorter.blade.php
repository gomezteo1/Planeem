
@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')

	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
</header>

	<div class="contenedor4">
		<h1 style="text-align: center; font-weight: bold; padding: 12px;">ANÁLISIS PORTER</h1>
		<p style="padding: 10px;line-height: 23px;margin-left: 194px;width: 70%;font-size: 18px;text-align: justify;">Es una herramienta fundamental a la hora de comprender la estructura competitiva de una industria.
			Esta herramienta de análisis simple y eficaz permite identificar la competencia y entender en qué
			medida esta es susceptible de reducir su capacidad de generar beneficio.<br><br>

			El análisis examina 5 fuerzas el poder de negociación de los clientes, el poder de negociación de los
			proveedores, la amenaza procedente de los productos sustitutos, la amenaza que representan los
		productos entrantes y la rivalidad entre los competidores (intrasectorial).</p>
	</div>

	<a href="{{ route('analisisporter') }} " style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>

	<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content10">{{-- se coloco estilos de este modal en estilos css --}}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;"></h5>
					<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
					margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

				</div>
				<div class="modal-body">
					<ol style="line-height: 17px; margin-top: 33px;">
						<b style="color: black; font-weight: bold;">Procedimiento de calificación</b>
						<br><br>
						Estas cinco fuerzas delimitan precios, costos y requerimientos de inversión que constituyen a los
						factores básicos que explican las expectativas de rentabilidad a largo plazo y, por lo tanto, el
						atractivo del sector. Dado que el concepto de atractivo del sector (atractividad) está asociado a la
						expectativa de rentabilidad a largo plazo, se utilizarán las siguientes denominaciones:<br>
						<br><br>
						(1) Alta (A), Cuando la atractividad sectorial y la expectativa de rentabilidad a largo plazo es muy
						alta;<br><br>

						(2) Media (M), Cuando la atractividad sectorial y la expectativa de rentabilidad a largo plazo es
						normal
						<br><br>
						(3) Bajo (B): Cuando la atractividad del sector y la expectativa de rentabilidad a largo plazo es
						baja.<br><br>

						Conocer el impacto de cada atractividad es importante para el análisis por lo cual se usará la
						misma nomenclatura de Alta (A), Media (M) y Bajo (B).
					</ol>
				</div>
			</div>
		</div>
	</div>
	
</section>
@yield('script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>

  $(document).ready(function () {
   $('.items li:nth-child(7)').addClass("acti");
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