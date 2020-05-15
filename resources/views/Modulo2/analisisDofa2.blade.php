@extends('layouts.nav2')
@section('content')
<header>
@yield('js')

</header>
<!-- botones -->
<section class="EPE">
<div class="analisisEfi">
<button class="EFI animated rotateIn"><h3>Mis estrategias</h3></button>

<a class="verde" id="fo" data-toggle="modal" data-target="#exampleModalFo"><img value="mostrarfo" onclick="mostrarfo()" src="img/FO.png" class="object plane move-ne" style="width: 100px; height: 100px;"><div id="hover_muñeco"><h5>Estrategia FO</h5></div></a>
<a class="verde" id="da" data-toggle="modal" data-target="#exampleModalDa"><img value="mostrarda" onclick="mostrarda()" src="img/DA.png" class="object plane move-ne" style="width: 100px; height: 100px;"><div id="hover_muñeco1"><h5>Estrategia DA</h5></div></a>
<a class="verde" id="do" data-toggle="modal" data-target="#exampleModalDo"><img value="mostrardo" onclick="mostrardo()" src="img/DO.png" class="object plane move-ne" style="width: 100px; height: 100px;"><div id="hover_muñeco"><h5>Estrategia DO</h5></div></a>
<a class="verde" id="fa" data-toggle="modal" data-target="#exampleModalFa"><img value="mostrarfa" onclick="mostrarfa()"src="img/FA.png" class="object plane move-ne" style="width: 100px; height: 100px;"><div id="hover_muñeco"><h5>Estrategia FA</h5></div></a>
</div>
<!-- contenedores -->
<div class="row">
<div class="col-md-6 conte1">
<div class="botonopo1" value="Fortalezas_ventana" data-toggle="modal" data-target="#exampleModalResumen">
<h3 style="color: black;margin-left: 38%;">
<img src="img/icono1.png" style="width: 38px;margin-top: -16px;">
<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
<img src="img/icono4.png" style="width: 40px;margin-top: -3px;">
</h3>
<div class="scrollfortaleza3">
<h2 style="color: black;font-size: 47px;font-weight: bold;text-align: center;">Mis estrategias FA</h2>
</div>
</div>
</div>
<div class="col-md-6 conte2">
<div class="botonopo1" value="Oportunidades_ventana" data-toggle="modal" data-target="#exampleModalResumen2">
<h3 style="color: black;margin-left: 38%;">
<img src="img/icono1.png" style="width: 40px;margin-top: -16px;">
<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
<img src="img/icono2.png" style="width: 40px;margin-top: -16px;">
</h3>
<div class="scrollfortaleza3">
<h2 style="color: black;font-size: 44px;font-weight: bold;text-align: center;">Mis estrategias FO</h2>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 conte3">
<div class="botonopo" value="Debilidades_ventana" data-toggle="modal" data-target="#exampleModalResumen3">
<h3 style="color: black;margin-left: 33%;">
<img src="img/icono3.png" style="width: 40px;margin-top: -16px;">
<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
<img src="img/icono2.png" style="width: 40px;margin-top: -16px;">
</h3>
<div class="scrollfortaleza3">
<h2 style="color: black;font-size: 42px;font-weight: bold; text-align: center;">Mis estrategias DO</h2>
</div>
</div>
</div>
<div class="col-md-6 conte4">
<div class="botonopo" value="Amenazas_ventana" data-toggle="modal" data-target="#exampleModalResumen4">
<h3 style="color: black;margin-left: 32%;">
<img src="img/icono3.png" style="width: 40px;margin-top: -16px;">
<img src="img/icono5.png" style="width: 40px;margin-top: -16px;">
<img src="img/icono4.png" style="width: 40px;margin-top: -3px;">
</h3>
<div class="scrollfortaleza">
<h2 style="color: black;font-size: 42px;font-weight: bold; text-align: center;">Mis estrategias DA</h2>

</div>
</div>
</div>
    {{-- <a  href="{{route('analisisAnsorft')}}" style="color:white;" name="nuevo" class="botonDofa btn btn-planeem waves-effect waves-light">Siguiente</a> --}}

<a  href="{{route('analisisAnsorft')}}" style="color:white;" name="nuevo" class="botonDofa btn btn-planeem waves-effect waves-light">Siguiente</a>
</div>
</section>
<div class="infon">
</div>
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
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999999;">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-modificado1">
      <div class="modal-body">
        <div id="cierre_caja4"><a data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
          <p class="Nota">Nota: El perfil de fortalezas y debilidades, se representa gráficamente mediante la calificación de la fortaleza o debilidad con relación a su grado en la escala de Alto (A), Medio (M), y Bajo (B).</p>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- modales de fa,fo,da,do --}}
<div class="modal fade" id="exampleModalResumen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="Fortalezasventana">
      <div class="modal-header">
       <h1 style="color: black;margin-left: 34%;">
        Mis estrategias FA
      </h1>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;" >
       <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
     </button>
   </div>
   <div class="modal-body">
    <div class="scrollfortaleza2">
      <div class="container">
        <div class="modal-body">
          <div class="scrollfEstra">
            <h1>Amenazas</h1>
            @foreach ($amenaza as $amenaza)
            <div class="input-group flex-nowrap">
      
              <div class="input-group-prepend">
                <span class="input-group-text" id="addon-wrapping"></span>
              </div>
            <input type="text" class="form-control" value="{{$amenaza->nombre}}" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            @endforeach
          
  
            <h1>fortaleza2</h1>
            @foreach ($fortaleza2 as $fortaleza2)
  
            <div class="input-group flex-nowrap">
                <input type="text" class="form-control" value="{{$fortaleza2->nombre}}" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
                  
              @endforeach
          </div>
        </div>
      </div>
      <a type="button" style="color:white;" data-toggle="modal" data-target="#staticBackdrop" class="DiseñarEstra btn btn-planeem waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          Guardar
      </a>
    </div>
  </div>
</div>
</div>
</div>
<!-- Modal de foo -->
<div class="modal fade" id="exampleModalResumen2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="Fortalezasventana">
      <div class="modal-header">
       <h1 style="color: black;margin-left: 34%;">
        Mis estrategias FO
      </h1>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;" >
       <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
     </button>
   </div>
   <div class="modal-body">
    <div class="scrollfortaleza2">
      <div class="container">
        <div class="row">
          <div class="modal-body">
            <div class="scrollfEstra">
              <h1>oportunidades </h1>
        
        
                @foreach ($oportunidad3 as $oportunidad3)
                <div class="input-group flex-nowrap">
                  <input type="text" class="form-control" value="{{$oportunidad3->nombre}}"  placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                  </div>
                @endforeach
            
              
            
    
              <h1>fortalezas </h1>
              @foreach ($fortaleza3 as $fortaleza3)
    
              <div class="input-group flex-nowrap">
              <input type="text" class="form-control" value="{{$fortaleza3->nombre}}"  placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
              </div>
                    
                @endforeach
            </div>
          </div>
        </div>
      </div>
      <a type="button" style="color:white;" data-toggle="modal" data-target="#staticBackdrop" class="DiseñarEstra btn btn-planeem waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          Guardar
      </a>
    </div>
  </div>
</div>
</div>
</div>

<!-- Modal de doo -->
<div class="modal fade" id="exampleModalResumen3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="Fortalezasventana">
      <div class="modal-header">
       <h1 style="color: black;margin-left: 34%;">
        Mis estrategias DO
      </h1>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;" >
       <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
     </button>
   </div>
   <div class="modal-body">
    <div class="scrollfortaleza2">
      <div class="container">
        <div class="row">
          <div class="scrollfEstra">
            <h1>debilidades  </h1>
      
      
          @foreach ($debilidad3 as $debilidad3)
          <div class="input-group flex-nowrap">
          <input type="text" class="form-control" value="{{$debilidad3->nombre}}"   placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
          @endforeach
          
    
            <h1>amenazas </h1>
            @foreach ($amenaza3 as $amenaza3)
            <div class="input-group flex-nowrap">
            <input type="text" class="form-control" value="{{$amenaza3->nombre}}"  placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
              </div>
                    
            @endforeach
          
             
          </div>
        </div>
      </div>
      <a type="button" style="color:white;" data-toggle="modal" data-target="#staticBackdrop" class="DiseñarEstra btn btn-planeem waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          Guardar
      </a>
    </div>
  </div>
</div>
</div>
</div>

<!-- Modal de daaa -->
<div class="modal fade" id="exampleModalResumen4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="Fortalezasventana">
      <div class="modal-header">
       <h1 style="color: black;margin-left: 34%;">
        Mis estrategias DA
      </h1>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;margin-left: 0% !important;" >
       <span class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></span>
     </button>
   </div>
   <div class="modal-body">
    <div class="scrollfortaleza2">
      <div class="container">
        <div class="row">
          <div class="scrollfEstra">
            <h1>debilidades  </h1>
      
      
          @foreach ($debilidad4 as $debilidad4)
          <div class="input-group flex-nowrap">
          <input type="text" class="form-control" value="{{$debilidad4->nombre}}"   placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
          @endforeach
          
    
            <h1>oportunidades  </h1>
            @foreach ($oportunidad4 as $oportunidad4)
            <div class="input-group flex-nowrap">
            <input type="text" class="form-control" value="{{$oportunidad4->nombre}}"  placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
              </div>
                    
            @endforeach
          
             
          </div>
        </div>
      </div>
      <a type="button" style="color:white;" data-toggle="modal" data-target="#staticBackdrop" class="DiseñarEstra btn btn-planeem waves-effect waves-light" data-dismiss="modal" aria-label="Close">
          Guardar
      </a>
    </div>
  </div>
</div>
</div>
</div>
<!-- -----Modales de diseñar estrategias Fa-------------->
 

<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" id="modal-Estrategias">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="text-align: center;">Mis estrategias</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-circle" style="color: #FC7323; cursor: pointer; outline: none;"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="scrollfEstra">
          <div class="input-group flex-nowrap">
            <div class="input-group-prepend">
              <span class="input-group-text" id="addon-wrapping">1</span>
            </div>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
          </div>

          <div class="input-group flex-nowrap">
            <div class="input-group-prepend">
              <span class="input-group-text" id="addon-wrapping">2</span>
            </div>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-planeem waves-effect waves-light" data-dismiss="modal" style="color: #fff;">Agregar</button>
        <button type="button" class="btn btn-planeem waves-effect waves-light" style="color: #fff;">Eliminar</button>
        <a type="button"class="btn btn-planeem waves-effect waves-light" style="color: #fff;" data-dismiss="modal" aria-label="Close">Guardar</a>
      </div>
    </div>
  </div>
</div>
<!-- -----Modales de diseñar estrategias Fo-------------->
<div class="modal fade" id="staticBackdrop2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" id="modal-Estrategias">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="text-align: center;">Mis estrategias</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-circle" style="color: #FC7323; cursor: pointer; outline: none;"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="scrollfEstra">
          <div class="input-group flex-nowrap">
            <div class="input-group-prepend">
              <span class="input-group-text" id="addon-wrapping">3</span>
            </div>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
          </div>

          <div class="input-group flex-nowrap">
            <div class="input-group-prepend">
              <span class="input-group-text" id="addon-wrapping">4</span>
            </div>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-planeem waves-effect waves-light" data-dismiss="modal" style="color: #fff;">Agregar</button>
        <button type="button" class="btn btn-planeem waves-effect waves-light" style="color: #fff;">Eliminar</button>
        <a type="button"class="btn btn-planeem waves-effect waves-light" style="color: #fff;" data-dismiss="modal" aria-label="Close">Guardar</a>
      </div>
    </div>
  </div>
</div>

<!-- -----Modales de diseñar estrategias Da-------------->
<div class="modal fade" id="staticBackdrop3" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" id="modal-Estrategias">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="text-align: center;">Mis estrategias</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-circle" style="color: #FC7323; cursor: pointer; outline: none;"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="scrollfEstra">
          <div class="input-group flex-nowrap">
            <div class="input-group-prepend">
              <span class="input-group-text" id="addon-wrapping">5</span>
            </div>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
          </div>

          <div class="input-group flex-nowrap">
            <div class="input-group-prepend">
              <span class="input-group-text" id="addon-wrapping">6</span>
            </div>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-planeem waves-effect waves-light" data-dismiss="modal" style="color: #fff;">Agregar</button>
        <button type="button" class="btn btn-planeem waves-effect waves-light" style="color: #fff;">Eliminar</button>
        <a type="button"class="btn btn-planeem waves-effect waves-light" style="color: #fff;" data-dismiss="modal" aria-label="Close">Guardar</a>
      </div>
    </div>
  </div>
</div>

<!-- -----Modales de diseñar estrategias Do-------------->
<div class="modal fade" id="staticBackdrop4" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" id="modal-Estrategias">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalCenterTitle" style="text-align: center;">Mis estrategias</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="icon-cancel-circle" style="color: #FC7323; cursor: pointer; outline: none;"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="scrollfEstra">
          <div class="input-group flex-nowrap">
            <div class="input-group-prepend">
              <span class="input-group-text" id="addon-wrapping">7</span>
            </div>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
          </div>

          <div class="input-group flex-nowrap">
            <div class="input-group-prepend">
              <span class="input-group-text" id="addon-wrapping">8</span>
            </div>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-planeem waves-effect waves-light" data-dismiss="modal" style="color: #fff;">Agregar</button>
        <button type="button" class="btn btn-planeem waves-effect waves-light" style="color: #fff;">Eliminar</button>
        <a type="button"class="btn btn-planeem waves-effect waves-light" style="color: #fff;" data-dismiss="modal" aria-label="Close">Guardar</a>
      </div>
    </div>
  </div>
</div>
{{-- modales pequeños de fa fo etc --}}
<div class="modal fade" id="exampleModalFo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-modificado1">
      <div class="modal-body">
        <div id="cierre_caja4"><a value="ocultardo" onclick="ocultardo()" data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
          <p class="Nota">Nota: El perfil de fortalezas y debilidades, se representa gráficamente mediante la calificación de la fortaleza o debilidad con relación a su grado en la escala de Alto (A), Medio (M), y Bajo (B).</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalDo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-modificado1">
      <div class="modal-body">
        <div id="cierre_caja4"><a value="ocultardo" onclick="ocultardo()" data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
          <p class="Nota">Nota: El perfil de fortalezas y debilidades, se representa gráficamente mediante la calificación de la fortaleza o debilidad con relación a su grado en la escala de Alto (A), Medio (M), y Bajo (B).</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalDa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-modificado1">
      <div class="modal-body">
        <div id="cierre_caja4"><a value="ocultarda" onclick="ocultarda()" data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
          <p class="Nota">Nota: El perfil de fortalezas y debilidades, se representa gráficamente mediante la calificación de la fortaleza o debilidad con relación a su grado en la escala de Alto (A), Medio (M), y Bajo (B).</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalFa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-modificado1">
      <div class="modal-body">
        <div id="cierre_caja4"><a value="ocultarfa" onclick="ocultarfa()" data-dismiss="modal" aria-label="Close" style="background: white; outline: none !important; margin-left: 93%"><i class="icon-cancel-circle" style="color: #FC7323; font-size: 21px;margin-top: 2%; cursor: pointer;"></i></a>
          <p class="Nota">Nota: El perfil de fortalezas y debilidades, se representa gráficamente mediante la calificación de la fortaleza o debilidad con relación a su grado en la escala de Alto (A), Medio (M), y Bajo (B).</p>
        </div>
      </div>
    </div>
  </div>
</div>




</section>
@yield('script')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>

  $(document).ready(function () {
   $('.items li:nth-child(13)').addClass("acti");
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
