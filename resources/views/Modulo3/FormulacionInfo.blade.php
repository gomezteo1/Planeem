@extends('layouts.nav3')

@section('content')
<header>
	@yield('js')


	<div style=" text-align: center;">
		<h2 class="parrafoII" style="position: absolute; left: 41%; top: 35%;">Formulación de estrategias</h2>
	</div>
	<div>
		<p class="parrafito">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>


	<form   method="post"  role="from" action="{{route('FormulacionAsociar')}}" >
		@csrf
		<h1 id="id_planecion"></h1>
	<input name="id_planecion" id="id_planecion"  value="{{$id_planecion}}"  >
		<button   style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</button>

	</form>

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
					<ol style="line-height: 17px; margin-top: 33px;">
						<b style="color: black; font-weight: bold;">Procedimiento de calificación</b>
						<br><br>
						Estas cinco fuerzas delimitan precios, costos y requerimientos de inversión que constituyen a los
						factores básicos que explican las expectativas de rentabilidad a largo plazo y, por lo tanto, el
						atractivo del sector. Dado que el concepto de atractivo del sector (atractividad) está asociado a la
						expectativa de rentabilidad a largo plazo, se utilizarán las siguientes denominaciones:<br>
						<br><br>
						(1) Alta (A), Cuando la atractividad sectorial y la expectativa de rentabilidad a largo plazo es muy
						alta;<br><br>

						(2) Media (M), Cuando la atractividad sectorial y la expectativa de rentabilidad a largo plazo es
						normal
						<br><br>
						(3) Bajo (B): Cuando la atractividad del sector y la expectativa de rentabilidad a largo plazo es
						baja.<br><br>

						Conocer el impacto de cada atractividad es importante para el análisis por lo cual se usará la
						misma nomenclatura de Alta (A), Media (M) y Bajo (B).
					</ol>
				</div>
			</div>
		</div>
	</div>
	
</section>
@endsection

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
@push('script')
<script>
	var id = localStorage.getItem('id');
	$('id_planecion').val(id);
	

	function capacidadInterna(){
		document.getElementById("btn1").click();
	}
</script>

@endpush

