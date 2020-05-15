@extends('layouts.app')
@section('content')
<div  class="justify-content-center bajar">
    <div class="contenedor">
        {{-- contenido del modal --}}
        <div class="card-content" id='' >
            @if (session('status'))
            <div id="alerta" class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            {{-- encabezado del modal --}}
            <div class="card-header text-center">
                <h4 id="recuperar" class="card-tittle">{{ __('Recuperar Contraseña') }}</h4>
                <a href="{{ route('index') }}/#login" class="close icon-undo2" style="color:white;margin-left: 93% !important;"></a>
                <hr id="linea">
            </div>
            {{-- fin contenido del modal --}}
            {{-- prueba --}}
            <div class="card-body">
                <br>
                <form id="formatoreset" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div id="texto" class="col-md-10">
                        <p>Porfavor ingresa la dirección de tú correo electronico y te enviaremos
                            un link de recuperacion de datos.
                        </p>
                    </div>
                    <div class="col-md-12">
                        <div id="resetemail" class="inner-addon left-addon">
                            <i class="glyphicon icon-envelop" style="color:black"></i>
                            <input id="emails" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" placeholder="Correo Electronico" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="text-center mt-2" style="margin-left: 16rem;">
                                <button id="enviarreset" class="btn btn-planeem waves-effect waves-light" style="color:black;"> {{ __('Enviar') }}</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- termina contenido del modal --}}

{{-- estilos  para el lo que sea --}}

<style>

.bajar{
    margin-top:20%;
}
#texto{
    color:white;
    font-size: 1rem;
}
#recuperar{
    color:white;
}
body{
    background-image: url("../img/fondologo.jpg");
    background-size: 100%;
}
#recuperar{
    font-size: 1.4rem;
    text-align: left !important;
    margin-left: 8%;
    width: 38%;
    margin-top: 0%;
    margin-bottom: -4%;
}
#resetemail{
    margin-left: 0rem;
}
#formatoreset{
    margin: 3.8rem;
}
.card-body{
    margin-top: -4rem;
}
#enviarreset{
    border-radius: 0.6rem;
    height: 45px;
    padding: 15px;
    margin-left: 25rem;
    color: white;
}
.card-content{
    height: 19rem;
    margin-left: 21%;
    margin-right: 21%;
    background-color: #238276;
    border-radius: 20px;
    margin-top: -7%;
}
.card-header{
    border-top-left-radius: .125rem;
    border-top-right-radius: .125rem;
    border-bottom: none;
    background-color: #238276;
    border-radius: 20px !important;
    margin-top: 41px;

}
#linea{
    background-color: white;
    width: 23%;
    margin-right: 39%;
    position: absolute;
    margin-left: -20px;
    margin-top: 12px;
}
#alerta{
    margin-top: -67px;

}


/* comentario */
</style>

@endsection
