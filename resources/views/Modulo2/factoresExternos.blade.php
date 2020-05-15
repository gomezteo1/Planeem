@extends('layouts.nav2')

@section('content')
<link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>

<header>
	@yield('js')
	
	@include('modal/modal')
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>

</header>
<section class="contenedorper5">
	<div id="regiration_form">
	<form id="form" action="{{ route('Evaluacion')}}" method="POST" role="form">
	<input type="text" value="{{$id_Planeacion}}" name="id_Planeacion" style="display:none">
		@csrf
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Factores externos Clave</th>
						<th colspan="1"style="border: none;"></th>
						<input type="text" value="Oportunidades" name="tipo[]"  style="display:none">
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>Oportunidades</th>
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Ponderación<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Puntuación Ponderada<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorftExternos"></span></th>

					</tr>

				</thead>
				<tbody>
				@foreach ($Oportunidades as $Oportunidades )
				<tr  id="material0{{$Oportunidades->id}}"  class="formulario material0">
				<input type="text" value="{{$Oportunidades->id}}" name="id_respuesta[]"  style="display:none">
							<td class="thCampo1">{{$Oportunidades->nombre}}</td>
								<td style="border: none;"></td>
								<td class="tablaAnsorft"><input type="text"  name="Peso_Relativo[]" id="pesoPonderado" onkeypress="return solonumeros(event)" required class = ' pesoPonderado cantidad_req0' onkeyup='obtTotalMat0({{$Oportunidades->id}})'></td>
								<td class="tablaAnsorft"><input type="text" name="Calificación[]" id="pesoRelativo"  onkeypress="return solonumeros(event)" required class = 'pesoRelativo valor_unitreq0' onkeyup='obtTotalMat0({{$Oportunidades->id}})'></td>
								<td class="tablaAnsorft"><input type="text" name="Peso_Ponderado[]" id="calificacion" onkeypress="return solonumeros(event)" class = 'calificacion valor_totreq0' onchange='calcTotal0()'></td>
							</tr>
				@endforeach
				<tr class="totalFortaleza">
					<th >Total</th>
					<td style="border: none;"></td>
					<td class="tdclassFortaleza"><textarea readonly name="totalCalificacion" onkeypress="return solonumeros(event)" id="pesorpesoPonderado0" class="tablacamFortalezas"></textarea></td>
					<td class="tdclassFortaleza"><textarea readonly name="totalPuntuacion" onkeypress="return solonumeros(event)" id="totalcalificacion0" class="tablacamFortalezas"></textarea></td>
					<td class="tdclass1Fortaleza"><textarea readonly name="puntuacionPonderad1" onkeypress="return solonumeros(event)" id="granTotal0" class="tablacamFortalezas totales"></textarea></td>
				</tr>
				</tbody>
			</table>
			<button type="button" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset class="opciones">
			<table class="egt" id="tabla">
				<thead>
					<tr>
						<th  colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal4" class="icon-info" id="infoAnsorft3"></span>Factores externos Clave</th>
						<th colspan="1"style="border: none;"></th>
						<input type="text" value="Amenazas" name="tipo[]"  style="display:none">
						<th colspan="3"  style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft4"></span>Amenazas</th>
					</tr>
					<tr >

						<th colspan="2" style="border: none;"></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Ponderación<span data-toggle="modal" data-target="#exampleModal1" class="icon-info" id="infoAnsorft"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Calificación<span data-toggle="modal" data-target="#exampleModal2" class="icon-info" id="infoAnsorft1"></span></th>

						<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;">Puntuación Ponderada<span data-toggle="modal" data-target="#exampleModal3" class="icon-info" id="infoAnsorftExternos"></span></th>

					</tr>

				</thead>
				<tbody>

					@foreach ($Amenazas as $Amenazas )
					<tr  id="material1{{$Amenazas->id}}"  class="formulario material1">
						<input type="text" value="{{$Amenazas->id}}" name="id_respuesta[]" style="display:none" >
									<td class="thCampo1">{{$Amenazas->nombre}}</td>
										<td style="border: none;"></td>
										<td class="tablaAnsorft"><input type="text" onkeypress="return solonumeros(event)" name="Peso_Relativo[]" id="pesoPonderado" required class = ' pesoPonderado cantidad_req1' onkeyup='obtTotalMat1({{$Amenazas->id}})'></td>
										<td class="tablaAnsorft"><input type="text" onkeypress="return solonumeros(event)" name="Calificación[]" id="pesoRelativo"  required class = 'pesoRelativo valor_unitreq1' onkeyup='obtTotalMat1({{$Amenazas->id}})'></td>
										<td class="tablaAnsorft"><input type="text" onkeypress="return solonumeros(event)" name="Peso_Ponderado[]" id="calificacion" class = 'calificacion valor_totreq1' onchange='calcTotal1()'></td>
									</tr>
						@endforeach
						<tr class="totalFortaleza">
							<th >Total</th>
							<td style="border: none;"></td>
							<td class="tdclassFortaleza"><textarea readonly name="totalCalificacion" onkeypress="return solonumeros(event)"  id="pesorpesoPonderado1" class="tablacamFortalezas"></textarea></td>
							<td class="tdclassFortaleza"><textarea readonly name="totalPuntuacion" onkeypress="return solonumeros(event)" id="totalcalificacion1" class="tablacamFortalezas"></textarea></td>
							<td class="tdclass1Fortaleza"><textarea readonly name="puntuacionPonderad1" onkeypress="return solonumeros(event)" id="granTotal1" class="tablacamFortalezas totales"></textarea></td>
						</tr>
		
				
				</tbody>
			</table>
			<button type="button" class="Ahora2 previous btn btn-default">Anterior</button>
			<button type="submit" id="submitButton" class="Ahora3 btn btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</button>
		</fieldset>
		<div class="infon">
			<a  id="boton1" data-toggle="modal" data-target="#exampleModal0" class="button2_agregar1" ><span class="icon-folder-plus"><div id="hover_agregar1">
				<h5>Agregar</h5></div></span>
			</a>
			<a id="boton2" class="button2" data-toggle="modal" data-target="#exampleModal001"><span class="icon-info "></span>
			</a>
		</div>
	</form>
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

<script src=" {{asset('js/toastr.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="{{asset('js/Validaciones/valid.js')}}"></script>
<script>

	$(document).ready(function () {
	 $('.items li:nth-child(9)').addClass("acti");
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
{{-- <script>    
	$(document).ready(function()
	{
		$("#exampleModalScrollable").modal("show");
	});
</script> --}}

{{-- <script>
	function guardar(){


		if (document.getElementById('Para_paso1').value == 0) {

			document.getElementById("id").innerHTML = "error";

		}else{
			var miDato = document.getElementById('Para_paso1').value;
			localStorage.setItem('Para',miDato);
			localStorage.setItem('Progreso','10%');
		}
	};
</script> --}}



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
			$("#totalcalificacion0").val(Calificación);
			

			if( $("#pesorpesoPonderado0").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
            }
	

			}


			
			
			
	if( $("#pesorpesoPonderado0").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
            }

	</script>
	
	<script>
		//fieldset 2
		function obtTotalMat1(index){
			if($("#material1"+index+" .cantidad_req1").val() > 1 || $("#material1"+index+" .cantidad_req1").val() < 0 ){
				toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')

			}else if($("#material1"+index+" .valor_unitreq1").val() > 4 || $("#material1"+index+" .valor_unitreq1").val() > 4){
				toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')

			}else{
			 
				var Relativo  = $("#material1"+index+" .cantidad_req1").val();
			   
				var Calificación = $("#material1"+index+" .valor_unitreq1").val();
		  
				var tot = ($("#material1"+index+" .cantidad_req1").val()) * $("#material1"+index+" .valor_unitreq1").val();
			   $("#material1"+index+" .valor_totreq1").val(tot);
	
			}
			calcTotal1();
		}
		
		function calcTotal1() {
				var tot = 0;
				var Relativo = 0;
				var Calificación = 0;
	
				$(".material1 .valor_totreq1").each(function () {
					tot+=Number($(this).val());
				});
	
				$(".material1 .cantidad_req1").each(function () {
					Relativo+=Number($(this).val());
				});
	
				$(".material1 .valor_unitreq1").each(function () {
					Calificación+=Number($(this).val());
				});
	
				$("#granTotal1").val(tot);
				$("#pesorpesoPonderado1").val(Relativo);
				$("#totalcalificacion1").val(Calificación);
	
				}

				
			if( $("#pesorpesoPonderado1").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
            }
	
		</script>

@endsection



<!-- 		
	<script>
///////Oportunidades

		function obtTotalMat0(index){
						if($("#material0"+index+" .cantidad_req0").val() == " "){
							toastr.error('El peso Ponderado es obligatorio', '!Hola')
						}

						if($("#material0"+index+" .valor_unitreq0").val() == " "){
							toastr.error('El peso pesoRe lativo', '!Hola')
						}

						if($("#material0"+index+" .cantidad_req0").val() > 1|| $("#material0"+index+" .cantidad_req0").val() < 0 ){
							toastr.error('error el numero no pudede ser mayor a 1', '!')
						}else if($("#material0"+index+" .valor_unitreq0").val() > 4 || $("#material0"+index+" .valor_unitreq0").val() < 0){
							toastr.error('error el numero no pudede ser mayor a 4', '!')
						}else{
						
							var Relativo  = $("#material0"+index+" .cantidad_req0").val();
						
							var Calificacion = $("#material0"+index+" .valor_unitreq0").val();
					
							var tot = ($("#material0"+index+" .cantidad_req0").val())* $("#material0"+index+" .valor_unitreq0").val();
						$("#material0"+index+" .valor_totreq0").val(tot);

						}
						calcTotal0();
					}


			function calcTotal0() {
				var tot0 = 0;
				var Relativo0 = 0;
				var Calificacion0 = 0;

				$(".material0 .valor_totreq0").each(function () {
					tot0+=Number($(this).val());
				});

				$(".material0 .cantidad_req0").each(function () {
					Relativo0+=Number($(this).val());
				});

				$(".material0 .valor_unitreq0").each(function () {
					Calificacion0+=Number($(this).val());
				});

				$("#granTotal0").html(tot0);
				$("#pesorpesoPonderado0").html(Relativo0);
				$("#totalcalificacion0").html(Calificacion0);
				}




///////Amenazas
				function obtTotalMat1(index){
					if($("#material1"+index+" .cantidad_req1").val() == " "){
						toastr.error('El peso Ponderado es obligatorio', '!Hola')
					}

					if($("#material1"+index+" .valor_unitreq1").val() == " "){
						toastr.error('El peso pesoRe lativo', '!Hola')
					}

					if($("#material1"+index+" .cantidad_req1").val() > 1 || $("#material1"+index+" .cantidad_req1").val() < 0 ){
						
					toastr.error('error el numero no pudede ser mayor a 1', '!')
					}else if($("#material1"+index+" .valor_unitreq1").val() > 4 || $("#material1"+index+" .valor_unitreq1").val() > 4){
						
					toastr.error('error el numero no pudede ser mayor a 4', '!')
					}else{

						var Relativo1 = $("#material1"+index+" .cantidad_req1").val();

						var Calificacion1 = $("#material1"+index+" .valor_unitreq1").val();

						var tot1 = ($("#material1"+index+" .cantidad_req1").val()) $("#material1"+index+" .valor_unitreq1").val();
					$("#material1"+index+" .valor_totreq1").val(tot1);

					}
					calcTotal1();
					}


					function calcTotal1() {
					var tot1 = 0;
					var Relativo1= 0;
					var Calificacion1 = 0;

					$(".material1 .valor_totreq1").each(function () {
					tot1+=Number($(this).val());
					});

					$(".material1 .cantidad_req1").each(function () {
					Relativo1+=Number($(this).val());
					});

					$(".material1 .valor_unitreq1").each(function () {
					Calificacion1+=Number($(this).val());
					});

					$("#granTotal1").html(tot1);
					$("#pesorpesoPonderado1").html(Relativo1);
					$("#totalcalificacion1").html(Calificacion1);
			}
	</script> -->

