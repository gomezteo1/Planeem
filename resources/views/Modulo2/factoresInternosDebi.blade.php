@extends('layouts.nav2')

@section('content')
<header>
	<script src=" {{asset('js/toastr.js')}}"></script>
	@yield('js')
	@section('f')
	{{-- <a href="{{ route('perfilCompeInfo') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a> --}}
	@endsection
	<div>
		<div class="progress container div_barra4" id="prog">

			<div class="progress-bar barra1"  id="progress1" role="progressbar" style="width: 0%"></div>
			<div class="progress-bar barra2"  id="progress2" role="progressbar" style="width: 100%; background-color: #0AB5A0 !important;"></div>
		</div>
		<div class="stepwizard1 col-md-offset-3">
			<div class="stepwizard1-row setup-panel">
				<div class="stepwizard-step">
					<a href="#step-1" class="btn btn-primary btn-circle" id="BotonForta" style="margin-right: 6%;"></a>
				</div>
				<div class="stepwizard-step">
					<a href="#step-2" class="btn btn-primary btn-circle" id="BotonDebi"><img class=" botonGifDebi" src="img/lupa2.png"></a>
				</div>
			</div>
		</div>
	</div>
</header>
	<section class="contenedorper2" id="contenedorper2">

		<form id="form" role="form" action="{{route('saveFactorInternoD'),$plane}}" method="post">
			<input type="hidden" name="idPlaneacion" id="" class="idPlaneacion">
			@csrf
			<fieldset>

				<div class="opciones3">
					<table>
						<thead>
							<tr >
								<th scope="col" colspan="1" style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><a id="boton6-1" class="button6-1" data-toggle="modal" data-target="#exampleModal4"><span class="icon-info "></span></a>Debilidades</th>

								<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><a id="boton3-1" class="button3-1"  data-toggle="modal" data-target="#exampleModal1"><span class="icon-info "></span></a>Ponderación</th>

								<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><a id="boton4-1" class="button4-1" data-toggle="modal" data-target="#exampleModal2"><span class="icon-info "></span></a>Calificación</th>

								<th style="text-align: center; background: #0AB5A0;border: none;color: white; border-radius: 10px;"><a id="boton5-1" class="button5-1" data-toggle="modal" data-target="#exampleModal3"><span class="icon-info "></span></a>Puntuación Ponderada</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($debilidad as $d)
							<tr id = 'material{{$d->idCapacidad}}' class = 'tablaFortaleza material'>
								<th data-column_name="idRespuestaCapacidad" data-id="{{$d->idCapacidad}}" data-name="$d->nombre">{{$d->nombre}}</th>
								<input type="hidden" name="preguntas[]" value="{{$d->idCapacidad}}">
                
                                <td><input type="text" id="ponde-{{$d->idCapacidad. "-" .$plane}}" onkeypress="return solonumeros(event)"  name="ponderacion[]"  required class = 'pesoRelativo cantidad_req' onkeyup='obtTotalMat({{$d->idCapacidad}})'</td>
                                <td><input type="text" id="cali-{{$d->idCapacidad. "-" .$plane}}" onkeypress="return solonumeros(event)" name="calificacion[]"  required class = 'calificacion valor_unitreq' onkeyup='obtTotalMat({{$d->idCapacidad}})'></td>
                                 <td><input type="text" aria-disabled="true" id="puntuacion-{{$d->idCapacidad. "-" .$plane}}" name="puntuacionPonderada[]" onkeypress="return solonumeros(event)" class = 'pesoPonderado valor_totreq' onchange='calcTotal()'></td>

							</tr>
							@endforeach
							<tr class="totalFortaleza">
									<th >Total</th>
									<td class="tdclassFortaleza"><textarea readonly name="totalCalificacion" onkeypress="return solonumeros(event)"  id="pesorpesoPonderado" class="tablacamFortalezas" ></textarea></td>
									<td class="tdclassFortaleza"><textarea readonly name="totalPuntuacion" onkeypress="return solonumeros(event)" id="totalcalificacion" class="tablacamFortalezas  "></textarea></td>
									<td class="tdclass1Fortaleza"><textarea readonly name="puntuacionPonderad1"  onkeypress="return solonumeros(event)" id="granTotal" class="tablacamFortalezas totales"></textarea></td>
							</tr>

						</tbody>
					</table>
					<button type="submit" id="submitButton" class="Ahora4 btn btn-planeem wafes-effect waves-light nextBtn btn-lg pull right">Guardar</button>
				</div>
			</fieldset>

		</form>

		<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-modificado1">
					<div class="modal-body">
						<div id="cierra_caja11"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a> 
							<p class="Nota" style="margin-left: 0.5px; font-weight: bold; font-size: 14px"; >Ponderación: </p>
                            <p style="font-size: 12px; text-align: justify;">Asigne un peso entre 0.0 (no importante) hasta 1.0 (muy importante),
                                el peso otorgado a cada factor expresa la importancia relativa del
                                mismo, y el total de todos los pesos en su conjunto debe tener la suma de 1.0.</p>

						</div>
					</div>
				</div>
			</div>
		</div>
		<style>
			.tablacamFortalezas{
				width: 97%;
				height: 26px;
				border-radius: 7px;
				text-align: center;
				text-decoration: none !important;
				outline: none !important;
			}
			.tablacam{
				background: none;
			}
			.modal-modificado2{
				width: 180% !important;
				height: 240px !important;
				border: #0AB5A0 2px solid !important;
				border-radius: 12px !important;
			}
			.modal-modificado1{
				border: #0AB5A0 2px solid !important;
				border-radius: 12px !important;
				width: 437px !important;
				height: 148px !important;
				margin-top: 50% !important;
				margin-left: 0 !important;
			}
			.tabla td{
				position: relative;
				border: grey 1px solid;
				width: 15%;
				margin-left: 75px;
				margin-top: 18px;
				border-radius: 10px;
			}
			.tabla th{
				border: grey 1px solid;
				width: 40%;
				border-radius: 10px;
				text-align: center;
			}
			
			.opciones3 {
				padding: 3px;
				overflow-y: scroll;
				position: absolute;
				left: 14%;
				height: 389px;
				width: 74%;
			}

		</style>
		<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-modificado1">
					<div class="modal-body">
						<div id="cierre_caja7"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
							<p class="Nota" style="margin-left: 0.5px; font-weight: bold; font-size: 14px"; >Calificación:  </p>
                            <p style="font-size: 12px; text-align: justify;">Asignar una calificación a cada variable, esta calificación es de 1 a 4. Siendo:<br>
                                1: Debilidad Mayor.<br>
                                2: Debilidad Menor.<br>
                                3: Fortaleza Menor.<br>
                                4: Fortaleza Mayor.
							</p>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-modificado1">
					<div class="modal-body">
						<div id="cierre_caja6"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
							<p class="Nota" style="margin-left: 0.5px; font-weight: bold; font-size: 14px"; >Fortalezas:</p>
                            <p>Son las capacidades esenciales con las que cuenta la compañía,
                                que le permiten obtener una posición privilegiada frente a la
                                competencia, por ejemplo, recursos y habilidades que se poseen
                                o actividades que se desarrollan de forma adecuada....</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-modificado1">
					<div class="modal-body">
						<div id="cierra_caja5"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a> 
							Debilidades:<br> Son aquellos factores internos que generan una posición desfavorable frente a la competencia, por ejemplo, recursos y habilidades de las que carece o actividades que no se desarrollan de la mejor manera en la organización
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
						{vista factoresInternosDebi}
					</ol>
				</div>
			</div>
		</div>
	</div>
	@endsection
	@push('script')
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script>
	
		$(document).ready(function () {
			$('.items li:nth-child(3)').addClass("acti");
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
	<link href="{{ asset('css/toastr.css') }}"  rel="stylesheet"/>
	<script src="{{asset('js/solo_numeros.js')}}"></script>
	<script>
		$(document).ready(function(){
			var planeacion = localStorage.getItem('id');
			$(".idPlaneacion").val(planeacion);
			//console.log(planeacion);
		});

	</script>

	<script>
		function numero(e){
			tecla=(document.all)? e.keyCode : e.which;
			if ((tecla<48 | tecla>57)&& tecla!=45) return false
		}
	</script>

<script>
    
    function obtTotalMat(index){
        if($("#material"+index+" .cantidad_req").val() > 1 || $("#material"+index+" .cantidad_req").val() < 0 ){
            toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
        }else if($("#material"+index+" .valor_unitreq").val() > 4 || $("#material"+index+" .valor_unitreq").val() < 0){
            toastr.error('Lo sentimos, el número que estas digitando no puede ser mayor a 4 o/e inferior a 0', '!Hola!')
        }else{
         
            var Relativo  = $("#material"+index+" .cantidad_req").val();
           
            var Calificacion = $("#material"+index+" .valor_unitreq").val();
      
            var tot = ($("#material"+index+" .cantidad_req").val()) * $("#material"+index+" .valor_unitreq").val();
           $("#material"+index+" .valor_totreq").val(tot);

		}
		
		
        calcTotal();
    }
    
    function calcTotal() {
            var tot = 0;
            var Relativo = 0;
            var Calificacion = 0;

            $(".material .valor_totreq").each(function () {
                tot+=Number($(this).val());
            });

            $(".material .cantidad_req").each(function () {
                Relativo+=Number($(this).val());
            });

            $(".material .valor_unitreq").each(function () {
                Calificacion+=Number($(this).val());
            });

            $("#granTotal").val(tot);
            $("#pesorpesoPonderado").val(Relativo);
			$("#totalcalificacion").val(Calificacion);


			var PuntuaciónPonderada = parseFloat(localStorage.getItem('PuntuaciónPonderada'));

			var pesorpesoPonderado = parseFloat ($("#granTotal").val());

			var suma =   PuntuaciónPonderada + pesorpesoPonderado;


			console.log(suma);


			if(suma >= 4){
				toastr.error('La Puntuación Ponderada, esta superando el limite establecido. Limite (4.0)', '!Hola!')
			}else{
				localStorage.getItem('PuntuaciónPonderada',suma)
			}


			
			
			if( $("#pesorpesoPonderado").val() > 1){
                     toastr.error('Lo sentimos, el total Peso Relativo, no puede ser mayor a 1 o/e inferior a 0', '!Hola!')
            }

            }

    </script>

	<script>
		$( document ).ready(function() {
			var id = localStorage.getItem('id');
			$.ajax({
				url:"/factorInt/show/"+id,
				type:'get',
				success:function(data){
							//	$('.val1').val(data);
							//console.log(data);

							if(data != null){
								for(i of data){

									if(i.ponderacion != null){
										$('#ponde-'+i.respuesta+'-'+id).val(i.ponderacion);
										console.log(i.respuesta)
										$('#cali-'+i.respuesta+'-'+id).val(i.calificacion);

										$('#puntuacion-'+i.respuesta+'-'+id).val(i.puntuacionPonderada);

										$('#granTotal').html(i.totalCalificacion);
										$('#pesorpesoPonderado').html(i.puntuacionPonderada);
										$('#totalcalificacion').html(i.totalCalificacion);
										
									}
								}
							}
						}
					})

		});
	</script>	
	@endpush