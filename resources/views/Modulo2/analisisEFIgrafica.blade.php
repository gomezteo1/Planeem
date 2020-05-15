
@extends('layouts.nav2')

@section('content')
<header>
	@yield('js')
	@section('f')
	<a href="{{ route('home') }}" class="clos" aria-label="Close"><span class="icon-undo2"></span></a>
	@endsection
	@include('modal/modalGrafica')
    <input type="text" style="dysplay:none" id="empresa"  >
<input type="text" style="dysplay:none" id="totalPuntuacion">
<input type="text" id="totalPuntuacion1" style="dysplay:none">
</header>
<section id="conatinerGrafica2">
	<div id="TituloGrafica"><h2>Análisis EFE y EFI</h2></div>
<div class="btn-group-vertical">

  <button class="botonesGrafica" style="background: #0AB5A0; outline: none;" data-toggle="modal" data-target="#exampleModalCenter"></button>
  <button class="botonesGrafica" style="background: #FC7323; outline: none;" data-toggle="modal" data-target="#exampleModalCenter1"></button>
  <button class="botonesGrafica" style="background: #238276; outline: none;" data-toggle="modal" data-target="#exampleModalCenter2"></button>
</div>
</section>
<style type="text/css">
	.btn-group-vertical {
    position: absolute;
    margin: 180px 109px;
    z-index: 23;
	}
</style>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
                  var id = localStorage.getItem('id');
                  $.ajax({
                      url:"/graficas/"+id,
                      type:'get',
                      success:function(data){
                        console.log(data);
                        
                            for (let i = 0; i < data.length; i++) {
                       
                                var numero1 = data[0], numero2 =data[1], numero3= data[2], numero4 = data[3], numero5 = data[4], numero6 = data[5],numero7 =data[6];
                                var  totalpoderado = (numero1 + numero2 + numero3 + numero4 + numero5 +numero6 +numero7)/7;
                                
                                var pondeFloa = parseFloat(totalpoderado);
                                var totalPuntuacion =  pondeFloa+'.'+1; 

                                var numero1 = Math.trunc(totalpoderado)

                                var numero2 =  totalPuntuacion.slice(2-5);


                                var int1 = parseFloat(numero1);
                                var int2 = parseFloat(numero2);

                                
                                  var data = google.visualization.arrayToDataTable([
                                    
                                    ['ID', 'X', 'Y', 'Burbuja'],  
                                    ["", int2, int1, 3.1],
                                ]);
                                var chart = new google.visualization.BubbleChart(document.getElementById('chart_div'));
                                chart.draw(data,);
                             
                              }           
                        }
              });

        
    }
  </script>

<body>
  <div id="chart_div" style="width: 900px; height: 500px;"></div>
</body>

  </head>

  {{-- href="http://127.0.0.1:8000/analisisDofaInfo" --}}

  

	<a  href="{{ route('analisisDofaInfo') }} "  style="color:white;" name="nuevo" class="Ahora btn btn-planeem waves-effect waves-light">Iniciar Ahora</a>
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
@yield('script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>

  $(document).ready(function () {
   $('.items li:nth-child(12)').addClass("acti");
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