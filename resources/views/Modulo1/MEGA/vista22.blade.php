@extends('layouts.nav')

@section('content')
	<header>

  </header>


  <div class="contenedor3">
    <textarea maxlength="1205"  id="Mega" class="campo" name="Objetivo" required></textarea>
    <br>
</div>

<p class="formula"> Fórmula(A):<b style="color: #0AB5A0"> Objetivo desafiante</b> + <b style="color: #0AB5A0">Definición de nicho</b> + <b style="color: #0AB5A0">Horizonte de tiempo</b>
    <br>
    Fórmula(B):<b style="color: #0AB5A0"> Horizonte de tiempo</b> + <b style="color: #0AB5A0">Objetivo desafiante</b> + <b style="color: #0AB5A0">Definición de nicho</b></p>

<a href="{{ route('MEGA/list') }}" style="color:white;" onclick="guardar()" class="siguiente btn btn-planeem waves-effect waves-light">Siguiente</a>



<br>

<script>
    let mega = localStorage.getItem('Mega1');
    document.getElementById('Mega').innerHTML = mega;
</script>


<script>

        function guardar(){
            let Mega = document.getElementById('Mega').value;

            if(Mega == ""){
            
            }else{
                try{
                    localStorage.setItem('Mega1',Mega);

                }catch(e){
                    console.log(e);
                }
            }
        }


</script>






  



@endsection

