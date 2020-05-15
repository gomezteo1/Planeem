@extends('layouts.app')

@section('content')

<br>
<br>
<br>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Planeacion</th>
        <th scope="col">nombre_proyecto</th>
        <th scope="col">fechainicio</th>
        <th scope="col">estado</th>
      </tr>
    </thead>
    @foreach ($planecion as $planecion)
    @if($planecion->id_usuario ==   Auth::user()->id )
    @if($planecion->estado ==   1 )

     <tbody>
        <tr>

           
            <th scope="row">{{$planecion->id_Planeacion}}</th>
            <td>{{$planecion->nombre_proyecto}}</td>
            <td>{{$planecion->fechainicio}}</td>
              @if($planecion->estado == 1)
                <td>Eliminado</td>
                @else
                <td>{{$planecion->estado}}</td>
              @endif
              <td><a href="{{route('Restaurar',$planecion->id_Planeacion)}}"  type="button" class="btn btn-warning">Restaurar</a></td>

          </tr>
     </tbody>
     @endif
    @endif
   
    @endforeach
  </table>



@endsection