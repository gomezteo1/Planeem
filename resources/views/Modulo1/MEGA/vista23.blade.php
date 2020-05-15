@extends('layouts.nav')

@section('content')
<header>

</header>




<form  method="post"  role="from" action="{{route('Planeacion')}}" >
 @csrf
 <div class="form-group">
  <div class="contenedor5">
    <h2 class="edita">MEGA EMPRESARIAL</h2>
    <br><br>
    <p id="menga4"></p>
  </div>

  <div style="display: none;">
    <textarea name="Mision_Organizacional" id="Mision6" ></textarea>

    <textarea name="Vision_Organizacional" id="Vision3" ></textarea>
    
    <textarea name="Mega_Empresarial" id="menga1" ></textarea>
    
    <textarea name="Propuesta_valor" id="propuesad" ></textarea>

    <textarea name="nombre_proyecto" id="nombre_proyecto"></textarea>

    <textarea name="proceso" id="proceso"></textarea>
  </div>


  <div style="display:none;" >

    <textarea type="text"  id="id_Planeacion" name="id_Planeacion"></textarea>

  </div>


  <br>
  <a data-toggle="modal" data-target="#exampleModal" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Guardar</a>
  <a href="{{ route('MEGA/edt')}}" style="color:white;" onclick="paso2()"  class="anterior btn btn-planeem waves-effect waves-light">Anterior</a>

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
          <p>Una de las mejores maneras de comenzar a redactar la visión es usar frases concisas y en infinitivo que vayan
            de lo particular a lo global y de lo concreto a lo emotivo.<br>
            La imagen debe reflejar una aceptación de las características de la empresa, los socios y el equipo. Además.
            depende completamente de los objetivos estratégicos.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal de seguir adelante -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="modalAvance">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
        margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>
      </div>
      <div class="modal-body" style="text-align: center;">
        <h1>A continuación Valores Corporativos</h1>
      </div>
      <div class="modal-footer">
        <a class="buttonModal btn btn-planeem waves-effect waves-light" data-dismiss="modal">Cancelar</a>
        <button style="color:white;" onclick="guardar()" class="buttonModal btn btn-planeem waves-effect waves-light">Siguiente</button>
        {{-- <button type="button" class="btn btn-primary">Continuar</button> --}}
      </div>
    </div>
  </div>
</div>
<style>
  #modalAvance{
    border-radius: 18px !important;
    /*width: 126%;*/
    border: 2px solid #0AB5A0;
  }
</style> 
</form>



<script>

  var Para = localStorage.getItem('Mega1');
  var hola = document.getElementById('menga4').innerHTML =Para;
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script >
  var id = localStorage.getItem('id');
  console.log(id);

  $('#id_Planeacion').html(id);

  $(document).ready(function () {
   $('.items li:nth-child(4)').addClass("acti");
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
  function guardar(){
    var hola = document.getElementById('hola').value;
    localStorage.setItem('hla',hola);
  }
</script>




<script>
  var nombre_proyecto = localStorage.getItem('nombre_proyecto');
  document.getElementById('nombre_proyecto').innerHTML = nombre_proyecto;

</script>


<script>
  var Propuesta_valor =localStorage.getItem('propuesta');
  var Mision = localStorage.getItem('Mision1');
  var mega = localStorage.getItem('Mega1');
  var Vision = localStorage.getItem('Vision');
  var nombre_proyecto = localStorage.getItem('nombre_proyecto');
  var proceso = "proceso1";
  document.getElementById('proceso').innerHTML =proceso;


    ///////////////////////Propuesta_valor/////////////////////////////
    document.getElementById('propuesad').innerHTML=Propuesta_valor;
   //////////////////////Mision/////////////////////////////
   document.getElementById('Mision6').innerHTML=Mision;
    /////////////////////////mega/////////////////////////////////////
    document.getElementById('Vision3').innerHTML=Vision;
    ////////////////////////////Vision////////////////////////////////////////77

    document.getElementById('menga1').innerHTML=mega;




  </script>

{{-- 
<script>
  let progreso = localStorage.getItem('progressbar');
  let progreso2 = localStorage.getItem('progressbar2')
  document.getElementById('progress1').style.width = progreso;
  document.getElementById('progress2').style.width = progreso2;
  document.getElementById('icono').style.left= '28%';
</script> --}}











@endsection


