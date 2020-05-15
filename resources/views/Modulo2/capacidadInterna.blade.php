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
	<p style="line-height: 23px;margin-left: 80px;font-size: 18px;text-align: justify;">
		<br>
		El diagnostico estratégico permite llevar a su empresa al logro de procesos, etapas y fases teniendo en cuenta diferentes elementos del diagnóstico basados en el aspecto externo e interno de la empresa, dentro de la cual se busca satisfacer las necesidades de todos  los   involucrados: accionistas,trabajadores, clientes para ello se requiere la recopilación  adecuada de información, y así considerar la causa y consecuencia de cada escenario.
		
		<br>
		<b style="font-weight: bold;">Fortaleza:</b><br>
		Son todas las capacidades, atributos y recursos de una organización que están bajo su   control e influencia, aluno de ellos son los conocimientos, activos, tecnología, capital financiero y humano, procesos, experiencia, sensibilidades y actitudes que contribuyen y apoyan el logro de los objetivos planificados con el fin de obtener ventajas competitivas.
		<br>
		<b style="font-weight: bold;">Debilidades:</b><br>
		Son los factores negativos de la empresa que en algún momento la pueden llevar a una crisis o la debilitan ante sus competidores; su solución está en manos de la propia organización. Son deficiencias inherentes a la empresa que pueden existir desde la creación misma del modelo de negocio o creadas en las diferentes etapas del desarrollo empresarial. Las debilidades surgen desde el interior de la organización y afectan su posición competitiva (Prieto 2008) actividades  y  atributos internos de una organización que inhiben o dificultan el éxito de una empresa.
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
					Como realizar la calificación de la Matriz PCI (Perfil de Capacidad interna)

					Para realizar la calificación de la matriz se debe seleccionar la capacidad, identificar si
					es una fortaleza o debilidad para la empresa, luego si:
					<br><br>
					1. Es una fortaleza se debe calificar D si es débil (débil), M si es (media) y A si es (alta)
					<br>
					2. Es debilidad debo calificar si es D si es débil (débil), M si es (media) y A si es (alta)
					Luego, se califica que impacto tiene esa debilidad o fortaleza para la empresa: D(débil),
					M (media), A(alta)
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
