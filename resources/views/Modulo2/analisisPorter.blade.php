@extends('layouts.nav2')


@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
	@include('modal/modal')
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
</header>
<section class="contenedorper3">
	<form id="form" action="{{ route('guardaporter'),auth()->user()->selected_planne }}" method="POST" role="form">
		<input type="hidden" name="idPlaneacion"  value=""  id="" class="idPlaneacion" >
		@csrf
		<div id="regiration_form">
			<fieldset class="opciones6">
				<table class="egt" id="tabla">
					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#exampleModal1"><span class="icon-info "></span></a>Poder de Negociación de los Proveedores</th>
						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat"><span class="icon-info "></span></a>Debilidad</th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat"><span class="icon-info "></span></a>Fortaleza</th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#exampleModal4" data-whatever="@fat"><span class="icon-info "></span></a>No aplica</th>
						</tr>
					</thead>
					<tbody >
						@foreach ($poderProvee as $poder)

						<tr class="formulario">
							<td colspan="2" data-column_name="nombre" data-id="{{$poder->id}}" data-name="{{$poder->nombre}}"style="text-align: center; width: 50%;" class="thCampo1" id="tdFormulario">{{$poder->nombre}}</td>
							<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
							<td   class="radio">
								<input type="hidden" id="gender" name="preguntas[]" value="{{ $poder->id}}">

								<input type="radio" name="{{$poder->id}}" id="debilidad-{{$poder->id. "-" .auth()->user()->selected_planne}}" value="aAlta" >
								<label for="debilidad-{{$poder->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$poder->id}}" id="debilidadb-{{$poder->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
								<label for="debilidadb-{{$poder->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$poder->id}}" id="debilidadc-{{$poder->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
								<label for="debilidadc-{{$poder->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$poder->id}}" id="oportunidad1-{{$poder->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
								<label for="oportunidad1-{{$poder->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$poder->id}}" id="oportunidad2-{{$poder->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
								<label for="oportunidad2-{{$poder->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$poder->id}}" id="oportunidad3-{{$poder->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
								<label for="oportunidad3-{{$poder->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$poder->id}}" id="noaplica-{{$poder->id. "-" .auth()->user()->selected_planne}}" value="NA">
								<label for="noaplica-{{$poder->id. "-" .auth()->user()->selected_planne}}">N</label>
							</td>
								{{-- error --}}
							{{-- <input type="hidden"  name="respuesta[]" value="{{$poder->id}}"> --}}
						</tr>
						@endforeach
					</tbody>
				</table>
				<button type="button" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
			</fieldset>
			<fieldset class="opciones6">
				<table  class="egt" id="tabla">
					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#exampleModal511"><span class="icon-info "></span></a>Poder de Negociación de los Clientes</th>
						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat"><span class="icon-info "></span></a>Debilidad</th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat"><span class="icon-info "></span></a>Fortaleza</th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#exampleModal4" data-whatever="@fat"><span class="icon-info "></span></a>No aplica</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($poderCliente as $cliente)

						<tr class="formulario">
							<td colspan="2" data-column_name="nombre" data-id="{{$cliente->id}}" data-name="{{$cliente->nombre}}"style="text-align: center;width: 50%;" class="thCampo1" id="tdFormulario">{{$cliente->nombre}}</td>
							<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
							<td   class="radio">
								<input type="hidden" id="gender" name="preguntas[]" value="{{ $cliente->id }}">

								<input type="radio" name="{{$cliente->id}}" id="debilidad-{{$cliente->id. "-" .auth()->user()->selected_planne}}" value="aAlta">
								<label for="debilidad-{{$cliente->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$cliente->id}}" id="debilidadb-{{$cliente->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
								<label for="debilidadb-{{$cliente->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$cliente->id}}" id="debilidadc-{{$cliente->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
								<label for="debilidadc-{{$cliente->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$cliente->id}}" id="oportunidad1-{{$cliente->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
								<label for="oportunidad1-{{$cliente->id. "-" .auth()->user()->selected_planne}}">A</label>

								<input type="radio" name="{{$cliente->id}}" id="oportunidad2-{{$cliente->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
								<label for="oportunidad2-{{$cliente->id. "-" .auth()->user()->selected_planne}}">M</label>

								<input type="radio" name="{{$cliente->id}}" id="oportunidad3-{{$cliente->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
								<label for="oportunidad3-{{$cliente->id. "-" .auth()->user()->selected_planne}}">B</label>
							</td>
							<td class="radio">
								<input type="radio" name="{{$cliente->id}}" id="noaplica-{{$cliente->id. "-" .auth()->user()->selected_planne}}" value="NA">
								<label for="noaplica-{{$cliente->id. "-" .auth()->user()->selected_planne}}">N</label>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
				<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
			</fieldset>
			<fieldset class="opciones6">
				<table  class="egt" id="tabla">
					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#exampleModal999"><span class="icon-info "></span></a>Productos Sustitutos</th>
						</tr>
						<tr>
							<th style="border: none !important;"></th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat"><span class="icon-info "></span></a>Debilidad</th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat"><span class="icon-info "></span></a>Fortaleza</th>
							<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#exampleModal4" data-whatever="@fat"><span class="icon-info "></span></a>No aplica</th>
						</tr>
					</thead>
					<tbody>
						<tr class="formulario">

							@foreach ($productoSustituto as $producto)

							<tr class="formulario">
								<td colspan="2" data-column_name="nombre" data-id="{{$producto->id}}" data-name="{{$producto->nombre}}"style="text-align: center;width: 50%;" class="thCampo1" id="tdFormulario">{{$producto->nombre}}</td>
								<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
								<td   class="radio">
									<input type="hidden" id="gender" name="preguntas[]" value="{{ $producto->id }}">

									<input type="radio" name="{{$producto->id}}" id="debilidad-{{$producto->id. "-" .auth()->user()->selected_planne}}" value="aAlta">
									<label for="debilidad-{{$producto->id. "-" .auth()->user()->selected_planne}}">A</label>

									<input type="radio" name="{{$producto->id}}" id="debilidadb-{{$producto->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
									<label for="debilidadb-{{$producto->id. "-" .auth()->user()->selected_planne}}">M</label>

									<input type="radio" name="{{$producto->id}}" id="debilidadc-{{$producto->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
									<label for="debilidadc-{{$producto->id. "-" .auth()->user()->selected_planne}}">B</label>
								</td>
								<td class="radio">
									<input type="radio" name="{{$producto->id}}" id="oportunidad1-{{$producto->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
									<label for="oportunidad1-{{$producto->id. "-" .auth()->user()->selected_planne}}">A</label>

									<input type="radio" name="{{$producto->id}}" id="oportunidad2-{{$producto->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
									<label for="oportunidad2-{{$producto->id. "-" .auth()->user()->selected_planne}}">M</label>

									<input type="radio" name="{{$producto->id}}" id="oportunidad3-{{$producto->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
									<label for="oportunidad3-{{$producto->id. "-" .auth()->user()->selected_planne}}">B</label>
								</td>
								<td class="radio">
									<input type="radio" name="{{$producto->id}}" id="noaplica-{{$producto->id. "-" .auth()->user()->selected_planne}}" value="NA">
									<label for="noaplica-{{$producto->id. "-" .auth()->user()->selected_planne}}">N</label>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
					<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
				</fieldset>
				<fieldset class="opciones6">
					<table  class="egt" id="tabla">
						<thead>
							<tr>
								<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#exampleModal134"><span class="icon-info "></span></a>Amenazas de Entrada de Nuevos Competidores</th>
							</tr>
							<tr>
								<th style="border: none !important;"></th>
								<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat"><span class="icon-info "></span></a>Debilidad</th>
								<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat"><span class="icon-info "></span></a>Fortaleza</th>
								<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#exampleModal4" data-whatever="@fat"><span class="icon-info "></span></a>No aplica</th>
							</tr>
						</thead>
						<tbody>
							<tr class="formulario">
								@foreach ($amenazaCompe as $amenaza)

								<tr class="formulario">
									<td colspan="2" data-column_name="nombre" data-id="{{$amenaza->id}}" data-name="{{$amenaza->nombre}}"style="text-align: center;width: 50%;" class="thCampo1" id="tdFormulario">{{$amenaza->nombre}}</td>
									<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
									<td   class="radio">
										<input type="hidden" id="gender" name="preguntas[]" value="{{ $amenaza->id }}">

										<input type="radio" name="{{$amenaza->id}}" id="debilidad-{{$amenaza->id. "-" .auth()->user()->selected_planne}}" value="aAlta">
										<label for="debilidad-{{$amenaza->id. "-" .auth()->user()->selected_planne}}">A</label>

										<input type="radio" name="{{$amenaza->id}}" id="debilidadb-{{$amenaza->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
										<label for="debilidadb-{{$amenaza->id. "-" .auth()->user()->selected_planne}}">M</label>

										<input type="radio" name="{{$amenaza->id}}" id="debilidadc-{{$amenaza->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
										<label for="debilidadc-{{$amenaza->id. "-" .auth()->user()->selected_planne}}">B</label>
									</td>
									<td class="radio">
										<input type="radio" name="{{$amenaza->id}}" id="oportunidad1-{{$amenaza->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
										<label for="oportunidad1-{{$amenaza->id. "-" .auth()->user()->selected_planne}}">A</label>

										<input type="radio" name="{{$amenaza->id}}" id="oportunidad2-{{$amenaza->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
										<label for="oportunidad2-{{$amenaza->id. "-" .auth()->user()->selected_planne}}">M</label>

										<input type="radio" name="{{$amenaza->id}}" id="oportunidad3-{{$amenaza->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
										<label for="oportunidad3-{{$amenaza->id. "-" .auth()->user()->selected_planne}}">B</label>
									</td>
									<td class="radio">
										<input type="radio" name="{{$amenaza->id}}" id="noaplica-{{$amenaza->id. "-" .auth()->user()->selected_planne}}" value="NA">
										<label for="noaplica-{{$amenaza->id. "-" .auth()->user()->selected_planne}}">N</label>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
						<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
					</fieldset>
					<fieldset class="opciones6">
						<table  class="egt" id="tabla">
							<thead>
								<tr>
									<th class="thCampo" colspan="2" style="text-align: center; background: #0AB5A0;border: none;color: white;" rowspan="2"><a id="boton10-11" class="button10-11" data-toggle="modal" data-target="#exampleModal135"><span class="icon-info "></span></a>Rivalidad Entre Competidores</th>
								</tr>
								<tr>
									<th style="border: none !important;"></th>
									<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton3-1" class="button3-4" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat"><span class="icon-info "></span></a>Debilidad</th>
									<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton4-1" class="button4-4" data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat"><span class="icon-info "></span></a>Fortaleza</th>
									<th class="thCampo_modulo2" style="text-align: center;background: #0AB5A0;border: none;color: white;"><a id="boton5-1" class="button5-4" data-toggle="modal" data-target="#exampleModal4" data-whatever="@fat"><span class="icon-info "></span></a>No aplica</th>
								</tr>
							</thead>
							<tbody>
								<tr class="formulario">
									@foreach ($rivaCompe as $riva)
									
									<tr class="formulario">
										<td colspan="2" data-column_name="nombre" data-id="{{$riva->id}}" data-name="{{$riva->nombre}}"style="text-align: center;width: 50%;" class="thCampo1" id="tdFormulario">{{$riva->nombre}}</td>
										<td><h5 style="color: #238276; font-weight: bold;">Es una</h5></td>
										<td   class="radio">
											<input type="hidden" id="gender" name="preguntas[]" value="{{ $riva->id }}">

											<input type="radio" name="{{$riva->id}}" id="debilidad-{{$riva->id. "-" .auth()->user()->selected_planne}}" value="aAlta">
											<label for="debilidad-{{$riva->id. "-" .auth()->user()->selected_planne}}">A</label>

											<input type="radio" name="{{$riva->id}}" id="debilidadb-{{$riva->id. "-" .auth()->user()->selected_planne}}" value="aMedia">
											<label for="debilidadb-{{$riva->id. "-" .auth()->user()->selected_planne}}">M</label>

											<input type="radio" name="{{$riva->id}}" id="debilidadc-{{$riva->id. "-" .auth()->user()->selected_planne}}" value="aBaja">
											<label for="debilidadc-{{$riva->id. "-" .auth()->user()->selected_planne}}">B</label>
										</td>
										<td class="radio">
											<input type="radio" name="{{$riva->id}}" id="oportunidad1-{{$riva->id. "-" .auth()->user()->selected_planne}}" value="oAlta">
											<label for="oportunidad1-{{$riva->id. "-" .auth()->user()->selected_planne}}">A</label>

											<input type="radio" name="{{$riva->id}}" id="oportunidad2-{{$riva->id. "-" .auth()->user()->selected_planne}}" value="oMedia">
											<label for="oportunidad2-{{$riva->id. "-" .auth()->user()->selected_planne}}">M</label>

											<input type="radio" name="{{$riva->id}}" id="oportunidad3-{{$riva->id. "-" .auth()->user()->selected_planne}}" value="oBaja">
											<label for="oportunidad3-{{$riva->id. "-" .auth()->user()->selected_planne}}">B</label>
										</td>
										<td class="radio">
											<input type="radio" name="{{$riva->id}}" id="noaplica-{{$riva->id. "-" .auth()->user()->selected_planne}}" value="NA">
											<label for="noaplica-{{$riva->id. "-" .auth()->user()->selected_planne}}">N</label>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
							<button type="submit" class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right" id="submitButton" >Guardar</button>
						</fieldset>
						<div class="infon">
							<a  id="boton1" data-toggle="modal" data-target="#exampleModal0" class="button2_agregar1" ><span class="icon-folder-plus"><div id="hover_agregar1">
								<h5>Agregar</h5></div></span>
							</a>
							<a id="boton2" class="button2" data-toggle="modal" data-target="#exampleModal001"><span class="icon-info "></span>
							</a>
						</div>
					</div>
				</form>
			</section>

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
			</div>
		</form>


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
	@push('script')
	<script>
		$(document).ready(function(){
			var planeacion = localStorage.getItem('id');
			$(".idPlaneacion").val(planeacion);
			console.log(planeacion);
		});

	</script>

	<script>

		$( document ).ready(function() {
			var id = localStorage.getItem('id');
			$.ajax({
				url:"/analisisporter/show/"+id,
				type:'get',
				success:function(data){
					console.log(data);


					if(data != null){
						for(i of data){

							if(i.idRespuesta == 'aAlta'){
								$('#debilidad-'+i.anaPorter+"-"+id).prop('checked',true);
							}else if(i.idRespuesta == 'aMedia'){
								$('#debilidadb-'+i.anaPorter+"-"+id).prop('checked',true);
							}else if(i.idRespuesta == 'aBaja'){
								$('#debilidadc-'+i.anaPorter+"-"+id).prop('checked',true);
							}else if(i.idRespuesta == 'oAlta'){
								$('#oportunidad1-'+i.anaPorter+"-"+id).prop('checked',true);
							}else if (i.idRespuesta == 'oMedia'){
								$('#oportunidad2-'+i.anaPorter+"-"+id).prop('checked',true);
							}else if(i.idRespuesta == 'oBaja'){
								$('#oportunidad2-'+i.anaPorter+"-"+id).prop('checked',true);
							}else if(i.idRespuesta == 'NA'){
								$('#noaplica-'+i.anaPorter+"-"+id).prop('checked',true);
							}

						}
					}
				},
				error:function(){
					console.log("error");
				}
			});
		});



	</script>
	@endpush


