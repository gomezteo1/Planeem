@extends('layouts.nav4')

@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
	@include('modal/modalGrafica')
</header>
<section class="contenedor_modulo4">
<div class="row" id="Resumen_modulo4">
  <div class="col-md-4" id="contenedor_objetivo"><h3>Objetivo</h3></div>
  <span class="icon-arrow-right2" style="font-size: 62px;color: #0AB5A0;margin: 74px 0px;"></span>
  <div class="col-md-2" id="contenedor_objetivo2">Nombre del indicador</div>
  <span class="icon-arrow-right2" style="font-size: 62px;color: #0AB5A0;margin: 74px 0px;"></span>
  <div class="col-md-4" id="contenedor_objetivo2">
  	<textarea placeholder="Que quiere medir" id="inputContendor"></textarea>
  	<textarea placeholder="Sobre que lo quiere medir" id="inputContendor"></textarea>
</div>
</div>
</section>
	<div class="col-md-auto mx-auto mt-auto">
		<a href="{{ route('vista2-1')}}" style="color:white;"   class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
		<a href="{{ route('tercero1-2') }}" style="color:white;" class="retroceder btn btn-planeem waves-effect waves-light">Anterior</a>
	</div>
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

{{-- <script>    
	$(document).ready(function()
	{
		$("#exampleModalScrollable").modal("show");
	});
</script> --}}

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
