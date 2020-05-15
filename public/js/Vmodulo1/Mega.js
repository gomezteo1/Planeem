var contador = 0;

if(contador == 0){
    document.getElementById('paso2').style.display = 'none';
    document.getElementById('alert').style.display = 'none';
    document.getElementById('paso3').style.display = 'none';
    
}



function paso1(){
    
    document.getElementById('paso1').style.display = 'block';
    document.getElementById('paso2').style.display = 'none';
    document.getElementById('paso3').style.display = 'none';
}


function paso2(){ 
    let Mega = document.getElementById('Mega').value;

       if(Mega == ""){
        alert('error');
        document.getElementById('alert').style.display = 'block';
       }else{
        document.getElementById('paso1').style.display = 'none';
        document.getElementById('paso2').style.display = 'block';
        document.getElementById('paso3').style.display = 'none';
        document.getElementById('alert').style.display = 'none';

        
       }


}


function paso3(){ 
    let Mega = document.getElementById('Mega').value;
       if(Mega == ""){
        alert('error');
        document.getElementById('alert').style.display = 'block';
       }else{
        document.getElementById('paso1').style.display = 'none';
        document.getElementById('paso2').style.display = 'none';
        document.getElementById('paso3').style.display = 'block';
        document.getElementById('alert').style.display = 'none';
       }


}



function paso4(){ 
    let Mega = document.getElementById('Mega').value;
       if(Mega == ""){
        document.getElementById('alert').style.display = 'block';
       }else{
        document.getElementById('paso1').style.display = 'none';
        document.getElementById('paso2').style.display = 'none';
        document.getElementById('paso3').style.display = 'none';
        document.getElementById('alert').style.display = 'none';
    
       }


}


function guardar(){
    let Mega = document.getElementById('Mega').value;

        try{
            localStorage.setItem('Mega1',Mega);
        }catch(e){
             console.log(e);
        }
    }
