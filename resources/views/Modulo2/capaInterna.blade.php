@extends('layouts.nav2')
@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
	@include('modal/modal')
	@yield('progres')
	<div>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>
</header>
<section class="contenedorper5">


	<form  action="{{ route('guardaCapa'),auth()->user()->selected_planne }}" method="POST" id="form" role="form">
		<input type="hidden" name="idPlaneacion"  value=""  id="" class="idPlaneacion" >

		@csrf
		<div id="regiration_form">
			<fieldset class="opciones">
				<h3>Capacidad Directiva:</h3>
				<p>Comprende el análisis de aquellas fortalezas o debilidades que se relacionan con
					los procesos administrativos de la empresa, es decir, las funciones de planeación,
					organización, dirección, toma de decisiones, coordinación, comunicación y control.
				</p>
				<table class="egt" id="tabla">
					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center;border:none;" rowspan="2" ></th>
						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button3"  data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat"><span class="icon-info "></span>
							</a> Debilidad</th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button4"  data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat"><span class="icon-info "></span>
							</a>Fortaleza</th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button5"  data-toggle="modal" data-target="#exampleModal4" data-whatever="@fat"><span class="icon-info "></span>
							</a>No Aplica</th>
						</tr>
					</thead>

					<tbody >
						@foreach ($directiva as $direc)

						<tr class="formulario">

							<td colspan="2" data-column_name="nombre" data-id="{{$direc->id}}" data-name="{{$direc->nombre}}" id="tdFormulario" class="thCampo1" >{{$direc->nombre}}</td>
							<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
							<td   class="radio">		
								<input type="hidden" name="preguntas[]" id="gender" value="{{ $direc->id}}">

								<input type="radio" name="{{$direc->id}}" id="debilidad-{{$direc->id. "-" .auth()->user()->selected_planne}}" value="dAlta" >
								<label for="debilidad-{{$direc->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$direc->id}}" id="debilidadb-{{$direc->id. "-" .auth()->user()->selected_planne}}" value="dMedia">
								<label for="debilidadb-{{$direc->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$direc->id}}" id="debilidadc-{{$direc->id. "-" .auth()->user()->selected_planne}}" value="dBaja">
								<label for="debilidadc-{{$direc->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$direc->id}}" id="fortaleza1-{{$direc->id. "-" .auth()->user()->selected_planne}}" value="fAlta">
								<label for="fortaleza1-{{$direc->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$direc->id}}" id="fortaleza2-{{$direc->id. "-" .auth()->user()->selected_planne}}" value="fMedia">
								<label for="fortaleza2-{{$direc->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$direc->id}}" id="fortaleza3-{{$direc->id. "-" .auth()->user()->selected_planne}}" value="fBaja">
								<label for="fortaleza3-{{$direc->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$direc->id}}" id="noaplica-{{$direc->id. "-" .auth()->user()->selected_planne}}" value="NA">
								<label for="noaplica-{{$direc->id. "-" .auth()->user()->selected_planne}}">N</label>
							</td>
										{{-- ////Posible error --}}
							{{-- <input type="hidden" name="respuesta[]"  value="{{$direc->id}}"> --}}
						</tr>
						@endforeach
					</tbody>
				</table>
				<button type="button" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
			</fieldset>
			<fieldset class="opciones">
				<h3>Capacidad Competitiva:</h3>
				<p>Involucra todos los aspectos de las debilidades y fortalezas relacionadas con el área comercial, como calidad del producto, exclusividad, portafolio de productos, participación en el mercado, canales de distribución, cubrimiento, investigación y desarrollo, precios, publicidad, lealtad de los clientes, calidad en el servicio al cliente, precios y bonificaciones.</p>
				<table  class="egt" id="tabla">
					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center;border:none;" rowspan="2" ></th>
						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button3"  data-toggle="modal" data-target="#exampleModal5" data-whatever="@fat"><span class="icon-info "></span>
							</a> Debilidad</th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button4"  data-toggle="modal" data-target="#exampleModal6" data-whatever="@fat"><span class="icon-info "></span>
							</a>Fortaleza</th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button5"  data-toggle="modal" data-target="#exampleModal7" data-whatever="@fat"><span class="icon-info "></span>
							</a>No Aplica</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($competitiva as $compe)

						<tr class="formulario">
							<td colspan="2" data-column_name="nombre" data-id="{{$compe->id}}" data-name="{{$compe->nombre}}" id="tdFormulario" class="thCampo1" >{{$compe->nombre}}</td>
							<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
							<td   class="radio">
								<input type="hidden" name="preguntas[]"id="gender" value="{{ $compe->id }}">

								<input type="radio" name="{{$compe->id}}" id="debilidad-{{$compe->id. "-" .auth()->user()->selected_planne}}" value="dAlta">
								<label for="debilidad-{{$compe->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$compe->id}}" id="debilidadb-{{$compe->id. "-" .auth()->user()->selected_planne}}" value="dMedia">
								<label for="debilidadb-{{$compe->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$compe->id}}" id="debilidadc-{{$compe->id. "-" .auth()->user()->selected_planne}}" value="dBaja">
								<label for="debilidadc-{{$compe->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$compe->id}}" id="fortaleza1-{{$compe->id. "-" .auth()->user()->selected_planne}}" value="fAlta">
								<label for="fortaleza1-{{$compe->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$compe->id}}" id="fortaleza2-{{$compe->id. "-" .auth()->user()->selected_planne}}" value="fMedia">
								<label for="fortaleza2-{{$compe->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$compe->id}}" id="fortaleza3-{{$compe->id. "-" .auth()->user()->selected_planne}}" value="fBaja">
								<label for="fortaleza3-{{$compe->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$compe->id}}" id="noaplica-{{$compe->id. "-" .auth()->user()->selected_planne}}" value="NA">
								<label for="noaplica-{{$compe->id. "-" .auth()->user()->selected_planne}}">N</label>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
				<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
			</fieldset>
			<fieldset class="opciones">
				<h3>Capacidad Financiera:</h3>
				<p>En este componente se incluye todos los aspectos relacionados con las fortalezas o debilidades financieras de la compañía como: deuda o capital, disponibilidad de línea de crédito, capacidad de endeudamiento, margen financiero, rentabilidad, liquidez, rotación de cartera, rotación de inventarios, estabilidad de costos, elasticidad de la demanda y otros índices financieros que se consideren pertinentes para la organización y el área de análisis.</p>
				<table  class="egt" id="tabla">
					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center;border:none;" rowspan="2" ></th>
						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button3"  data-toggle="modal" data-target="#exampleModal8" data-whatever="@fat"><span class="icon-info "></span></a> Debilidad</th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button4"  data-toggle="modal" data-target="#exampleModal9" data-whatever="@fat"><span class="icon-info "></span></a>Fortaleza</th>
							<th class="thCampo_modulo2" style="text-align: center;"><a class="button5"  data-toggle="modal" data-target="#exampleModal10" data-whatever="@fat"><span class="icon-info "></span></a>No Aplica</th>
						</tr>
					</thead>
					<tbody>
						<tr class="formulario">

							@foreach ($financiera as $fina)

							<tr class="formulario">
								<td colspan="2" data-column_name="nombre" data-id="{{$fina->id}}" data-name="{{$fina->nombre}}" id="tdFormulario" class="thCampo1" >{{$fina->nombre}}</td>
								<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
								<td   class="radio">
									<input type="hidden"	id="gender" name="preguntas[]" value="{{ $fina->id }}">
									<input type="radio" name="{{$fina->id}}" id="debilidad-{{$fina->id. "-" .auth()->user()->selected_planne}}" value="dAlta">
									<label for="debilidad-{{$fina->id. "-" .auth()->user()->selected_planne}}">A</label>

									<input type="radio" name="{{$fina->id}}" id="debilidadb-{{$fina->id. "-" .auth()->user()->selected_planne}}" value="dMedia">
									<label for="debilidadb-{{$fina->id. "-" .auth()->user()->selected_planne}}">M</label>

									<input type="radio" name="{{$fina->id}}" id="debilidadc-{{$fina->id. "-" .auth()->user()->selected_planne}}" value="dBaja">
									<label for="debilidadc-{{$fina->id. "-" .auth()->user()->selected_planne}}">B</label>
								</td>
								<td class="radio">
									<input type="radio" name="{{$fina->id}}" id="fortaleza1-{{$fina->id. "-" .auth()->user()->selected_planne}}" value="fAlta">
									<label for="fortaleza1-{{$fina->id. "-" .auth()->user()->selected_planne}}">A</label>

									<input type="radio" name="{{$fina->id}}" id="fortaleza2-{{$fina->id. "-" .auth()->user()->selected_planne}}" value="fMedia">
									<label for="fortaleza2-{{$fina->id. "-" .auth()->user()->selected_planne}}">M</label>

									<input type="radio" name="{{$fina->id}}" id="fortaleza3-{{$fina->id. "-" .auth()->user()->selected_planne}}" value="fBaja">
									<label for="fortaleza3-{{$fina->id. "-" .auth()->user()->selected_planne}}">B</label>
								</td>
								<td class="radio">
									<input type="radio" name="{{$fina->id}}" id="noaplica-{{$fina->id. "-" .auth()->user()->selected_planne}}" value="NA">
									<label for="noaplica-{{$fina->id. "-" .auth()->user()->selected_planne}}">N</label>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
					<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
				</fieldset>
				
				<fieldset class="opciones">
					<h3>Capacidad Tecnológica:</h3>
					<p>En este componente se incluyen todos los aspectos relacionados con el proceso de producción, infraestructura y los procesos en las empresas industriales y de servicio. Por tanto, involucra, entre otras: infraestructura tecnológica (hardware), exclusividad de los procesos de producción, normalización de los procesos, ubicación física, acceso a servicios públicos, facilidades físicas, intensidad en el uso de mano de obra, patentes, nivel tecnológico, flexibilidad en la producción, disponibilidad de software, procedimientos administrativos.</p>
					<table  class="egt" id="tabla">
						<thead>
							<tr>
								<th class="thCampo" colspan="2" style="text-align: center;border:none;" rowspan="2" ></th>
							</tr>
							<tr>
								<th style="border: none !important;"></th>
								<th class="thCampo_modulo2" style="text-align: center;"><a class="button3"  data-toggle="modal" data-target="#exampleModal11" data-whatever="@fat" style="top: 10%;"><span class="icon-info "></span></a> Debilidad</th>
								<th class="thCampo_modulo2" style="text-align: center;"><a class="button4"  data-toggle="modal" data-target="#exampleModal12" data-whatever="@fat" style="top: 10%;"><span class="icon-info "></span></a>Fortaleza</th>
								<th class="thCampo_modulo2" style="text-align: center;"><a class="button5"  data-toggle="modal" data-target="#exampleModal13" data-whatever="@fat" style="top: 10%;"><span class="icon-info "></span></a>No Aplica</th>
							</tr>
						</thead>

						<tbody>			

							@foreach ($tecnologica as $tec)	
							<tr class="formulario">
								<td colspan="2" data-column_name="nombre" data-id="{{$tec->id}}" data-name="{{$tec->nombre}}" id="tdFormulario" class="thCampo1" >{{$tec->nombre}}</td>
								<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
								<td   class="radio">
									<input type="hidden"id="gender"  name="preguntas[]" value="{{ $tec->id }}">
									<input type="radio" name="{{$tec->id}}" id="debilidad-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="dAlta">
									<label for="debilidad-{{$tec->id. "-" .auth()->user()->selected_planne}}">A</label>

									<input type="radio" name="{{$tec->id}}" id="debilidadb-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="dMedia">
									<label for="debilidadb-{{$tec->id. "-" .auth()->user()->selected_planne}}">M</label>

									<input type="radio" name="{{$tec->id}}" id="debilidadc-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="dBaja">
									<label for="debilidadc-{{$tec->id. "-" .auth()->user()->selected_planne}}">B</label>
								</td>
								<td class="radio">
									<input type="radio" name="{{$tec->id}}" id="fortaleza1-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="fAlta">
									<label for="fortaleza1-{{$tec->id. "-" .auth()->user()->selected_planne}}">A</label>

									<input type="radio" name="{{$tec->id}}" id="fortaleza2-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="fMedia">
									<label for="fortaleza2-{{$tec->id. "-" .auth()->user()->selected_planne}}">M</label>

									<input type="radio" name="{{$tec->id}}" id="fortaleza3-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="fBaja">
									<label for="fortaleza3-{{$tec->id. "-" .auth()->user()->selected_planne}}">B</label>
								</td>
								<td class="radio">
									<input type="radio" name="{{$tec->id}}" id="noaplica-{{$tec->id. "-" .auth()->user()->selected_planne}}" value="NA">
									<label for="noaplica-{{$tec->id. "-" .auth()->user()->selected_planne}}">N</label>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
					
					<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
				</fieldset>
				<fieldset class="opciones">
					<h3>Capacidad de Factor Humano:</h3>
					<p>En este componente se incluyen todas las fortalezas y debilidades relacionadas con el recurso humano de la empresa como el nivel académico, experiencia técnica, estabilidad, rotación, absentismo, nivel de remuneración, capacitación, programas de desarrollo, motivación, pertenencia.</p>
					<table  class="egt" id="tabla">
						<thead>
							<tr>
								<th class="thCampo" colspan="2" style="text-align: center;border:none;" rowspan="2" ></th>
							</tr>
							<tr>
								<th style="border: none !important;"></th>
								<th class="thCampo_modulo2" style="text-align: center;"><a class="button3"  data-toggle="modal" data-target="#exampleModal14" data-whatever="@fat"><span class="icon-info "></span></a> Debilidad</th>
								<th class="thCampo_modulo2" style="text-align: center;"><a class="button4"  data-toggle="modal" data-target="#exampleModal15" data-whatever="@fat"><span class="icon-info "></span></a>Fortaleza</th>
								<th class="thCampo_modulo2" style="text-align: center;"><a class="button5"  data-toggle="modal" data-target="#exampleModal16" data-whatever="@fat"><span class="icon-info "></span></a>No Aplica</th>
							</tr>
						</thead>
						<tbody>
							<tr class="formulario">
								@foreach ($humano as $huma)

								<tr class="formulario">
									<td colspan="2" data-column_name="nombre" data-id="{{$huma->id}}" data-name="{{$huma->nombre}}" id="tdFormulario" class="thCampo1" >{{$huma->nombre}}</td>
									<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
									<td   class="radio">
										<input type="hidden"id="gender" name="preguntas[]" value="{{ $huma->id }}">
										<input type="radio" name="{{$huma->id}}" id="debilidad-{{$huma->id. "-" .auth()->user()->selected_planne}}" value="dAlta">
										<label for="debilidad-{{$huma->id. "-" .auth()->user()->selected_planne}}">A</label>

										<input type="radio" name="{{$huma->id}}" id="debilidadb-{{$huma->id. "-" .auth()->user()->selected_planne}}" value="dMedia">
										<label for="debilidadb-{{$huma->id. "-" .auth()->user()->selected_planne}}">M</label>

										<input type="radio" name="{{$huma->id}}" id="debilidadc-{{$huma->id. "-" .auth()->user()->selected_planne}}" value="dBaja">
										<label for="debilidadc-{{$huma->id. "-" .auth()->user()->selected_planne}}">B</label>
									</td>
									<td class="radio">
										<input type="radio" name="{{$huma->id}}" id="fortaleza1-{{$huma->id. "-" .auth()->user()->selected_planne}}" value="fAlta">
										<label for="fortaleza1-{{$huma->id. "-" .auth()->user()->selected_planne}}">A</label>

										<input type="radio" name="{{$huma->id}}" id="fortaleza2-{{$huma->id. "-" .auth()->user()->selected_planne}}" value="fMedia">
										<label for="fortaleza2-{{$huma->id. "-" .auth()->user()->selected_planne}}">M</label>

										<input type="radio" name="{{$huma->id}}" id="fortaleza3-{{$huma->id. "-" .auth()->user()->selected_planne}}" value="fBaja">
										<label for="fortaleza3-{{$huma->id. "-" .auth()->user()->selected_planne}}">B</label>
									</td>
									<td class="radio">
										<input type="radio" name="{{$huma->id}}" id="noaplica-{{$huma->id. "-" .auth()->user()->selected_planne}}" value="NA">
										<label for="noaplica-{{$huma->id. "-" .auth()->user()->selected_planne}}">N</label>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>

						<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
						<button type="submit" id="submitButton" class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>
					</fieldset>
				</div>
				<div class="infon">
					<a  id="boton1" data-toggle="modal" data-target="#exampleModal21" class="button2_agregar1" ><span class="icon-folder-plus"><div id="hover_agregar1">
						<h5>Agregar</h5></div></span></a>
						<a  class="button2" data-toggle="modal" data-target="#exampleModal7" data-whatever="@mdo"><span class="icon-info "></span>
						</a>
					</div>

				</section>
				<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>

			</form>
		</section>
		@yield('script')
		@endsection
		@push('script')
		
		<script>
			$(document).ready(function(){
				var planeacion = localStorage.getItem('id');
				$(".idPlaneacion").val(planeacion);
				console.log(planeacion);
			});

		</script>
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


		
		<script>

			$( document ).ready(function() {
				var id = localStorage.getItem('id');
				$.ajax({
					url:"/capacidadInte/show/"+id,
					type:'get',
					success:function(data){
						console.log(data);


						if(data != null){
							for(i of data){

								if(i.idRespuesta == 'dAlta'){
									$('#debilidad-'+i.capacidad+"-"+id).prop('checked',true);
								}else if(i.idRespuesta == 'dMedia'){
									$('#debilidadb-'+i.capacidad+"-"+id).prop('checked',true);
								}else if(i.idRespuesta == 'dBaja'){
									$('#debilidadc-'+i.capacidad+"-"+id).prop('checked',true);
								}else if(i.idRespuesta == 'fAlta'){
									$('#fortaleza1-'+i.capacidad+"-"+id).prop('checked',true);
								}else if (i.idRespuesta == 'fMedia'){
									$('#fortaleza2-'+i.capacidad+"-"+id).prop('checked',true);
								}else if(i.idRespuesta == 'fBaja'){
									$('#fortaleza2-'+i.capacidad+"-"+id).prop('checked',true);
								}else if(i.idRespuesta == 'NA'){
									$('#noaplica-'+i.capacidad+"-"+id).prop('checked',true);
								}

							}
						}
					},
					error:function(){
						console.log("error");
					}
				});
			});



		</script>}
		
	
@endpush

