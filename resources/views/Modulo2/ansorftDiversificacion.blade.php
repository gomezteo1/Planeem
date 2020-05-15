@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')

	@include('modal/modal')
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>

</header>
<section class="contenedorper5">

	@if($cantidadMarca === 0 )
	<form method="post" name="formulario" id="form" role="from" action="{{route('ansorftDiversificacion')}}">
		@else
		<form method="post" name="formulario"  role="from" action="{{route('ansorftDiversificacion')}}">
	@endif
		@csrf
	<input type="text" style="display:none" name="id_Planeacion" value="{{$planeacion}}">
	<div id="regiration_form">
		<!--fieldset1-->
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Penetración de Mercado</th>
		
						<th colspan="1"style="border: none;"></th>

						@foreach ($Penetracion_tipo as $Penetracion_tipo)
							@if ($Penetracion_tipo->name_tipo_Penetración === "Adquisición o Fusión de Empresas")
							<input style="display:none" type="text" name="id_tipo_Penetración[]" value="{{$Penetracion_tipo->id_tipo_Penetración}}">
							<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$Penetracion_tipo->name_tipo_Penetración}}</th>
							@endif	
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
					@if($Adquisicion == null )
					
					@foreach ($Adquisicion as $Adquisicion)
						<tr id = 'material0{{$Adquisicion->id_penetracion_mercadoanf}}' class="formulario material0">
							<td class="thCampo1" id="tdFormulario"> {{$Adquisicion->name_penetracion_mercadoanf}}</td>
							<input type="text" name="id_penetracion_mercadoanf[]" value="{{$Adquisicion->id_penetracion_mercadoanf}}" style="display:none" >

							<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name="pesoRelativo[]" id="pesoPonderado"  class = 'cantidad_req0' value="{{$Adquisicion->Peso_Relativo}}" required  onkeyup='obtTotalMat0({{$Adquisicion->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
							<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo" class = 'valor_unitreq0' value="{{$Adquisicion->Calificación}}" required  onkeyup='obtTotalMat0({{$Adquisicion->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
							<td class="tablaAnsorft"><input type="text" name="pesoPonderado[]" id="calificacion" class = 'valor_totreq0' value="{{$Adquisicion->Peso_Ponderado}}" required  onchange='calcTotal0()' onkeypress="return solonumeros(event)"></td>
						</tr>
						@endforeach
						
						@else

						@foreach ($penetracion_mercadoanf as $penetracion_mercadoanf1)
					<tr id = 'material0{{$penetracion_mercadoanf1->id_penetracion_mercadoanf}}' class="formulario material0">
					<input type="text" name="id_penetracion_mercadoanf[]" value="{{$penetracion_mercadoanf1->id_penetracion_mercadoanf}}" style="display:none" >
						<td class="thCampo1" id="tdFormulario"> {{$penetracion_mercadoanf1->name_penetracion_mercadoanf}}</td>
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name="pesoRelativo[]" id="pesoPonderado" class = 'cantidad_req0' onkeyup='obtTotalMat0({{$penetracion_mercadoanf1->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo" class = 'valor_unitreq0' onkeyup='obtTotalMat0({{$penetracion_mercadoanf1->id_penetracion_mercadoanf}})'onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="pesoPonderado[]" id="calificacion" class = 'valor_totreq0' onchange='calcTotal1()' onkeypress="return solonumeros(event)"></td>
					</tr>
					@endforeach
						
					@endif
				
					

					<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea readonly name="totalCalificación"   id="pesorpesoPonderado0"  class="tablacamFortalezas" onkeypress="return solonumeros(event)"></textarea></td>
						<td class="tdclassFortaleza"><textarea readonly name="totalPuntuacion"  	  id="totalCalificación0" class="tablacamFortalezas  "onkeypress="return solonumeros(event)"></textarea></td>
						<td class="tdclass1Fortaleza"><textarea readonly name="puntuacionPonderad" id="granTotal0" class="tablacamFortalezas totales" onkeypress="return solonumeros(event)"></textarea></td>
					</tr>
				</tbody>
			</table>
			<button type="button" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>


		{{-- fieldset 2 --}}
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Penetración de Mercado</th>
						<th colspan="1"style="border: none;"></th>

					@foreach ($Penetracion_tipo2 as $Penetracion_tipo2)
					@if ($Penetracion_tipo2->name_tipo_Penetración == "Adquisición de Marca")
					<input style="display:none" type="text" name="id_tipo_Penetración[]" value="{{$Penetracion_tipo2->id_tipo_Penetración}}">
					<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$Penetracion_tipo2->name_tipo_Penetración}}</th>
					@endif	
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
					@if($cantidadMarca === 0 )
					@foreach ($penetracion_mercadoanf as $penetracion_mercadoanf2)
					<input type="text" name="id_penetracion_mercadoanf[]" value="{{$penetracion_mercadoanf2->id_penetracion_mercadoanf}}" style="display:none" >

					<tr id = 'material2{{$penetracion_mercadoanf2->id_penetracion_mercadoanf}}' class="formulario material2">
						<td class="thCampo1" id="tdFormulario"> {{$penetracion_mercadoanf2->name_penetracion_mercadoanf}}</td>
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name="pesoRelativo[]" id="pesoPonderado" class = 'cantidad_req2' required  onkeyup='obtTotalMat2({{$penetracion_mercadoanf2->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo" class = 'valor_unitreq2' required  onkeyup='obtTotalMat2({{$penetracion_mercadoanf2->id_penetracion_mercadoanf}})'onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="pesoPonderado[]" id="calificacion" class = 'valor_totreq2' required   onchange='calcTotal2()'onkeypress="return solonumeros(event)"></td>
					</tr>
					@endforeach
						
						@else

						@foreach ($Marca as $Marca)
						<tr id = 'material2{{$Marca->id_penetracion_mercadoanf}}' class="formulario material2">
							<td class="thCampo1" id="tdFormulario"> {{$Marca->name_penetracion_mercadoanf}}</td>
							<input type="text" name="id_penetracion_mercadoanf[]" value="{{$Marca->id_penetracion_mercadoanf}}" style="display:none" >
							<td style="border: none;"></td>
							<td class="tablaAnsorft"><input type="text" name="pesoRelativo[]" id="pesoPonderado" class = 'cantidad_req2' value="{{$Marca->Peso_Relativo}}" required  onkeyup='obtTotalMat2({{$Marca->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
							<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo" class = 'valor_unitreq2'value="{{$Marca->Calificación}}" required  onkeyup='obtTotalMat2({{$Marca->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
							<td class="tablaAnsorft"><input type="text" name="pesoPonderado[]" id="calificacion" class = 'valor_totreq2' value="{{$Marca->Peso_Ponderado}}" required  onchange='calcTotal2()' onkeypress="return solonumeros(event)"></td> 
						</tr>
						@endforeach

					@endif
		
					<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea readonly name="totalCalificación"   id="pesorpesoPonderado2" class="tablacamFortalezas" onkeypress="return solonumeros(event)"></textarea></td>
						<td class="tdclassFortaleza"><textarea readonly name="totalPuntuacion"  id="totalCalificación2" class="tablacamFortalezas  " onkeypress="return solonumeros(event)"></textarea></td>
						<td class="tdclass1Fortaleza"><textarea readonly name="puntuacionPonderad"  id="granTotal2" class="tablacamFortalezas totales" onkeypress="return solonumeros(event)"></textarea></td>
					</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>

		{{-- fieldset 3 --}}
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Penetración de Mercado</th>
						<th colspan="1"style="border: none;"></th> 
						  
						@foreach ($Penetracion_tipo3 as $Penetracion_tipo3)
						@if ($Penetracion_tipo3->name_tipo_Penetración == "Nuevos Nichos de Mercado")
						<input style="display:none" type="text" name="id_tipo_Penetración[]" value="{{$Penetracion_tipo3->id_tipo_Penetración}}">
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$Penetracion_tipo3->name_tipo_Penetración}}</th>
						@endif	
					@endforeach
					</tr>

		
					<tr >

						<th colspan="2" style="border: none;"></th>
                        
						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr >

				</thead>
				<tbody>
					@if($cantidadMercado == 0 )
				
							@foreach ($penetracion_mercadoanf as $penetracion_mercadoanf3)
						<tr id = 'material3{{$penetracion_mercadoanf3->id_penetracion_mercadoanf}}' class="formulario material3">
							<td class="thCampo1" id="tdFormulario"> {{$penetracion_mercadoanf3->name_penetracion_mercadoanf}}</td>
							<input type="text" name="id_penetracion_mercadoanf[]" value="{{$penetracion_mercadoanf3->id_penetracion_mercadoanf}}" style="display:none" >

							<td style="border: none;"></td>
							<td class="tablaAnsorft"><input type="text" name="pesoRelativo[]" id="pesoPonderado" class = 'cantidad_req3' required  onkeyup='obtTotalMat3({{$penetracion_mercadoanf3->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
							<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo" class = 'valor_unitreq3' required  onkeyup='obtTotalMat3({{$penetracion_mercadoanf3->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
							<td class="tablaAnsorft"><input type="text" name="pesoPonderado[]" id="calificacion" class = 'valor_totreq3' required  onchange='calcTotal3()' onkeypress="return solonumeros(event)"></td>
						</tr>
						@endforeach
						@else

						@foreach ($Mercado as $Mercado)
						<tr id = 'material3{{$Mercado->id_penetracion_mercadoanf}}' class="formulario material3">
							<td class="thCampo1" id="tdFormulario"> {{$Mercado->name_penetracion_mercadoanf}}</td>
							<input type="text" name="id_penetracion_mercadoanf[]" value="{{$Mercado->id_penetracion_mercadoanf}}" style="display:none" >

							<td style="border: none;"></td>
							<td class="tablaAnsorft"><input type="text" name="pesoRelativo[]" id="pesoPonderado" value="{{$Mercado->Peso_Relativo}}"  class = 'cantidad_req3' required  onkeyup='obtTotalMat3({{$Mercado->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
							<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo" value="{{$Mercado->Calificación}}" class = 'valor_unitreq3' required  onkeyup='obtTotalMat3({{$Mercado->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
							<td class="tablaAnsorft"><input type="text" name="pesoPonderado[]" id="calificacion" value="{{$Mercado->Peso_Ponderado}}" class = 'valor_totreq3' required  onchange='calcTotal3()' onkeypress="return solonumeros(event)"></td>
						</tr>
						@endforeach

					
					@endif
		
					<tr class="totalFortaleza">
						<th >Total</th>
						<td style="border: none;"></td>
						<td class="tdclassFortaleza"><textarea readonly name="totalCalificación"   id="pesorpesoPonderado3" class="tablacamFortalezas" onkeypress="return solonumeros(event)"></textarea></td>
						<td class="tdclassFortaleza"><textarea readonly name="totalPuntuacion"  id="pesorpesoPonderado3" class="tablacamFortalezas  " onkeypress="return solonumeros(event)"></textarea></td>
						<td class="tdclass1Fortaleza"><textarea readonly name="puntuacionPonderad"  id="granTotal3" class="tablacamFortalezas totales" onkeypress="return solonumeros(event)"></textarea></td>
					</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		{{-- fieldset 4 --}}
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Penetración de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach ($Penetracion_tipo4 as $Penetracion_tipo4)
						@if ($Penetracion_tipo4->name_tipo_Penetración == "Investigación")
						<input style="display:none" type="text" name="id_tipo_Penetración[]" value="{{$Penetracion_tipo4->id_tipo_Penetración}}">
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$Penetracion_tipo4->name_tipo_Penetración}}</th>
						@endif	
						@endforeach
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Relativo<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Peso Ponderado<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorft2"></span></th>

					</tr>

				</thead>

				@if($cantidadInvestigacion === 0)
						@foreach ($penetracion_mercadoanf as $penetracion_mercadoanf4)
						<tr id = 'material4{{$penetracion_mercadoanf4->id_penetracion_mercadoanf}}' class="formulario material4">
							<td class="thCampo1" id="tdFormulario"> {{$penetracion_mercadoanf4->name_penetracion_mercadoanf}}</td>
							<input type="text" name="id_penetracion_mercadoanf[]" value="{{$penetracion_mercadoanf4->id_penetracion_mercadoanf}}" style="display:none" >

							<td style="border: none;"></td>
							<td class="tablaAnsorft"><input type="text" name="pesoRelativo[]" id="pesoPonderado" class = 'cantidad_req4' required  onkeyup='obtTotalMat4({{$penetracion_mercadoanf4->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
							<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo" class = 'valor_unitreq4' required  onkeyup='obtTotalMat4({{$penetracion_mercadoanf4->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
							<td class="tablaAnsorft"><input type="text" name="pesoPonderado[]" id="calificacion" class = 'valor_totreq4' required  onchange='calcTotal4()' onkeypress="return solonumeros(event)"></td>
						</tr>
						@endforeach
				@else

				@foreach ($Investigacion as $Investigacion)
				<tr id = 'material4{{$Investigacion->id_penetracion_mercadoanf}}' class="formulario  material4">
					<td class="thCampo1" id="tdFormulario"> {{$Investigacion->name_penetracion_mercadoanf}}</td>
					<input type="text" name="id_penetracion_mercadoanf[]" value="{{$Investigacion->id_penetracion_mercadoanf}}" style="display:none" >

					<td style="border: none;"></td>
					<td class="tablaAnsorft"><input type="text" name="pesoRelativo[]" id="pesoPonderado"  value="{{$Investigacion->Peso_Relativo}}" required   class = 'cantidad_req4' onkeyup='obtTotalMat4({{$Investigacion->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
					<td class="tablaAnsorft"><input type="text" name="Calificación[]"  id="pesoRelativo" value="{{$Investigacion->Calificación}}" required  class = 'valor_unitreq4' onkeyup='obtTotalMat4({{$Investigacion->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
					<td class="tablaAnsorft"><input type="text" name="pesoPonderado[]" id="calificacion" value="{{$Investigacion->Peso_Ponderado}}" required  class = 'valor_totreq4' onchange='calcTotal4()' onkeypress="return solonumeros(event)"></td>
				</tr>
				@endforeach

				@endif
				<tbody>
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
		{{-- fieldset 5--}}
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Penetración de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach ($Penetracion_tipo5 as $Penetracion_tipo5)
						@if ($Penetracion_tipo5->name_tipo_Penetración == "Incorporación de Nuevos Servicios")
						<input style="display:none" type="text" name="id_tipo_Penetración[]" value="{{$Penetracion_tipo5->id_tipo_Penetración}}">
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$Penetracion_tipo5->name_tipo_Penetración}}</th>
						@endif	
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

					@if($cantidadServicios === 0)
					@foreach ($penetracion_mercadoanf as $penetracion_mercadoanf5)
					<tr id = 'material5{{$penetracion_mercadoanf5->id_penetracion_mercadoanf}}' class="formulario material5">
						<input type="text" name="id_penetracion_mercadoanf[]" value="{{$penetracion_mercadoanf5->id_penetracion_mercadoanf}}" style="display:none" >

						<td class="thCampo1" id="tdFormulario"> {{$penetracion_mercadoanf5->name_penetracion_mercadoanf}}</td>
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name="pesoRelativo[]" id="pesoPonderado" class = 'cantidad_req5' required  onkeyup='obtTotalMat5({{$penetracion_mercadoanf5->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo" class = 'valor_unitreq5' required  onkeyup='obtTotalMat5({{$penetracion_mercadoanf5->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="pesoPonderado[]" id="calificacion" class = 'valor_totreq5' required  onchange='calcTotal5()' onkeypress="return solonumeros(event)"></td>
					</tr>
					@endforeach
			@else

			@foreach ($Servicios as $Servicios)
			<tr id = 'material5{{$Servicios->id_penetracion_mercadoanf}}' class="formulario  material5">
				<td class="thCampo1" id="tdFormulario"> {{$Servicios->name_penetracion_mercadoanf}}</td>
				<input type="text" name="id_penetracion_mercadoanf[]" value="{{$Servicios->id_penetracion_mercadoanf}}" style="display:none" >

				<td style="border: none;"></td>
				<td class="tablaAnsorft"><input type="text" name="pesoRelativo[]" id="pesoPonderado" value="{{$Servicios->Peso_Relativo}} " required  class = 'cantidad_req5' onkeyup='obtTotalMat5({{$Servicios->id_penetracion_mercadoanf}})'onkeypress="return solonumeros(event)"></td>
				<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoPonderado" value="{{$Servicios->Calificación}}"  required  class = 'valor_unitreq5' onkeyup='obtTotalMat5({{$Servicios->id_penetracion_mercadoanf}})'onkeypress="return solonumeros(event)"></td>
				<td class="tablaAnsorft"><input type="text" name="pesoPonderado[]" id="pesoPonderado" value="{{$Servicios->Peso_Ponderado}}" required  class = 'valor_totreq5' onchange='calcTotal5()' onkeypress="return solonumeros(event)"></td>
			</tr>
			@endforeach

			@endif
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
			<button type="button" class="next btn Ahora3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		{{-- fieldset 6--}}
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Penetración de Mercado</th>
						<th colspan="1"style="border: none;"></th>
						@foreach ($Penetracion_tipo6 as $Penetracion_tipo6)
						@if ($Penetracion_tipo6->name_tipo_Penetración == "Controlar o Adquirir Dominio de Distribuidores o Detallistas")
						<input style="display:none" type="text" name="id_tipo_Penetración[]" value="{{$Penetracion_tipo6->id_tipo_Penetración}}">
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$Penetracion_tipo6->name_tipo_Penetración}}</th>
						@endif	
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
					@if($cantidadServicios === 0)
					@foreach ($penetracion_mercadoanf as $penetracion_mercadoanf6)
					<tr id = 'material6{{$penetracion_mercadoanf6->id_penetracion_mercadoanf}}' class="formulario material6">
						<td class="thCampo1" id="tdFormulario"> {{$penetracion_mercadoanf6->name_penetracion_mercadoanf}}</td>
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name="pesoRelativo[]" id="pesoPonderado"  class = 'cantidad_req6' required  onkeyup='obtTotalMat6({{$penetracion_mercadoanf6->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo"  class = 'valor_unitreq6 'required   onkeyup='obtTotalMat6({{$penetracion_mercadoanf6->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="pesoPonderado[]" id="calificacion" class = 'valor_totreq6' required  onchange='calcTotal6()' onkeypress="return solonumeros(event)"></td>
					</tr>
					@endforeach
			@else

			@foreach ($Detallistas as $Detallistas)
			<tr id = 'material6{{$Detallistas->id_penetracion_mercadoanf}}' class="formulario  material6">
				<td class="thCampo1" id="tdFormulario"> {{$Detallistas->name_penetracion_mercadoanf}}</td>
				<input type="text" name="id_penetracion_mercadoanf[]" value="{{$Detallistas->id_penetracion_mercadoanf}}" style="display:none" >

				<td style="border: none;"></td>
				<td class="tablaAnsorft"><input type="text" name="pesoRelativo[]" id="pesoPonderado" value="{{$Detallistas->Peso_Relativo}}"  required  class = 'cantidad_req6' onkeyup='obtTotalMat6({{$Detallistas->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
				<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo" value="{{$Detallistas->Calificación}}" required  class = 'valor_unitreq6' onkeyup='obtTotalMat6({{$Detallistas->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
				<td class="tablaAnsorft"><input type="text" name="pesoPonderado[]" id="calificacion" value="{{$Detallistas->Peso_Ponderado}}"  required  class = 'valor_totreq6' onchange='calcTotal6()' onkeypress="return solonumeros(event)"></td> 
			</tr>
			@endforeach

			@endif
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
						@foreach ($Penetracion_tipo7 as $Penetracion_tipo7)
						@if ($Penetracion_tipo7->name_tipo_Penetración == "Controlar o Adquirir el Dominio de los Proveedores")
						<input style="display:none" type="text" name="id_tipo_Penetración[]" value="{{$Penetracion_tipo7->id_tipo_Penetración}}">
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>{{$Penetracion_tipo7->name_tipo_Penetración}}</th>
						@endif	
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

					@if($DetallistasCanti == 0)

					@foreach ($penetracion_mercadoanf as $penetracion_mercadoanf7)
					<tr id = 'material7{{$penetracion_mercadoanf7->id_penetracion_mercadoanf}}' class="formulario material7">
						<td class="thCampo1" id="tdFormulario"> {{$penetracion_mercadoanf7->name_penetracion_mercadoanf}}</td>
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name="pesoRelativo[]" id="pesoPonderado" class = 'cantidad_req7' required  onkeyup='obtTotalMat7({{$penetracion_mercadoanf7->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo" class = 'valor_unitreq7' required  onkeyup='obtTotalMat7({{$penetracion_mercadoanf7->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="pesoPonderado[]" id="calificacion" class = 'valor_totreq7' required  onchange='calcTotal7()' onkeypress="return solonumeros(event)"></td>
					</tr>
					@endforeach
		
			@else

		
			@foreach ($penetracion_mercadoanf as $penetracion_mercadoanf7)
					<tr id = 'material7{{$penetracion_mercadoanf7->id_penetracion_mercadoanf}}' class="formulario material7">
						<td class="thCampo1" id="tdFormulario"> {{$penetracion_mercadoanf7->name_penetracion_mercadoanf}}</td>
						<td style="border: none;"></td>
						<td class="tablaAnsorft"><input type="text" name="pesoRelativo[]" id="pesoPonderado" class = 'cantidad_req7' required  onkeyup='obtTotalMat7({{$penetracion_mercadoanf7->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo" class = 'valor_unitreq7' required  onkeyup='obtTotalMat7({{$penetracion_mercadoanf7->id_penetracion_mercadoanf}})' onkeypress="return solonumeros(event)"></td>
						<td class="tablaAnsorft"><input type="text" name="pesoPonderado[]" id="calificacion" class = 'valor_totreq7' required  onchange='calcTotal7()' onkeypress="return solonumeros(event)"></td>
					</tr>
					@endforeach
			@endif
			<tr class="totalFortaleza">
				<th >Total</th>
				<td style="border: none;"></td>
				<td class="tdclassFortaleza"><textarea readonly name="totalCalificación"   id="pesorpesoPonderado7" class="tablacamFortalezas" onkeypress="return solonumeros(event)"></textarea></td>
				<td class="tdclassFortaleza"><textarea readonly name="totalPuntuacion"  id="totalCalificación7" class="tablacamFortalezas  " onkeypress="return solonumeros(event)"></textarea></td>
				<td class="tdclass1Fortaleza"><textarea readonly name="puntuacionPonderad"  id="granTotal7" class="tablacamFortalezas totales" onkeypress="return solonumeros(event)"></textarea></td>
			</tr>
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			@if($cantidadMarca === 0 )
			<button type="submit" id="submitButton" class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>
				@else
				<button type="submit" class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>
				@endif
		</fieldset>
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
						Calificaciónes los siguientes:
						<ol width="100%" style="text-align: center">
							<li>1= Debilidad principal</li><br>
							<li>2= Debilidad Menor</li><br>
							<li>3= Fortaleza menor</li><br>
							<li>4= Fortaleza mayor</li><br>
						</ol>
					</li><br>

					<b>

					</b>
					<li>5. Se multiplica el peso de la segunda columna por cada una de las Calificaciónes de las organizaciones o empresas
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>

  $(document).ready(function () {
   $('.items li:nth-child(8)').addClass("acti");
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



{{-- 
<script>
	//fieldset 7
	function obtTotalMat7(index){
		if($("#material7"+index+" .cantidad_req7 ").val() > 100 || $("#material7"+index+" .cantidad_req7 ").val() < 0 ){
			toastr.error('error el numero no pudede ser mayor a 100', '!')
		}else if($("#material7"+index+" .valor_unitreq7").val() > 4 || $("#material7"+index+" .valor_unitreq7").val() > 4){
			toastr.error('error el numero no pudede ser mayor a 4', '!')
		}else{
		 
			var Relativo  = $("#material7"+index+" .cantidad_req7 ").val();
		   
			var Calificación = $("#material7"+index+" .valor_unitreq7").val();
	  
			var tot = ($("#material7"+index+" .cantidad_req7 ").val())/100 * $("#material7"+index+" .valor_unitreq7").val();
		   $("#material7"+index+" .valor_totreq6").val(tot);

		}
		calcTotal7();
	}
	
	function calcTotal7() {
			var tot = 0;
			var Relativo = 0;
			var Calificación = 0;

			$(".material7 .valor_totreq6").each(function () {
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

			}

	</script>
	 --}}

{{-- <script >
		 const form = document.getElementById('form')
const button = document.getElementById('submitButton')

const pesoPonderado = document.getElementById('pesoPonderado')
const pesoRelativo = document.getElementById('pesoRelativo')
const calificacion = document.getElementById('calificacion')

const formIsValid = {
    pesoPonderado: false,
    pesoRelativo: false,
    calificacion: false
}

form.addEventListener('submit', (e) => {
    e.preventDefault()
    validateForm()
})


pesoPonderado.addEventListener('change', (e) => {
    if(e.target.value.trim().length > -1) formIsValid.pesoPonderado = true
	else  toastr.error('El campo peso ponderado, nos puede ser nulo  ', '!Hola')

})

pesoRelativo.addEventListener('change', (e) => {
    if(e.target.value.trim().length > -1) formIsValid.pesoRelativo = true
	else  toastr.error('El campo peso relativo, nos puede ser nulo  ', '!Hola')

})

calificacion.addEventListener('change', (e) => {
    if(e.target.value.trim().length > -1) formIsValid.calificacion = true
	else  toastr.error('El campo calificacion, nos puede ser nulo  ', '!Hola')

})

const validateForm = () => {
    const formValues = Object.values(formIsValid)
    const valid = formValues.findIndex(value => value == false)
    if(valid == -1) form.submit()
    else toastr.error('Los sentimos, uno de los campos, se encuentra en blanco. Por favor revisa que todos los campos estén llenos ', '!Hola')
    
    

}



	 </script>  --}}

@endpush