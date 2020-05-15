@extends('layouts.navmod')

@section('content')
<header>

  <div>
    <div class="progress">
      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>

</header>

<div class="form-group">
 <div id="text" class="contenedor3  ">
  <form method="post"  role="from" action="{{route('updateValor')}}" novalidate>
    @csrf
    <div class="mb-3">
      <div style="display: none;" >
        @foreach ($pensamiento as $pensamiento)
        @if ($pensamiento->id_Planeacion == $proyecto->id_Planeacion)
        <input type="text"  value="{{$pensamiento->Propuesta_valor}}" id="Propuesta_valor">
        <input type="text"  value="{{$pensamiento->id_Planeacion}}" id="id_Planeacion" name="id_Planeacion" >
        @endif

        @endforeach
      </div>

      <textarea maxlength="1205"4 class="form-control is-invalid campo"  name="Propuesta_valor"  id="propuesta" placeholder="Required example textarea" required></textarea>
    </div>
  </div>


  {{-- campo de escribir --}}
  <div id="regiration_form">
    <fieldset>
      <div id="paso2">
        <div class="col-md-auto mx-auto mt-auto">
          <p class="para"><b style="color: #0AB5A0">Para</b> (el cliente objetivo)
            Identificar  a quién le a vender su producto o servicio, eso le facilitará el desarrollo del plan de comunicación y promoción de su oferta, ya que inicialmente contará con percepciones sobre sus gustos, sus características, su demografía, entre otros. <br>Ejemplo:<b style="color: #0AB5A0">"Empresas”</b></p>
          </div>
          <p class="formula3">Fórmula: <b style="color: #0AB5A0">Para</b> (el cliente objetivo) + <b style="color:#0AB5A0">Que</b> (necesidad u oportunidad) + <b style="color:#0AB5A0">Nuestro</b> (nombre del producto/servicio) /categoría del producto) + (<b style="color:#0AB5A0">Beneficio</b>/Factor diferenciador)</p>
          <a onclick="paso2()"  name="password" style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
        </div>
      </fieldset>
      <fieldset id="paso3">
        <div>
          <div>
            <p class="necesidad"><b style="color: #0AB5A0">Que</b> (necesidad u oportunidad)<br>
              Trata de ser lo más específico en este punto, ya que de esta forma sabrás qué estás ofertando en el mercado y qué
              cantidad de clientes potenciales tendrás.<br>
              <b style="color: #0AB5A0">Ejemplo: “Para empresas que quieren mejorar su presencia en internet”</b></p>
            </div>
            <p class="formula">Fórmula: <b style="color: #0AB5A0">Para</b> (el cliente objetivo) + <b style="color:#0AB5A0">Que</b> (necesidad u oportunidad) + <b style="color:#0AB5A0">Nuestro</b> (nombre del producto/servicio) /categoría del producto) + (<b style="color:#0AB5A0">Beneficio</b>/Factor diferenciador)</p>
          </div>
          <a onclick="paso3()"  style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
          <a onclick="paso1()" style="color:white;"  class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</a>
        </fieldset>
        <fieldset id="paso4">
         <div>
          <div class="form-group">
            <section>
             <div>
              <p class="cual"><b style="color: #0AB5A0">Cuál es el producto o servicio que le ofreces a tus clientes:</b><br>
               Aquí logrará identificar el elemento diferenciador que brinda a diferencia de sus competidores.<br>
               <b style="color: #0AB5A0">Ejemplo: “Para empresas que quieren mejorar su presencia en internet, nuestra asesoría de contenidos”</b></p>
             </div>

             <p class="formula">Fórmula: <b style="color: #0AB5A0">Para</b> (el cliente objetivo) + <b style="color:#0AB5A0">Que</b> (necesidad u oportunidad) + <b style="color:#0AB5A0">Nuestro</b> (nombre del producto/servicio) /categoría del producto) + (<b style="color:#0AB5A0">Beneficio</b>/Factor diferenciador)</p>
           </section>
         </div>
       </div>
       <a onclick="paso4()"  style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
       <a onclick="paso2()" style="color:white;"  class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</a>
     </fieldset>
     <fieldset id="paso5">
      <div>
        <section>
          <div>
            <p class="elemento "><b style="color: #0AB5A0">Cuál es tu elemento diferenciador:</b><br>
              Ya sea que su oferta se entrega a domicilio, en centros comerciales, a través de aplicaciones web o cualquier otro aspecto determinante, enumere todas las características de su producto o servicio y compáralo con su competencia directa, de esta forma tendrá más claro qué es lo que lo hace realmente diferente y lo que apreciarán sus clientes.<br>
              <b style="color: #0AB5A0">Ejemplo: “Para empresas que quieren mejorar su presencia en internet, nuestra asesoría de contenidos les permitirá mejorar sus ventas y su reputación online”</b></p>
            </div>
            <p class="formula">Fórmula: <b style="color: #0AB5A0">Para</b> (el cliente objetivo) + <b style="color:#0AB5A0">Que</b> (necesidad u oportunidad) + <b style="color:#0AB5A0">Nuestro</b> (nombre del producto/servicio) /categoría del producto) + (<b style="color:#0AB5A0">Beneficio</b>/Factor diferenciador)</p>
          </section>
        </div>
        <button  type="submit" style="color:white;" class="siguiente btn btn-planeem waves-effect waves-light">Guardar</button>
      </fieldset>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script>
    var propuesat = $( "#Propuesta_valor" ).val();
    document.getElementById('propuesta').innerHTML = propuesat;	
    var id_Planeacion = $('#id_Planeacion').val();
    $('#id_Planeacion1').val(id_Planeacion);

  </script>
  <script>

    $(document).ready(function () {
      $('.items li:first-child').addClass("acti");
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
    });
  </script>









  <script src="{{asset('js/Vmodulo1/Propuesta.js')}}"></script>

  <style >
   body{

    background-image: url("img/fondoLogo.jpg");
  }
  .collapsing{
    margin-top: -20px;
    z-index: -1;

  }

</style>




@endsection
