@extends('layouts.nav')

@section('content')
<header>
	@yield('js')

</header>

<form method="POST" >
	@csrf
	<div class="contenedor8">
		<h3 style="color: black; text-align: center;">VALORES CORPORATIVOS</h3>
		<p style="color: grey;">Se recomienda seleccionar de 3 a 5 valores corporativos para su empresa</p>


			<div class="row valorescont">

				<div class="col-md-4 contboton">
					<option id="option1" onclick="option1()"  class="valores" mensaje="Es la posición que asume la empresa frente a los retos que representan los cambios del entorno para la sostenibilidad de su empresa. Tanto internos como en el ámbito social externo en el que se desenvuelve ésta. ... El empresario debe asumir una actitud empresarial para triunfar en su negocio y conseguir el éxito.">Actitud</option>
					<option id="option2" class="valores" mensaje="Es el proceso a través del cual se adquieren nuevas habilidades, destrezas, conocimientos, conductas o valores como resultado del estudio, la experiencia, la instrucción, el razonamiento y la observación. Este proceso puede ser analizado desde distintas perspectivas, por lo que existen distintas teorías del aprendizaje."  onclick="option2()">Aprendizaje</option>
					<option id="option3" class="valores" mensaje="Saber analizar las metas de trabajo y los pasos necesarios para conseguirlas asertivo es saber adónde vamos. Además, implica una conciencia del talento propio y del de los demás para saber ponerlos al servicio de los procesos que tengan lugar en la empresa." onclick="option3()">Asertividad</option>
					<option id="option4" class="valores" mensaje="Tener la capacidad de analizar, cada cierto tiempo, las actividades y resultados de la empresa es una manera de evaluar cuáles son las fortalezas y debilidades que tiene la institución y, por ende, los trabajadores. Esto forma parte de saber asumir los aciertos y errores cometidos." onclick="option4()">Autocrítica</option>
					<option id="option5" class="valores" mensaje="Es un concepto que deriva de la propia definición de Calidad, entendida como satisfacción de las necesidades y expectativas del cliente presentando productos y servicios de óptima calidad." onclick="option5()">Calidad de servicio</option>
					<option  id="option6"  class="valores" mensaje="Designa las condiciones en que vive una persona que hacen que su existencia sea placentera y digna de ser vivida, o la llenen de aflicción. Es un concepto extremadamente subjetivo y muy vinculado a la sociedad en que el individuo existe y se desarrolla." onclick="option6()" >Calidad de vida</option>
					<option id="option7" class="valores" mensaje="El compromiso de los trabajadores refleja la implicación intelectual y emocional de éstos con su empresa, y con ello su contribución personal al éxito de la misma. Los trabajadores comprometidos comparten una serie de creencias y actitudes que vistas en su conjunto reflejan el aspecto clave de la salud de la empresa." onclick="option7()">Compromiso</option>
					<option id="option8" value="true" class="valores" mensaje="La comunicación es aquella que logra expresar de forma simple, oportuna y clara lo que se desea a otro individuo. La comunicación asertiva es el equilibrio entre una comunicación agresiva y una comunicación pasiva. Se trata de una habilidad social importante asociada a la inteligencia emocional y a la comunicación no verbal." onclick="option8()">Comunicación</option>
					<option id="option9" class="valores" mensaje="A través de la constancia y la perseverancia se alcanzan objetivos. Ser constante significa trabajar y luchar por un logro, superar pruebas y no dejarse vencer por los errores o adversidades." onclick="option9()">Constancia</option>

					<option id="option10" class="valores" mensaje="Se entiende a la facultad que alguien tiene para crear y a la capacidad creativa de un individuo. Consiste en encontrar procedimientos o elementos para desarrollar labores de manera distinta a la tradicional, con la intención de satisfacer un determinado propósito. La creatividad permite cumplir deseos personales o grupales de forma más veloz, sencilla, eficiente o económica." onclick="option10()">Creatividad</option>

					<option id="option11" class="valores" mensaje="El camino hacia el bienestar y el crecimiento personal implica lograr el equilibrio y la armonía en el día a día, en la relación con nosotros mismos y con los demás. Por eso, es necesario observar e identificar si estamos en el lugar donde queremos estar y si estamos satisfechos con nuestra vida, y definir qué podemos hacer para mejorar lo que no nos hace satisface, así es posible trabajar para que ese cambio sea posible." onclick="option11()">Crecimiento personal</option>

					<option id="option12" class="valores" mensaje="La disciplina de las personas se refleja en los resultados de su trabajo. Ser disciplinado se relaciona con la puntualidad, seguir las normas, ser proactivo, proponerse alcanzar objetivos y ser exigente. Por medio de la disciplina también se logran las metas." onclick="option12()">Disciplina</option>
				</div>

				<div class="col-md-4 contboton">
					<option id="optiona2" class="valores" mensaje="Llevar a cabo las ideas de negocios requiere de mucho temple, y sobre todo tener por entendido que habrá la necesidad siempre de estar dispuesto al cambio, cuando las cosas no salen como se planean se requiere de pequeños o grandes ajustes que harán que nuestro camino tome un nuevo rumbo; habrá que estar con la disponibilidad y la capacidad de entender que las cosas no siempre salen como las previmos." onclick="optiona2_2()">Disponibilidad al cambio</option>

					<option id="optiona3" class="valores" mensaje="Es la relación que existe entre los recursos empleados en una empresa y los resultados obtenidos con el mismo. Hace referencia sobre todo a la obtención de un mismo objetivo con el empleo del menor número posible de recursos o cuando se alcanzan más metas con el mismo número de recursos o menos. La eficiencia es muy importante en las empresas, ya que se consigue el máximo rendimiento con el mínimo coste." onclick="optiona2_3()">Eficiencia</option>

					<option  id="optiona4"   class="valores" mensaje="Se define como una habilidad social, tanto cognitiva como emocional, que permite ponerse en la situación emocional de otra persona. Tener empatía es entender actitudes, acciones o sentimientos de otras personas, conectar con sus emociones y entender los deseos, miedos o enfados." onclick="optiona2_4()">Empatía</option>

					<option id="optiona5"   class="valores" mensaje="Se entiende a la característica de flexible. Se trata de una palabra que permite resaltar la disposición de un individuo u objeto para ser doblado con facilidad, la condición de plegarse según la voluntad de otros y la susceptibilidad para adaptarse a los cambios de acuerdo a las circunstancias." onclick="optiona2_5()" >Flexibilidad</option>

					<option id="optiona6"  class="valores" mensaje="Es un valor o cualidad propio de los seres humanos que tiene una estrecha relación con los principios de verdad y justicia y con la integridad moral. Una persona honesta es aquella que procura siempre anteponer la verdad en sus pensamientos, expresiones y acciones." onclick="optiona2_6()">Honestidad</option>

					<option id="optiona7" class="valores" mensaje="Es la manera más adecuada de conducir una empresa. Las grandes compañías que logran alcanzar el éxito deseado, son aquellas que plantean estrategias para el bienestar y el desarrollo de sus colaboradores para así alcanzar un desarrollo favorable y una estabilidad." onclick="optiona2_7()">Humanismo</option>

					<option  id="optiona8" class="valores" mensaje="Es la cualidad que poseen algunas personas de poder por sí mismos iniciar alguna cuestión, bien sea comenzar una actividad, o buscar soluciones a alguna problemática. Lo que se debe tener en cuenta con este término es que una de sus características principales es que la iniciativa nace de cada persona, es decir, no hay ningún factor externo que lo impulse para lograr su objetivo." onclick="optiona2_8()">Iniciativa</option>

					<option id="optiona9" class="valores" mensaje="Ser íntegro se refiere a ser auténtico y honesto durante las relaciones laborales. Exponer una situación o caso tal cual como es, no hacer estafas ni falsas promesas a otras personas, clientes o proveedores." onclick="optiona2_9()">Integridad</option>

					<option id="optiona10" class="valores" mensaje="Es un valor que inclina a obrar y juzgar, teniendo por guía la verdad y dando a cada uno lo que le pertenece, y lo que le pertenece a cada uno es su realización y su dignidad. La justicia como valor democrático es un nivel que se desea alcanzar y está vinculado estrictamente al valor." onclick="optiona2_10()">Justicia</option>

					<option id="optiona11" class="valores" mensaje="Es la habilidad de un individuo de influenciar, motivar e inspirar a que otros contribuyan a la efectividad y al éxito de las organizaciones de las que son miembros. ... Un líder es capaz de constituir reglas para orientar y conducir a otros a la concreción de los objetivos establecidos." onclick="optiona2_11()">Liderazgo</option>

					<option id="optiona12" class="valores" mensaje="La perseverancia en un empresario significa logros, quien esté dispuesto a tener negocios productivos, necesariamente requiere de levantarse y luchar todos los días en contra de las adversidades y de los problemas que se puedan presentar, esto aunado a una motivación empresarial a toda prueba; Darse por vencido o tener pensamientos negativos suelen ser factores que pueden inundar la mente del empresario todos los días, habrá que luchar incesantemente contra estos pensamientos para no dejarse vencer." onclick="optiona2_12()">Perseverancia</option>

					<option id="optiona13" class="valores" mensaje="En la organización. ... Por el contrario, si un trabajador está convencido que la compañía es buena y que le da beneficios es una persona que realmente luchará en pro de las metas de la empresa y lo que necesitan las organizaciones es que su fuerza laboral esté unida y se trabaje en equipo."  onclick="optiona2_13()">Pertenencia</option>
				</div>


				<div class="col-md-4 contboton">
					<option  id="option3_1"   class="valores" mensaje="Tomar acción sobre las oportunidades que se nos presentan a diario; prever, intuir, y actuar de manera positiva sobre todos los problemas que puedan ocurrir en el negocio, uno debe ser capaz de reaccionar instantáneamente y de forma eficaz, en todas o en casi todas las situaciones que puedan surgir." onclick="optiona3_1()">Pro actividad</option>

					<option   id="option3_2"    class="valores" mensaje="Es la manera o la forma de desarrollar cierta actividad profesional con un total compromiso, mesura y responsabilidad, acorde a su formación específica y siguiendo las pautas preestablecidas socialmente." onclick="optiona3_2()">Profesionalismo</option>

					<option   id="option3_3"  class="valores" mensaje="Es la virtud de actuar de forma justa, adecuada y con cautela, respetando los sentimientos, la vida y las libertades de las demás personas, pero también es la cualidad de comunicarse con un lenguaje claro, cuidadoso y acertado; con sensatez, con moderación y reflexión." onclick="optiona3_3()">Prudencia</option>

					<option  id="option3_4"  class="valores" mensaje="Tratar a todas las personas por igual, valorar su trabajo y corregir los errores, es un trato de respeto. Cuando las personas son respetadas se sienten aceptadas y motivadas por seguir con sus trabajos y desarrollando sus capacidades personales y laborales." onclick="optiona3_4()">Respeto</option>


					<!-- optiona3_5() -->
					<option  id="option3_5" class="valores" mensaje="Cuando se inicia un negocio se adquieren un sinnúmero de responsabilidades, tanto de índole personal como de índole social; el concepto de la responsabilidad es entender que se deben respetar una serie de lineamientos y reglas, además de contribuir en el crecimiento y la armonía del entorno en el que nos desenvolvemos y con las personas que interactuamos." onclick="optiona3_5()">Responsabilidad</option>

					<option id="option3_6" class="valores" mensaje="Es un valor empresarial y social que se refiere al compromiso que tiene una empresa o corporación con la comunidad donde se ubica. La finalidad es generar y poner en práctica diversas iniciativas y actividades que contribuyan a mejorar la vida en comunidad." onclick="optiona3_6()">Responsabilidad Social</option>

					<option id="option3_7" class="valores" mensaje="Es la resistencia frente a la adversidad y la capacidad de reconstruirse es una actitud vital positiva a pesar de las circunstancias difíciles, y representa el lado positivo de las cosas también en saber aprender de la derrota y transformarla en oportunidades." onclick="optiona3_7()">Resiliencia</option>

					<option id="option3_8" class="valores" mensaje="Es el valor de ser humildes y empáticos con la gente, sin importar los títulos profesionales o el reconocimiento que se tenga ante otros. El valor de la sencillez,  permite ser conscientes de que otros merecen de respeto y buen trato, sin importar el estatus social o prestigio social." onclick="optiona3_8()">Sencillez</option>

					<option id="option3_9" class="valores" mensaje="Responsabilidad solidaria de las empresas se enmarca dentro de un concepto más amplio, el de la Responsabilidad Social Corporativa. Al hablar de solidaridad empresarial, nos referimos a la contribución que las compañías hacen de alguna u otra forma al entorno en el que operan." onclick="optiona3_9()">Solidaridad</option>

					<option  id="option3_10" class="valores" mensaje="Busca aumentar la confianza entre quienes tienen relación con la empresa, ya sean los empleados, los clientes, los accionistas o los proveedores. ... A través de la transparencia, la empresa hace saber a la sociedad cómo actúa, abriendo paso a posibles críticas o juicios de valor." onclick="optiona3_10()">Transparencia</option>


					<option   id="option3_11" class="valores" mensaje="Cuando alguien tiene el convencimiento y la pasión por ejercer una actividad profesional se dice que tiene vocación. Por otra parte, la idea de servicio en un sentido general se refiere a la acción de servir, es decir, mantener una actitud de empatía hacia los demás. Consecuentemente, el concepto de vocación de servicio se refiere a la inclinación profesional orientada a satisfacer las necesidades ajenas." onclick="optiona3_11()">Vocación de servicio</option>


                    <a id="boton" class="button" value="AÑADIR" id="boton1" data-toggle="modal" data-target="#exampleModal0" >AÑADIR VALOR<span class="icon-eye-plus"></span></a></div>
                </div>
			<div class="hover">
					<h2>Hover</h2>
				</div>
	</div>


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
		  <p>Una de las mejores maneras de comenzar a redactar la visión es usar frases concisas y en infinitivo que vayan
			de lo particular a lo global y de lo concreto a lo emotivo.<br>
			La imagen debe reflejar una aceptación de las características de la empresa, los socios y el equipo. Además.
			depende completamente de los objetivos estratégicos.
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
