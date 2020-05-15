@extends('layouts.nav3')

@section('content')
<header>
	@yield('js')


	@yield('progres')
	<div>
		<div class="progress">
			<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
	</div>
</header>

@csrf
<div id="tablaEstrategia">
	<div id="regiration_form">
		<fieldset>
			<div>
				<h3 style="text-align: center;">POSICIONAMIENTO</h3>
				<table  class="egt" id="tabla">

					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center;" rowspan="2">Objetivos y estrategias</th>
							<th class="thCampo" colspan="4" style="text-align: center;">Tiempo</th>
						</tr>
						<tr>
							<th class="thCampo" style="text-align: center;">Largo plazo</th>
							<th class="thCampo" style="text-align: center;">Mediano plazo</th>
							<th class="thCampo" style="text-align: center;">Corto plazo</th>
							<th class="thCampo" style="text-align: center;">No aplica</th>
						</tr>
					</thead>
					<tbody>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 1</th>
							<td   class="radio">
								<input type="radio" name="forma" id="item1">
								<label for="item1">A</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma" id="item2">
								<label for="item2" style="">A</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma" id="item3">
								<label for="item3" style="">A</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma" id="item4">
								<label for="item4" style="">A</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 2</th>
							<td class="radio">
								<input type="radio" name="forma1" id="item5">
								<label for="item5" >M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma1" id="item6">
								<label for="item6">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma1" id="item7">
								<label for="item7">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma1" id="item8">
								<label for="item8">M</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 3</th>
							<td  class="radio">
								<input type="radio" name="forma2" id="item9">
								<label for="item9">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma2" id="item10">
								<label for="item10">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma2" id="item11">
								<label for="item11">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma2" id="item12">
								<label for="item12">M</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 4</th>
							<td class="radio" >
								<input type="radio" name="forma3" id="item13">
								<label for="item13">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma3" id="item14">
								<label for="item14">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma3" id="item15">
								<label for="item15">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma3" id="item16">
								<label for="item16">M</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 5</th>
							<td class="radio">
								<input type="radio" name="forma4" id="item17">
								<label for="item17">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma4" id="item18">
								<label for="item18">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma4" id="item19">
								<label for="item19">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma4" id="item20">
								<label for="item20">M</label>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<button type="button" class="next btn Ahora4 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset>
			{{-- <div>
				<h3 style="text-align: center;">FIDELIZACIÓN</h3>
				<table  class="egt" id="tabla">
					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center;" rowspan="2">Objetivos y estrategias</th>
							<th class="thCampo" colspan="4" style="text-align: center;">Tiempo</th>
						</tr>
						<tr>
							<th class="thCampo" style="text-align: center;">Largo plazo</th>
							<th class="thCampo" style="text-align: center;">Mediano plazo</th>
							<th class="thCampo" style="text-align: center;">Corto plazo</th>
							<th class="thCampo" style="text-align: center;">No aplica</th>
						</tr>
					</thead>
					<tbody>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 1</th>
							<td   class="radio">
								<input type="radio" name="forma5" id="item21">
								<label for="item21">A</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma5" id="item22">
								<label for="item22" style="">A</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma5" id="item23">
								<label for="item23" style="">A</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma5" id="item24">
								<label for="item24" style="">A</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 2</th>
							<td class="radio">
								<input type="radio" name="forma6" id="item25">
								<label for="item25" >M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma6" id="item26">
								<label for="item26">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma6" id="item27">
								<label for="item27">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma6" id="item28">
								<label for="item28">M</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 3</th>
							<td  class="radio">
								<input type="radio" name="forma7" id="item29">
								<label for="item29">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma7" id="item30">
								<label for="item30">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma7" id="item31">
								<label for="item31">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma7" id="item32">
								<label for="item32">M</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 4</th>
							<td class="radio" >
								<input type="radio" name="forma8" id="item33">
								<label for="item33">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma8" id="item34">
								<label for="item34">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma8" id="item35">
								<label for="item35">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma8" id="item36">
								<label for="item36">M</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 5</th>
							<td class="radio">
								<input type="radio" name="forma9" id="item37">
								<label for="item37">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma9" id="item38">
								<label for="item38">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma9" id="item39">
								<label for="item39">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma9" id="item40">
								<label for="item40">M</label>
							</td>
						</tr>
					</tbody>
				</table>
			</div> --}}
			<button type="button" class="AhoraEstra previous btn btn-default">Anterior</button>
			<button type="button" class="next btn AhoraEstra3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset>
			{{-- <div>
				<h3 style="text-align: center;">DISTRIBUCIÓN</h3>
				<table  class="egt" id="tabla">

					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center;" rowspan="2">Objetivos y estrategias</th>
							<th class="thCampo" colspan="4" style="text-align: center;">Tiempo</th>
						</tr>
						<tr>
							<th class="thCampo" style="text-align: center;">Largo plazo</th>
							<th class="thCampo" style="text-align: center;">Mediano plazo</th>
							<th class="thCampo" style="text-align: center;">Corto plazo</th>
							<th class="thCampo" style="text-align: center;">No aplica</th>
						</tr>
					</thead>
					<tbody>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 1</th>
							<td   class="radio">
								<input type="radio" name="forma10" id="item41">
								<label for="item41">A</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma10" id="item42">
								<label for="item42" style="">A</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma10" id="item43">
								<label for="item43" style="">A</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma10" id="item44">
								<label for="item44" style="">A</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 2</th>
							<td class="radio">
								<input type="radio" name="forma11" id="item45">
								<label for="item45" >M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma11" id="item46">
								<label for="item46">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma11" id="item47">
								<label for="item47">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma11" id="item48">
								<label for="item48">M</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 3</th>
							<td  class="radio">
								<input type="radio" name="forma12" id="item49">
								<label for="item49">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma12" id="item50">
								<label for="item50">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma12" id="item51">
								<label for="item51">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma12" id="item52">
								<label for="item52">M</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 4</th>
							<td class="radio" >
								<input type="radio" name="forma13" id="item53">
								<label for="item53">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma13" id="item54">
								<label for="item54">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma13" id="item55">
								<label for="item55">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma13" id="item56">
								<label for="item56">M</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 5</th>
							<td class="radio">
								<input type="radio" name="forma14" id="item57">
								<label for="item57">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma14" id="item58">
								<label for="item58">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma14" id="item59">
								<label for="item59">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma14" id="item60">
								<label for="item60">M</label>
							</td>
						</tr>
					</tbody>
				</table>
			</div> --}}
			<button type="button" class="AhoraEstra previous btn btn-default">Anterior</button>
			<button type="button" class="next btn AhoraEstra3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Continuar</button>
		</fieldset>
		<fieldset>
			<div>
				<h3 style="text-align: center;">CRECIMIENTO</h3>
				<table  class="egt" id="tabla">

					<thead>
						<tr>
							<th class="thCampo" colspan="2" style="text-align: center;" rowspan="2">Objetivos y estrategias</th>
							<th class="thCampo" colspan="4" style="text-align: center;">Tiempo</th>
						</tr>
						<tr>
							<th class="thCampo" style="text-align: center;">Largo plazo</th>
							<th class="thCampo" style="text-align: center;">Mediano plazo</th>
							<th class="thCampo" style="text-align: center;">Corto plazo</th>
							<th class="thCampo" style="text-align: center;">No aplica</th>
						</tr>
					</thead>
					<tbody>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 1</th>
							<td   class="radio">
								<input type="radio" name="forma15" id="item61">
								<label for="item61">A</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma15" id="item62">
								<label for="item62" style="">A</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma15" id="item63">
								<label for="item63" style="">A</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma15" id="item64">
								<label for="item64" style="">A</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 2</th>
							<td class="radio">
								<input type="radio" name="forma16" id="item65">
								<label for="item65" >M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma16" id="item66">
								<label for="item66">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma16" id="item67">
								<label for="item67">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma16" id="item68">
								<label for="item68">M</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 3</th>
							<td  class="radio">
								<input type="radio" name="forma17" id="item69">
								<label for="item69">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma17" id="item70">
								<label for="item70">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma17" id="item71">
								<label for="item71">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma17" id="item72">
								<label for="item72">M</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 4</th>
							<td class="radio" >
								<input type="radio" name="forma18" id="item73">
								<label for="item73">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma18" id="item74">
								<label for="item74">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma18" id="item75">
								<label for="item75">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma18" id="item76">
								<label for="item76">M</label>
							</td>
						</tr>
						<tr class="tabla5">
							<th colspan="2" style="text-align: center;" class="thCampo1">Estrategia 5</th>
							<td class="radio">
								<input type="radio" name="forma19" id="item77">
								<label for="item77">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma19" id="item78">
								<label for="item78">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma19" id="item79">
								<label for="item79">M</label>
							</td>
							<td class="radio">
								<input type="radio" name="forma19" id="item80">
								<label for="item80">M</label>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<button type="button" class="AhoraEstra previous btn btn-default">Anterior</button>
			<a  class="next btn AhoraEstra3 btn btn-planeem wafes-effect waves-light btn-lg pull right">Guardar</a>
		</fieldset>
	</div>
</div>
{{-- <a href="{{ route('tercero3-1') }}" onclick="guardar()"  style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
<a href="{{ route('FormulacionResumen') }}" style="color:white;" class="retroceder btn btn-planeem waves-effect waves-light">Anterior</a> --}}

<span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">PROPUESTA DE VALOR</h5>
				<span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
				margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
			</div>
			<div class="modal-body">
				<p>Son las expectativas que de forma unilateral el consumidor se forma en su mente, es lo que el cliente
					imagina que obtendrá a la hora de adquirir determinado bien o servicio, en esto podemos influir, pero en
					mayor parte son las experiencias personales del consumidor y las condiciones generales del mercado lo
					que determinan sus expectativas personales a la hora de comprar
					a través de ella determinarás lo que diferencia tu producto o servicio de la competencia, además que te
				ayudará a encontrar la forma en que atenderás a tus clientes o segmento de mercado. (Saavedra, 2017)</p>
			</div>
		</div>
	</div>
</div>

<label type="text" id="nombre"></label><br>                          
<!-- Modal -->


@yield('script')

<style >
	body{

		background-image: url("../img/fondoLogo.jpg");
	}
	.collapsing{
		margin-top: -20px;
		z-index: -1;

	}

</style>

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

<script>

	$(document).ready(function () {
		$('.items3 li:nth-child(2)').addClass("acti3");
		$('.items3 li').click(function () {
			$('.items3 li').removeClass("acti3");
			$(this).addClass("acti3");


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