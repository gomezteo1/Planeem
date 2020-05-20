@extends('layouts.nav')

@section('content')
<header>
  <div>
    <div class="progress">
      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>
</header>
<div class="form-group">
 <div class="mx-auto ">
  <div id="text" class="contenedor3  ">
    <form class="was-validated">
      <div class="mb-3">
        <textarea maxlength="1205"4 class="form-control is-invalid campo" id="propuesta" placeholder="Texto requerido" required></textarea>

      </div>
    </form>
  </div>
</div>

<div id="regiration_form">
  <fieldset>
    <div id="paso2">
      <div class="col-md-auto mx-auto mt-auto">
        <p class="para"><b style="color: #0AB5A0">Para</b> (el cliente objetivo)
          Identificar  a quién le va a vender su producto o servicio, eso le facilitará el desarrollo del plan de comunicación y promoción de su oferta, ya que inicialmente contará con percepciones sobre sus gustos, sus características, su demografía, entre otros. <br>Ejemplo:<b style="color: #0AB5A0">"Para empresas”</b></p>
        </div>
        <p class="formula3">Fórmula: <b style="color: #0AB5A0">Para</b> (el cliente objetivo) + <b style="color:#0AB5A0">Que</b> (necesidad u oportunidad) + <b style="color:#0AB5A0">Nuestro</b> (nombre del producto/servicio) /categoría del producto) + (<b style="color:#0AB5A0">Beneficio</b>/Factor diferenciador)</p>
        <button onclick="paso2()"  name="password" style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
      </div>
    </fieldset>
    <fieldset id="paso3">
      <div>
        <div>
          <p class="necesidad"><b style="color: #0AB5A0">Que</b> (necesidad u oportunidad)<br>
              Trata de ser lo más específico en este punto, ya que de esta forma sabrá qué está ofertando en el mercado y qué cantidad de clientes potenciales obtendrá.<br>
              Cuál es el producto o servicio que les ofrece a sus clientes?<br><br>
              Aquí logrará identificar el elemento diferenciador que brinda a diferencia de sus competidores.
              <br>
            <b style="color: #0AB5A0">Ejemplo: “Para empresas que quieren mejorar su presencia en internet, nuestra asesoría de contenidos”</b></p>
          </div>
          <p class="formula">Fórmula: <b style="color: #0AB5A0">Para</b> (el cliente objetivo) + <b style="color:#0AB5A0">Que</b> (necesidad u oportunidad) + <b style="color:#0AB5A0">Nuestro</b> (nombre del producto/servicio) /categoría del producto) + (<b style="color:#0AB5A0">Beneficio</b>/Factor diferenciador)</p>
        </div>
        <button onclick="paso3()"  style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</button>
        <button onclick="paso1()" style="color:white;"  class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</button>
      </fieldset>
      <fieldset id="paso4">
       <div>
        <div class="form-group">
          <section>
           <div>
            <p class="cual"><b style="color: #0AB5A0">Cuál es su elemento diferenciador:</b><br>
                Ya sea que su oferta se entrega a domicilio, en Centros Comerciales, a través de aplicaciones web o cualquier otro aspecto determinante, <br>
                enumere todas las características de su producto o servicio y compárelo con su competencia directa, de esta forma tendrá más claro qué<br>
                es lo que lo hace realmente diferente y lo que apreciarán sus clientes.<br>
             <b style="color: #0AB5A0">Ejemplo: “Para empresas que quieren mejorar su presencia en internet, nuestra asesoría de contenidos les permitirá mejorar sus ventas y su reputación online”</b></p>
           </div>

           <p class="formula">Fórmula: <b style="color: #0AB5A0">Para</b> (el cliente objetivo) + <b style="color:#0AB5A0">Que</b> (necesidad u oportunidad) + <b style="color:#0AB5A0">Nuestro</b> (nombre del producto/servicio) /categoría del producto) + (<b style="color:#0AB5A0">Beneficio</b>/Factor diferenciador)</p>
         </section>
       </div>
     </div>
     <a href="{{ route('Propuesta') }}" onclick="guardar()"  style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Guardar</a>
     {{-- <button onclick="paso3()" style="color:white;"  class="previous anterior btn btn-planeem waves-effect waves-light">Editar</button>  --}}
     {{-- <button onclick="paso4()"  style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</button> --}}
     <button onclick="paso2()" style="color:white;"  class="previous anterior btn btn-planeem waves-effect waves-light">Anterior</button>
   {{-- </fieldset>
   <fieldset id="paso5">
    <div>
      <section>
        {{-- <div> --}}
         {{-- <p class="elemento "><b style="color: #0AB5A0">Cuál es tu elemento diferenciador:</b><br>
            Ya sea que su oferta se entrega a domicilio, en centros comerciales, a través de aplicaciones web o cualquier otro aspecto determinante, enumere todas las características de su producto o servicio y compáralo con su competencia directa.<br>
            <b style="color: #0AB5A0">Ejemplo: “Para empresas que quieren mejorar su presencia en internet, nuestra asesoría de contenidos les permitirá mejorar sus ventas y su reputación online”</b></p>
          </div>
          <p class="formula">Fórmula: <b style="color: #0AB5A0">Para</b> (el cliente objetivo) + <b style="color:#0AB5A0">Que</b> (necesidad u oportunidad) + <b style="color:#0AB5A0">Nuestro</b> (nombre del producto/servicio) /categoría del producto) + (<b style="color:#0AB5A0">Beneficio</b>/Factor diferenciador)</p>
        </section>
      </div> --}}
      {{-- <a href="{{ route('Propuesta') }}" onclick="guardar()"  style="color:white;" class="next siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>
      <button onclick="paso3()" style="color:white;"  class="previous anterior btn btn-planeem waves-effect waves-light">Editar</button> --}}
    </fieldset>
  </div>
  <span class="icon-info" data-toggle="modal" data-target="#exampleModalScrollable" style="cursor:pointer;"></span>
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle" style="margin-left: 252px; font-weight: bold;">Propuesta De Valor</h5>
          <span class="icon-cancel-circle" style="color:#FC7323; font-size: 32px; cursor: pointer; margin-top: 4px;
          margin-left: 10%;" data-dismiss="modal" aria-label="Close"></span>

        </div>
        <!--Modal -->
        <div class="modal-body">
          <p>Para desarrollar la propuesta de valor debe responder las siguientes preguntas:<br>
              Para (el cliente objetivo) +<br> Que (necesidad u oportunidad) +<br> Nuestro (nombre del producto/servicio)
              / Categoría del producto) +<br> (Beneficio/Factor diferenciador)<br>
              Al responder estas preguntas en el siguiente recuadro obtendrá la propuesta de valor de su empresa...... (((vista4.blade))))))</p>
        </div>
      </div>
    </div>
  </div>


  <label type="text" id="nombre"></label><br>
  <!-- Modal -->
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
  })
</script>
<script>
  let progreso = localStorage.getItem('progressbar');
  let progreso2 = localStorage.getItem('progressbar2')
  document.getElementById('progress1').style.width = progreso;
  document.getElementById('progress2').style.width = progreso2;
  document.getElementById('icono').style.left= '28%';

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
