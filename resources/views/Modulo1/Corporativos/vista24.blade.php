@extends('layouts.nav')

@section('content')
<header>
	@yield('js')

</header>

<form method="POST" >
	@csrf
	<div class="contenedor8">
		<h3 style="color: black; text-align: center;">Valores Corporativos</h3>
		<p style="color: grey;">Se recomienda seleccionar de 3 a 5 valores corporativos para su empresa</p>


			<div class="row valorescont">

				<div class="col-md-4 contboton">
					<option id="option1" onclick="option1()"  class="valores" mensaje="Trabajamos con el sentimiento más grande que es el amor e influimos sobre nuestros colaboradores para que identifiquen y amen lo que hacen en cada área de la empresa.">Amor</option>
					<option id="option2" class="valores" mensaje="Trabajamos en la transparencia y credibilidad para nuestros colaboradores y clientes, con la convicción de que nuestro proceder les genera seguridad y confianza. "  onclick="option2()">Confianza</option>
					<option id="option3" class="valores" mensaje="La voluntad inquebrantable y continua determina el que hacer de nuestra labor empresarial." onclick="option3()">Constancia</option>
					<option id="option4" class="valores" mensaje="Expresarnos de manera clara, simple, oportuna y direccionada nos permite tener mejores relaciones dentro de la empresa y nos conduce a resultados efectivos y eficientes de nuestros objetivos. " onclick="option4()">Comunicación</option>
					<option id="option5" class="valores" mensaje="Estamos comprometidos con la información confidencial de nuestra empresa, tanto en los procesos como en la privacidad de datos de los colaboradores, clientes y Stakeholders" onclick="option5()">Confidencialidad</option>
					<option  id="option6"  class="valores" mensaje="Promovemos el pensamiento disruptivo de nuestros colaboradores, clientes y stakeholders en pro de generar espacios de construcción, buscando siempre superar expectativas." onclick="option6()" >Creatividad</option>
					<option id="option7" class="valores" mensaje="Fomentar la responsabilidad con nuestros colaboradores, clientes y stakeholders es la forma de entender nuestra actividad empresarial y la importancia del trabajo bien hecho." onclick="option7()">Compromiso</option>
					<option id="option8" class="valores" mensaje="Trabajamos de manera inclusiva con un equipo multidisciplinario, de diferente raza, religión y género, sin discriminación alguna." onclick="option8()">Diversidad</option>
					<option id="option9" value="true" class="valores" mensaje="Actuamos de manera perseverante y ordenada con base en los lineamentos empresariales para satisfacer las necesidades de nuestros colaboradores, clientes, y proveedores." onclick="option9()">Disciplina</option>


				</div>

				<div class="col-md-4 contboton">

                    <option id="option10"  class="valores" mensaje="Basados en los principios y normas de la empresa actuamos desde la cordialidad y entendimiento de las diferencias, escuchando y reconociendo el criterio de cada colaborador o cliente en pro de tomar decisiones correctas para afianzar la credibilidad y la confiabilidad en la empresa." onclick="option10()">Ética</option>

                    <option id="option11" class="valores" mensaje="Buscamos permanentemente habilidades sociales de convivencia que nos permitan entender las actitudes y acciones que guían el comportamiento de nuestros colaboradores, clientes y proveedores." onclick="option11()">Empatía</option>

                    <option id="option12" class="valores" mensaje="Tratamos a nuestros colaboradores con igualdad y respeto, brindándoles herramientas y valores para el crecimiento y reconocimiento de su dignidad humana." onclick="option12()">Equidad</option>



					<option id="optiona2" class="valores" mensaje="Adaptarnos a los cambios y aceptar los nuevos retos que nos depara el futuro nos permite el desarrollo empresarial permanente y nos prepara eficazmente para entornos competitivos. " onclick="optiona2_2()">Flexibilidad</option>

					<option id="optiona3" class="valores" mensaje="Actuamos de manera correcta con énfasis en nuestros colaboradores, incentivando las relaciones sanas de honestidad y convivencia." onclick="optiona2_3()">Honestidad</option>

					<option  id="optiona4"   class="valores" mensaje="Impulsamos e incentivamos la habilidad de dirigir y guiar en nuestros colaboradores con el fin de contribuir a la efectividad y el éxito de su superación personal, brindarles un sentido de pertenencia por su labor y el crecimiento de la empresa." onclick="optiona2_4()">Liderazgo</option>

					<option id="optiona5"   class="valores" mensaje="Trabajamos en equipo con simplicidad, respeto y buen trato, teniendo en cuenta los aportes dados por los grupos de trabajo incrementando las relaciones interpersonales con nuestros colaboradores y clientes." onclick="optiona2_5()" >La sencillez</option>

					<option id="optiona6"  class="valores" mensaje="Somos ordenados con nuestro direccionamiento como empresa, teniendo planteamientos estratégicos que guíen a nuestros colaboradores a tomar acciones acertadas en pro de los beneficios de la empresa. " onclick="optiona2_6()">Orden</option>

					<option id="optiona7" class="valores" mensaje="Trabajamos con convencimiento, pasión y constancia para entregar siempre lo mejor como organización, comprendiendo las eventuales dificultades como caminos al éxito. " onclick="optiona2_7()">Perseverancia</option>


				</div>


				<div class="col-md-4 contboton">
                    <option  id="optiona8" class="valores" mensaje="Impulsamos a nuestros colaboradores en la toma de decisiones, de manera acertada y positiva sobre las dificultades que se presenten en nuestra organización, desde su conocimiento y experiencia. " onclick="optiona2_8()">Pro actividad</option>

                    <option id="optiona9" class="valores" mensaje="Actuamos de manera correcta y atenta, priorizando la dignidad de nuestros colaboradores, clientes, proveedores y stakeholders de la empresa, considerando el valor que representan. " onclick="optiona2_9()">Respeto</option>

                    <option id="optiona10" class="valores" mensaje="Estimulamos y potencializamos las capacidades de nuestros colaboradores para el desarrollo personal, con el fin de buscar el logro empresarial." onclick="optiona2_10()">Reconocimiento</option>

                    <option id="optiona11" class="valores" mensaje="Promulgamos la disposición para realizar las actividades de manera adecuada y en el tiempo establecido, con determinación en pro del cumplimiento de los objetivos empresariales y la satisfacción de nuestros clientes." onclick="optiona2_11()">Responsabilidad</option>

                    <option id="optiona12" class="valores" mensaje="Nos caracterizamos porque siempre unimos fuerzas, recursos, voluntades, para satisfacer necesidades comunes; consolidándonos como una empresa que busca mejorar la calidad de vida de todos los que se relacionan con ella." onclick="optiona2_12()">Solidaridad</option>

                    <option id="optiona13" class="valores" mensaje="Trabajamos en pro del equilibrio de recursos naturales y ecológicos en el desarrollo de nuestras actividades laborales, con el fin de optimizar recursos existentes y no comprometer recursos futuros como aporte al medio ambiente."  onclick="optiona2_13()">Sustentabilidad</option>

					<option  id="option3_1"   class="valores" mensaje="Buscamos que nuestros colaboradores se sientan parte importante de la empresa, para lograr la identificación y apropiación con su labor." onclick="optiona3_1()">Sentido de pertenenctia</option>

					<option   id="option3_2"    class="valores" mensaje="Buscamos aumentar la confianza entre quienes tienen relación con la empresa, ya sean los colaboradores, los clientes, los accionistas o los proveedores; a través de la transparencia la empresa hace saber a la sociedad cómo actúa, abriendo paso a posibles críticas o juicios de valor. " onclick="optiona3_2()">Transparencia</option>

				<a  id="boton" class="button bbs" value="AÑADIR" id="boton1" data-toggle="modal" data-target="#exampleModal0"style="border: #0AB5A0 2px solid;border-radius: 26px;padding: 0px 80px 18px 104px;color: grey;left: 6%;width: 69%;bottom: -21%;position: relative;font-weight: 500;font-size: 14px;text-align: center;"     
				>AÑADIR VALOR<span class="icon-eye-plus"></span></a>
				</div>
			     <div class="hover"><h2>Hover</h2> </div>
	        </div>
    </div>





        <div class="modal fade" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-agregar_valor">
                        <div class="modal-body">
                                <h3 style="text-align: center; color: #0AB5A0;">Añadir valor</h3>
                                <h4 style="text-align: center;">Título</h4>
                                <div>
                                        <input type="email" class="form-control" id="valor" aria-describedby="emailHelp">

                                    </div>

                                <h4 style="text-align: center;">Descripcion</h4>

                            <div>
                                <h5 id="alert" ></h5>
								<textarea class="form-control form-control2" maxlength="504"  id="Descripcion" style="color:black;"></textarea>

                            </div>

                            <div><a style="color:white;" data-dismiss="modal" aria-label="Close"  onclick="guardar()" class="aceptarcapacidad btn btn-planeem waves-effect waves-light">Añadir</a>
                            </div>

                            <div id="cancelar">
                                <a value="cierra_AñadirCapa"  class="cancelarcapacidad btn btn-planeem waves-effect waves-light" data-dismiss="modal" aria-label="Close" style=" outline: none !important;">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			<a href="{{ route('select',$proyect->id_Planeacion ) }}"  style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>






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
		  <p>A continuación, se muestra una lista de valores en la cual usted puede seleccionar los Valores Corporativos
              pertinentes que pueden acoplarse a los ideales de su empresa. En caso de que tenga unos propios puede
              agregarlo en la opción agregar valor.
		  </p>
		</div>
		</div>
	  </div>
	</div>




</form>






@yield('script')




<script>


	function vista2(){

		var nombre_proyecto = document.getElementById('id_p').value;
		localStorage.setItem('nombre_proyecto',nombre_proyecto)


			document.getElementById("vista2").click();
		 }
</script>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>




{{-- <script>
		$(document).ready(function(){
		  $(".valores").click(function(){
			$(".valores").css({"background-color":"#FC7323", "border-radius":"50px", "color":"white","width": "95%"})

		  });
		  $(".valores").dblclick(function(){
			$(".valores ").css({"cursor": "pointer","width": "78%","height":" 9%","border-radius": "26px","border": "#FC7323 2px solid","background-color": "white","outline": "none","text-align": "center","color":"black"})

		  });
		});
</script> --}}




		<script>
			$(document).ready(function(){
			$(".cuadro").click(function(){
				$(".cuadro").css({"background-color":"yellow", "border-radius":"50px"})

			});
			$(".cuadro").dblclick(function(){
				$(".cuadro").css({"background-color":"red", "border-radius":"0px"})

			});
			});
		</script>









<script src="{{asset('js/items_plus/codigo.js')}}"></script>
<script>
		$("#btnLimpiar").click(function(event) {
			$("#anadir")[0].reset();
		});
</script>



<script>

		$(document).ready(function () {
			$('.items li:nth-child(5)').addClass("acti");
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


<script src="{{asset('js/items_plus/vista24.js')}}" > </script>
<script src="{{asset('js/Vmodulo1/Corporativos.js')}}" > </script>
<script src="{{asset('js/items_plus/codigo.js')}}" > </script>






@endsection
