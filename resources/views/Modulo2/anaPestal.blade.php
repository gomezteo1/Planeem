@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')

	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection

	<div class="contenedor4">
		<h1 style="text-align: center; font-weight: bold; padding: 12px;">ANÁLISIS PESTAL</h1>
		<p style="padding: 10px;line-height: 23px;margin-left: 194px;width: 70%;font-size: 18px;text-align: justify;">Es una metodología que se basa en algunas variables del contexto externo, las cuales son capaces de
			definir el escenario en el cual opera la organización. Se trata de un análisis cuyo objetivo implica
			delimitar los factores que podrían ser relevantes en las tendencias generales, pero, además,
			proporciona una información útil para el proceso de toma de decisiones y en las elecciones
			estratégicas y operativas de la organización. El análisis puede adoptar una perspectiva enfocada
			hacia el futuro, con el objetivo de identificar los principales elementos de discontinuidad (o de cambio)
			que deberán afrontarse. Permitiendo al proceso estratégico, entender cuáles son los factores políticos,
			económicos, sociales, tecnológicos, ambientales y legales que existen en el entorno global y nacional,
		que potencialmente ofrecen oportunidades, amenazas y riegos a la empresa.</p>
	</div>
	<a href="{{ route('analisisPestal') }} " style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
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
					<ol style="line-height: 17px; margin-top: 47px;">
						<b style="color: black; font-weight: bold;">Matriz de evaluación de factores internos Matriz EFI</b>
						<br><br>
						Es una La Matriz de Evaluación de Factores Internos que denomina EFI se desarrolla iniciando con la lista de fortalezas
						y debilidades donde se resume y evalúa las fuerzas y debilidades más importantes dentro de las áreas funcionales de
						un negocio y además ofrece una base para identicar y evaluar las relaciones entre dichas áreas. (Rincón Torres, 2012).<br>
						<br>
						<b style="color: black; font-weight: bold;">La matriz EFI se desarrolla en cinco pasos:</b><br>
						Pasos para realizar la evaluación de La matriz EFI<br>
						1: se debe hacer una lista factores identicados que incluyan debilidades y fortalezas de la empresa (deben ser entre
						10 y 20)<br>
						2: Asignar un peso a cada variable, que va desde 0.0 a 1.0
						0.0 La fortaleza o Debilidad no es muy importante
						1.0 La fortaleza o Debilidad es muy importante<br>
						3: sumar los pesos asignados, esta suma no debe superar el 1.0<br>
						4: se debe asignar una calicación a cada variable que va de 1 hasta <br>
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
   $('.items li:nth-child(6)').addClass("acti");
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
