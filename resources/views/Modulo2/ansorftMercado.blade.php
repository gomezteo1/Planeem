  
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
<section class="contenedorper5">
	<div id="regiration_form">
		<form method="post" name="formulario" id="form" role="from" action="{{route('penetracion_mercadoanf')}}">
			@csrf

		<input type="text" name="id_planeacion" value="{{$id_planeacion}}" style="display:none">
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Penetración de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach ($tipo_Penetracion as $tipo_Penetracion)
							@if($tipo_Penetracion->nombre == 'Telemercadeo' )
								<input type="text" name="id_tipo_Penetracion[]" value="{{$tipo_Penetracion->id_tipo_Penetracion}}" style="display:none">
								<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span> {{$tipo_Penetracion->nombre}}
							@endif
						</th>
						@endforeach
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center       ; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>
					@foreach ($DesaMerca as $DesaMerca)
					<tr id = 'material0{{$DesaMerca->id}}' class="formulario material0">
						<input type="text" name="id_tipo_preguntaansorfts[]" value="{{$DesaMerca->id}}" style="display:none">

					<td class="thCampo1" id="tdFormulario">{{$DesaMerca->nombre}}</td>
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name="Peso_Relativo[]" class="cantidad_req0" required onkeyup='obtTotalMat0({{$DesaMerca->id}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="Calificación[]"  class="valor_unitreq0"  required  onkeyup='obtTotalMat0({{$DesaMerca->id}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="Peso_Ponderado[]" class="valor_totreq0" required onchange='calcTotal1()' onkeypress="return solonumeros(event)"></td>
					</tr>
					@endforeach

				
					<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea name="totalCalificacion"   id="pesorpesoPonderado0" class="tablacamFortalezas" ></textarea></td>
						<td class="tdclassFortaleza"><textarea name="totalPuntuacion"  id="totalCalificación0" class="tablacamFortalezas  "></textarea></td>
						<td class="tdclass1Fortaleza"><textarea name="puntuacionPonderad1"  id="granTotal0" class="tablacamFortalezas totales"></textarea></td>
					</tr>
				</tbody>
			</table>
			<button type="button" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Penetración de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach ($tipo_Penetracion2 as $tipo_Penetracion2)
						@if($tipo_Penetracion2->nombre == 'Canales' )
							<input type="text" name="id_tipo_Penetracion[]" value="{{$tipo_Penetracion2->id_tipo_Penetracion}}" style="display:none">
							<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span> {{$tipo_Penetracion2->nombre}}
						@endif
					</th>
					@endforeach
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>
					@foreach ($DesaMerca2 as $DesaMerca2)
						<tr id = 'material2{{$DesaMerca2->id}}' class="formulario material2">
							<input type="text" name="id_tipo_preguntaansorfts[]" value="{{$DesaMerca2->id}}" style="display:none">

							<td class="thCampo1" id="tdFormulario">{{$DesaMerca2->nombre}}</td>
							<td style="border: none;"></td>
							<td class="tablaAnsorft"><input type="text" name="Peso_Relativo[]" required class="cantidad_req2"  onkeyup='obtTotalMat2({{$DesaMerca2->id}})' onkeypress="return solonumeros(event)"></td>
							<td class="tablaAnsorft"><input type="text" name="Calificación[]" required  class="valor_unitreq2" onkeyup='obtTotalMat2({{$DesaMerca2->id}})'onkeypress="return solonumeros(event)"></td>
							<td class="tablaAnsorft"><input type="text" name="Peso_Ponderado[]" required  class="valor_totreq2"  onchange='calcTotal2()'onkeypress="return solonumeros(event)"></td>
						</tr>
					@endforeach
				
					<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea name="totalCalificacion"   id="pesorpesoPonderado2" class="tablacamFortalezas" ></textarea></td>
						<td class="tdclassFortaleza"><textarea name="totalPuntuacion"  id="totalCalificación2" class="tablacamFortalezas  "></textarea></td>
						<td class="tdclass1Fortaleza"><textarea name="puntuacionPonderad1"  id="granTotal2" class="tablacamFortalezas totales"></textarea></td>
					</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Penetración de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach ($tipo_Penetracion3 as $tipo_Penetracion3)
						@if($tipo_Penetracion3->nombre == 'Canales' )
							<input type="text" name="id_tipo_Penetracion[]" value="{{$tipo_Penetracion3->id_tipo_Penetracion}}" style="display:none">
							<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span> {{$tipo_Penetracion3->nombre}}
						@endif
					</th>
					@endforeach
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span></th>
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>
					@foreach ($DesaMerca3 as $DesaMerca3)
							
					<tr id = 'material3{{$DesaMerca3->id}}' class="formulario material3">
						<td class="thCampo1" id="tdFormulario"> {{$DesaMerca3->nombre}}</td>
						<input type="text" name="id_tipo_preguntaansorfts[]" value="{{$DesaMerca3->id}}" style="display:none">


						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name="Peso_Relativo[]" id="pesoPonderado" class = 'cantidad_req3' required  onkeyup='obtTotalMat3({{$DesaMerca3->id}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo" class = 'valor_unitreq3' required  onkeyup='obtTotalMat3({{$DesaMerca3->id}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="Peso_Ponderado[]" id="calificacion" class = 'valor_totreq3' required  onchange='calcTotal3()' onkeypress="return solonumeros(event)"></td>
					</tr>
					@endforeach
				
					<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea name="totalCalificacion"   id="pesorpesoPonderado3" class="tablacamFortalezas" ></textarea></td>
						<td class="tdclassFortaleza"><textarea name="totalPuntuacion"  id="totalCalificación3" class="tablacamFortalezas  "></textarea></td>
						<td class="tdclass1Fortaleza"><textarea name="puntuacionPonderad1"  id="granTotal3" class="tablacamFortalezas totales"></textarea></td>
					</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Penetración de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach ($tipo_Penetracion4 as $tipo_Penetracion4)
						@if($tipo_Penetracion4->nombre == 'Posicionamiento' )
							<input type="text" name="id_tipo_Penetracion[]" value="{{$tipo_Penetracion4->id_tipo_Penetracion}}" style="display:none">
							<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span> {{$tipo_Penetracion4->nombre}}
						@endif
					</th>
					@endforeach
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>
					@foreach ($DesaMerca6 as $DesaMerca6)
					<tr id = 'material6{{$DesaMerca6->id}}' class="formulario material6">
						<td class="thCampo1" id="tdFormulario"> {{$DesaMerca6->nombre}}</td>
						<input type="text" name="id_tipo_preguntaansorfts[]" value="{{$DesaMerca6->id}}" style="display:none" >
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name="Peso_Relativo[]" id="pesoPonderado"  class = 'cantidad_req6' required  onkeyup='obtTotalMat6({{$DesaMerca6->id}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo"  class = 'valor_unitreq6 'required   onkeyup='obtTotalMat6({{$DesaMerca6->id}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="Peso_Ponderado[]" id="calificacion" class = 'valor_totreq6' required  onchange='calcTotal6()' onkeypress="return solonumeros(event)"></td>
					</tr>
				@endforeach
				
					<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea readonly name="totalCalificación"    id="pesorpesoPonderado6" class="tablacamFortalezas" ></textarea></td>
						<td class="tdclassFortaleza"><textarea readonly name="totalPuntuacion"  id="totalCalificación6" class="tablacamFortalezas  "></textarea></td>
						<td class="tdclass1Fortaleza"><textarea readonly name="puntuacionPonderad"  id="granTotal6" class="tablacamFortalezas totales"></textarea></td>
					</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Penetración de Mercado</th>
						<th colspan="1"style="border: none;"></th>
					@foreach ($tipo_Penetracion5 as $tipo_Penetracion5)
						@if($tipo_Penetracion5->nombre == 'E-Commerce' )
							<input type="text" name="id_tipo_Penetracion[]" value="{{$tipo_Penetracion5->id_tipo_Penetracion}}" style="display:none">
							<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span> {{$tipo_Penetracion5->nombre}}
						@endif
					</th>
					@endforeach
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>
					@foreach ($DesaMerca4 as $DesaMerca4)
					<tr id = 'material4{{$DesaMerca4->id}}' class="formulario material4">
						<td class="thCampo1" id="tdFormulario"> {{$DesaMerca4->nombre}}</td>
						<input type="text" name="id_tipo_preguntaansorfts[]" value="{{$DesaMerca4->id}}" style="display:none" >
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name="Peso_Relativo[]" id="pesoPonderado" class = 'cantidad_req4' required  onkeyup='obtTotalMat4({{$DesaMerca4->id}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo" class = 'valor_unitreq4' required  onkeyup='obtTotalMat4({{$DesaMerca4->id}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="Peso_Ponderado[]" id="calificacion" class = 'valor_totreq4' required  onchange='calcTotal4()' onkeypress="return solonumeros(event)"></td>
					</tr>
					@endforeach
					<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea readonly name="totalCalificación"   id="pesorpesoPonderado4" class="tablacamFortalezas" onkeypress="return solonumeros(event)"></textarea></td>
						<td class="tdclassFortaleza"><textarea readonly name="totalPuntuacion"  id="totalCalificación4" class="tablacamFortalezas  " onkeypress="return solonumeros(event)"></textarea></td>
						<td class="tdclass1Fortaleza"><textarea readonly name="puntuacionPonderad"  id="granTotal4" class="tablacamFortalezas totales" onkeypress="return solonumeros(event)"></textarea></td>
					</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Penetración de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach ($tipo_Penetracion6 as $tipo_Penetracion6)
						@if($tipo_Penetracion6->nombre == 'Personal' )
							<input type="text" name="id_tipo_Penetracion[]" value="{{$tipo_Penetracion6->id_tipo_Penetracion}}" style="display:none">
							<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span> {{$tipo_Penetracion6->nombre}}
						@endif
					</th>
					@endforeach
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>
				<tbody>
						@foreach ($DesaMerca5 as $DesaMerca5)
						<tr id = 'material5{{$DesaMerca5->id}}' class="formulario material5">
							<input type="text" name="id_tipo_preguntaansorfts[]" value="{{$DesaMerca5->id}}" style="display:none" >
	
							<td class="thCampo1" id="tdFormulario"> {{$DesaMerca5->nombre}}</td>
							<td style="border: none;"></td>
							<td class="tablaAnsorft"><input type="text" name="Peso_Relativo[]" id="pesoPonderado" class = 'cantidad_req5' required  onkeyup='obtTotalMat5({{$DesaMerca5->id}})' onkeypress="return solonumeros(event)"></td>
							<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo" class = 'valor_unitreq5' required  onkeyup='obtTotalMat5({{$DesaMerca5->id}})' onkeypress="return solonumeros(event)"></td>
							<td class="tablaAnsorft"><input type="text" name="Peso_Ponderado[]" id="calificacion" class = 'valor_totreq5' required  onchange='calcTotal5()' onkeypress="return solonumeros(event)"></td>
						</tr>
						@endforeach

						<tr class="totalFortaleza">
							<th >Total</th>
							<td style="border: none;"></td>
							<td class="tdclassFortaleza"><textarea readonly name="totalCalificación"   id="pesorpesoPonderado5" class="tablacamFortalezas" onkeypress="return solonumeros(event)"></textarea></td>
							<td class="tdclassFortaleza"><textarea readonly name="totalPuntuacion"  id="totalCalificación5" class="tablacamFortalezas  " onkeypress="return solonumeros(event)"></textarea></td>
							<td class="tdclass1Fortaleza"><textarea readonly name="puntuacionPonderad"  id="granTotal5" class="tablacamFortalezas totales" onkeypress="return solonumeros(event)"></textarea></td>
						</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="submit" class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>
		</fieldset>
	</form>
		<div class="infon">
			<a  id="boton1" data-toggle="modal" data-target="#exampleModal0" class="button2_agregar1" ><span class="icon-folder-plus"><div id="hover_agregar1">
				<h5>Agregar</h5></div></span>
			</a>
			<a id="boton2" class="button2" data-toggle="modal" data-target="#exampleModal001"><span class="icon-info "></span>
			</a>
		</div>
	</div>
</section>

{{-- aca va el contenido de los modales pequeños --}}
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
				<ol style="line-height: 17px; margin-top: -19px;">
					<b style="color: black; font-weight: bold;">El procedimiento consiste en los siguientes pasos:</b>
					<br>
					<li>1. Se obtiene información de las empresas competidoras que serán incluidas en la MPC.</li><br>
					<li>2. Se enlistan los aspectos o factores a considerar, que bien pueden ser elementos fuertes o débiles, según sea el caso,
					de cada empresa u organización analizada</li>.<br>
					<li>3. Se asigna un peso a cada uno de estos factores.</li><br>
					<li>4. A cada una de las organizaciones enlistadas en la tabla se le asigna una calificación, siendo los valores de las<br>
						calificaciones los siguientes:
						<ol width="100%" style="text-align: center">
							<li>1= Debilidad principal</li><br>
							<li>2= Debilidad Menor</li><br>
							<li>3= Fortaleza menor</li><br>
							<li>4= Fortaleza mayor</li><br>
						</ol>
					</li><br>

					<b>

					</b>
					<li>5. Se multiplica el peso de la segunda columna por cada una de las calificaciones de las organizaciones o empresas
					competidoras, obteniéndose el peso ponderado correspondiente.</li><br>
					<li>6. Se suman los totales de la columna del peso (debe ser de 1.00) y de las columnas de los pesos ponderados
					(Ponce, 2007, pág. 120).</li>
				</ol>
			</div>
		</div>
	</div>
</div>
</section>
@yield('script')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 

<script>    
	$(document).ready(function()
	{
		$("#exampleModalScrollable").modal("show");
	});
</script>

<script>
	function guardar(){
		if (document.getElementById('Para_paso1').value == 0) {
			document.getElementById("id").innerHTML = "error";
		}else{
			var miDato = document.getElementById('Para_paso1').value;
			localStorage.setItem('Para',miDato);
			localStorage.setItem('Progreso','10%');
		}
	};
</script>



<script>
	var Progreso = localStorage.getItem('Progreso')
	document.getElementById("id").style.width=Progreso;
	document.getElementById("id").innerHTML = Progreso;
</script>

@endsection

@push('script')


<script src=" {{asset('js/toastr.js')}}"></script>
<script src="{{asset('js/solo_numeros.js')}}"></script>
<script>
    //fieldset 1
    function obtTotalMat0(index){
        if($("#material0"+index+" .cantidad_req0").val() > 1 || $("#material0"+index+" .cantidad_req0").val() < 0 ){
            toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
        }else if($("#material0"+index+" .valor_unitreq0").val() > 4 || $("#material0"+index+" .valor_unitreq0").val() > 4){
			toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
        }else{
         
            var Relativo  = $("#material0"+index+" .cantidad_req0").val();
           
            var Calificación = $("#material0"+index+" .valor_unitreq0").val();
      
            var tot = ($("#material0"+index+" .cantidad_req0").val()) * $("#material0"+index+" .valor_unitreq0").val();
           $("#material0"+index+" .valor_totreq0").val(tot);

        }
        calcTotal0();
    }
    
    function calcTotal0() {
            var tot = 0;
            var Relativo = 0;
            var Calificación = 0;

            $(".material0 .valor_totreq0").each(function () {
                tot+=Number($(this).val());
            });

            $(".material0 .cantidad_req0").each(function () {
                Relativo+=Number($(this).val());
            });

            $(".material0 .valor_unitreq0").each(function () {
                Calificación+=Number($(this).val());
            });

            $("#granTotal0").val(tot);
            $("#pesorpesoPonderado0").val(Relativo);
            $("#totalCalificación0").val(Calificación);

			if( $("#pesorpesoPonderado0").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
			}
			

			var PuntuaciónPonderada = parseFloat(localStorage.getItem('PuntuaciónPonderada'));

			var pesorpesoPonderado = parseFloat ($("#granTotal0").val());

			var suma =   PuntuaciónPonderada + pesorpesoPonderado;


			console.log(suma);


			if(suma >= 4){
				toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0)', '!Hola!')
			}else{
				localStorage.getItem('PuntuaciónPonderada',suma)
			}

		
            }

	</script>
	
	<script>
		//fieldset 2
		function obtTotalMat2(index){
			if($("#material2"+index+" .cantidad_req2").val() > 1 || $("#material2"+index+" .cantidad_req2").val() < 0 ){
				toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
			}else if($("#material2"+index+" .valor_unitreq2").val() > 4 || $("#material2"+index+" .valor_unitreq2").val() > 4){
				toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
			}else{
			 
				var Relativo  = $("#material2"+index+" .cantidad_req2").val();
			   
				var Calificación = $("#material2"+index+" .valor_unitreq2").val();
		  
				var tot = ($("#material2"+index+" .cantidad_req2").val()) * $("#material2"+index+" .valor_unitreq2").val();
			   $("#material2"+index+" .valor_totreq2").val(tot);
	
			}
			calcTotal2();
		}
		
		function calcTotal2() {
				var tot = 0;
				var Relativo = 0;
				var Calificación = 0;
	
				$(".material2 .valor_totreq2").each(function () {
					tot+=Number($(this).val());
				});
	
				$(".material2 .cantidad_req2").each(function () {
					Relativo+=Number($(this).val());
				});
	
				$(".material2 .valor_unitreq2").each(function () {
					Calificación+=Number($(this).val());
				});
	
				$("#granTotal2").val(tot);
				$("#pesorpesoPonderado2").val(Relativo);
				$("#totalCalificación2").val(Calificación);
	
				if( $("#pesorpesoPonderado2").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
			}
			

			var PuntuaciónPonderada = parseFloat(localStorage.getItem('PuntuaciónPonderada'));

			var pesorpesoPonderado = parseFloat ($("#granTotal2").val());

			var suma =   PuntuaciónPonderada + pesorpesoPonderado;


			console.log(suma);


			if(suma >= 4){
				toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0)', '!Hola!')
			}else{
				localStorage.getItem('PuntuaciónPonderada',suma)
			}

		
				}
	
		</script>
<script>
	//fieldset 3
	function obtTotalMat3(index){
		if($("#material3"+index+" .cantidad_req3").val() > 1|| $("#material3"+index+" .cantidad_req3").val() < 0 ){
			toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
		}else if($("#material3"+index+" .valor_unitreq3").val() > 4 || $("#material3"+index+" .valor_unitreq3").val() > 4){
			toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
		}else{
		 
			var Relativo  = $("#material3"+index+" .cantidad_req3").val();
		   
			var Calificación = $("#material3"+index+" .valor_unitreq3").val();
	  
			var tot = ($("#material3"+index+" .cantidad_req3").val()) * $("#material3"+index+" .valor_unitreq3").val();
		   $("#material3"+index+" .valor_totreq3").val(tot);

		}
		calcTotal3();
	}
	function calcTotal3() {
			var tot = 0;
			var Relativo = 0;
			var Calificación = 0;

			$(".material3 .valor_totreq3").each(function () {
				tot+=Number($(this).val());
			});

			$(".material3 .cantidad_req3").each(function () {
				Relativo+=Number($(this).val());
			});

			$(".material3 .valor_unitreq3").each(function () {
				Calificación+=Number($(this).val());
			});

			$("#granTotal3").val(tot);
			$("#pesorpesoPonderado3").val(Relativo);
			$("#totalCalificación3").val(Calificación);

			if( $("#pesorpesoPonderado3").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
			}
			

			var PuntuaciónPonderada = parseFloat(localStorage.getItem('PuntuaciónPonderada'));

			var pesorpesoPonderado = parseFloat ($("#granTotal3").val());

			var suma =   PuntuaciónPonderada + pesorpesoPonderado;


			console.log(suma);


			if(suma >= 4){
				toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0)', '!Hola!')
			}else{
				localStorage.getItem('PuntuaciónPonderada',suma)
			}

		
			}
	</script>
</form>

<script>
	//fieldset 4
	function obtTotalMat4(index){
		if($("#material4"+index+" .cantidad_req4 ").val() > 1 || $("#material4"+index+" .cantidad_req4 ").val() < 0 ){
			toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
		}else if($("#material4"+index+" .valor_unitreq4").val() > 4 || $("#material4"+index+" .valor_unitreq4").val() > 4){
			toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
		}else{
		 
			var Relativo  = $("#material4"+index+" .cantidad_req4 ").val();
		   
			var Calificación = $("#material4"+index+" .valor_unitreq4").val();
	  
			var tot = ($("#material4"+index+" .cantidad_req4 ").val()) * $("#material4"+index+" .valor_unitreq4").val();
		   $("#material4"+index+" .valor_totreq4").val(tot);

		   

		}
		calcTotal4();
	}
	
	function calcTotal4() {
			var tot = 0;
			var Relativo = 0;
			var Calificación = 0;

			$(".material4 .valor_totreq4").each(function () {
				tot+=Number($(this).val());
			});

			$(".material4 .cantidad_req4").each(function () {
				Relativo+=Number($(this).val());
			});

			$(".material4 .valor_unitreq4").each(function () {
				Calificación+=Number($(this).val());
			});

			$("#granTotal4").val(tot);
			$("#pesorpesoPonderado4").val(Relativo);
			$("#totalCalificación4").val(Calificación);

			if( $("#pesorpesoPonderado4").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
			}
			
			var PuntuaciónPonderada = parseFloat(localStorage.getItem('PuntuaciónPonderada'));

			var pesorpesoPonderado = parseFloat ($("#granTotal4").val());

			var suma =   PuntuaciónPonderada + pesorpesoPonderado;


			console.log(suma);


			if(suma >= 4){
				toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0)', '!Hola!')
			}else{
				localStorage.getItem('PuntuaciónPonderada',suma)
			}

		
			}

	</script>



<script>
	//fieldset 5
	function obtTotalMat5(index){
		if($("#material5"+index+" .cantidad_req5 ").val() > 1 || $("#material5"+index+" .cantidad_req5 ").val() < 0 ){
			toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
		}else if($("#material5"+index+" .valor_unitreq5").val() > 4 || $("#material5"+index+" .valor_unitreq5").val() > 4){
			toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
		}else{
		 
			var Relativo  = $("#material5"+index+" .cantidad_req5 ").val();
		   
			var Calificación = $("#material5"+index+" .valor_unitreq5").val();
	  
			var tot = ($("#material5"+index+" .cantidad_req5 ").val())/1 * $("#material5"+index+" .valor_unitreq5").val();
		   $("#material5"+index+" .valor_totreq5").val(tot);

		}
		calcTotal5();
	}
	
	function calcTotal5() {
			var tot = 0;
			var Relativo = 0;
			var Calificación = 0;

			$(".material5 .valor_totreq5").each(function () {
				tot+=Number($(this).val());
			});

			$(".material5 .cantidad_req5").each(function () {
				Relativo+=Number($(this).val());
			});

			$(".material5 .valor_unitreq5").each(function () {
				Calificación+=Number($(this).val());
			});

			$("#granTotal5").val(tot);
			$("#pesorpesoPonderado5").val(Relativo);
			$("#totalCalificación5").val(Calificación);


			
			if( $("#pesorpesoPonderado5").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
            }
		
			var PuntuaciónPonderada = parseFloat(localStorage.getItem('PuntuaciónPonderada'));

			var pesorpesoPonderado = parseFloat ($("#granTotal5").val());

			var suma =   PuntuaciónPonderada + pesorpesoPonderado;


			console.log(suma);


			if(suma >= 4){
				toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0)', '!Hola!')
			}else{
				localStorage.getItem('PuntuaciónPonderada',suma)
			}


			}

	</script>


<script>
	//fieldset 7
	function obtTotalMat7(index){
		if($("#material7"+index+" .cantidad_req7 ").val() > 1 || $("#material7"+index+" .cantidad_req7 ").val() < 0 ){
			toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
		}else if($("#material7"+index+" .valor_unitreq7").val() > 4 || $("#material7"+index+" .valor_unitreq7").val() > 4){
			toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
		}else{
		 
			var Relativo  = $("#material7"+index+" .cantidad_req7 ").val();
		   
			var Calificación = $("#material7"+index+" .valor_unitreq7").val();
	  
			var tot = ($("#material7"+index+" .cantidad_req7 ").val())* $("#material7"+index+" .valor_unitreq7").val();
		   $("#material7"+index+" .valor_totreq7").val(tot);

		}
		calcTotal7();
	}
	
	function calcTotal7() {
			var tot = 0;
			var Relativo = 0;
			var Calificación = 0;

			$(".material7 .valor_totreq7").each(function () {
				tot+=Number($(this).val());
			});

			$(".material7 .cantidad_req7").each(function () {
				Relativo+=Number($(this).val());
			});

			$(".material7 .valor_unitreq7").each(function () {
				Calificación+=Number($(this).val());
			});

			$("#granTotal7").val(tot);
			$("#pesorpesoPonderado7").val(Relativo);
			$("#totalCalificación7").val(Calificación);


			
				if( $("#pesorpesoPonderado7").val() > 1){
								toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
						}


						var PuntuaciónPonderada = parseFloat(localStorage.getItem('PuntuaciónPonderada'));

			var pesorpesoPonderado = parseFloat ($("#granTotal7").val());

			var suma =   PuntuaciónPonderada + pesorpesoPonderado;


			console.log(suma);


			if(suma >= 4){
				toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0)', '!Hola!')
			}else{
				localStorage.getItem('PuntuaciónPonderada',suma)
			}

		
			}

	</script>





<script>
	//fieldset 6
	function obtTotalMat6(index){
		if($("#material6"+index+" .cantidad_req6 ").val() > 1|| $("#material6"+index+" .cantidad_req6 ").val() < 0 ){
			toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
		}else if($("#material6"+index+" .valor_unitreq6").val() > 4 || $("#material6"+index+" .valor_unitreq6").val() > 4){
			toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
		}else{
		 
			var Relativo  = $("#material6"+index+" .cantidad_req6 ").val();
		   
			var Calificación = $("#material6"+index+" .valor_unitreq6").val();
	  
			var tot = ($("#material6"+index+" .cantidad_req6 ").val()) * $("#material6"+index+" .valor_unitreq6").val();
		   $("#material6"+index+" .valor_totreq6").val(tot);

		}
		calcTotal6();
	}
	
	function calcTotal6() {
			var tot = 0;
			var Relativo = 0;
			var Calificación = 0;

			$(".material6 .valor_totreq6").each(function () {
				tot+=Number($(this).val());
			});

			$(".material6 .cantidad_req6").each(function () {
				Relativo+=Number($(this).val());
			});

			$(".material6 .valor_unitreq6").each(function () {
				Calificación+=Number($(this).val());
			});

			$("#granTotal6").val(tot);
			$("#pesorpesoPonderado6").val(Relativo);
			$("#totalCalificación6").val(Calificación);


			
			if( $("#pesorpesoPonderado6").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
			}
			
			var PuntuaciónPonderada = parseFloat(localStorage.getItem('PuntuaciónPonderada'));

			var pesorpesoPonderado = parseFloat ($("#granTotal6").val());

			var suma =   PuntuaciónPonderada + pesorpesoPonderado;


			console.log(suma);


			if(suma >= 4 ){
				toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0)', '!Hola!')
			}else{
				localStorage.getItem('PuntuaciónPonderada',suma)

			}


			

		
			}

	</script>





@endpush