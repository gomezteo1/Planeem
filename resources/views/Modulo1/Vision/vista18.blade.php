@extends('layouts.nav')

@section('content')
<header>
  @yield('js')

</header>


<div id="">
 <form method="post"  role="from" action="{{route('vista2')}}" style="display: none;">
   @csrf
   <input type="text" id="id_p" name="nombre_proyecto"   >
   <button type="submit" id="vista2" ></button>
 </form>
</div>
<div class="contenedor5">
  <h2 class="edita">VISIÓN ORGANIZACIONAL</h2>
  <br><br>
  <p id="Vision3" ></p>
</div>
<br>
<a data-toggle="modal" data-target="#exampleModal" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Guardar</a>
<a href="{{ route('Vision/edt') }}" style="color:white;" class="editar btn btn-planeem waves-effect waves-light">Editar</a>
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
        <h1>A continuación Mega empresarial</h1>
      </div>
      <div class="modal-footer">
        <a class="buttonModal btn btn-planeem waves-effect waves-light" data-dismiss="modal">Cancelar</a>
        <a href="{{ route('MEGA/paso1') }} "  class="buttonModal btn btn-planeem waves-effect waves-light">Siguiente</a>
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
@yield('script')

<script>
      // Muestra los datos del  localStorage
      var Vision = localStorage.getItem('Vision');
      var hola = document.getElementById('Vision3').innerHTML =Vision;
    </script>

    


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


   <script >
    var por=0;
    if (por ==0) {
      document.getElementById('prog','icono').style.display = 'none';
    }
  </script>






  @endsection
