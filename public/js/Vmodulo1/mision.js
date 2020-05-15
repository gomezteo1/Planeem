var contador = 0;

if(contador == 0){
    document.getElementById('paso2').style.display = 'none';
    document.getElementById('alert').style.display = 'none';
    document.getElementById('paso3').style.display = 'none';
    document.getElementById('paso4').style.display = 'none';
    
}



function paso1(){
    
    document.getElementById('paso1').style.display = 'block';
    document.getElementById('paso2').style.display = 'none';
    document.getElementById('paso3').style.display = 'none';
    document.getElementById('paso4').style.display = 'none';
}


function paso2(){ 
    let mision = document.getElementById('Mision').value;

       if(mision == ""){
        alert('error');
        document.getElementById('alert').style.display = 'block';
       }else{
        document.getElementById('paso1').style.display = 'none';
        document.getElementById('paso2').style.display = 'block';
        document.getElementById('paso3').style.display = 'none';
        document.getElementById('paso4').style.display = 'none';
        document.getElementById('alert').style.display = 'none';

        
       }


}


function paso3(){ 
    let mision = document.getElementById('Mision').value;
       if(mision == ""){
        alert('error');
        document.getElementById('alert').style.display = 'block';
       }else{
        document.getElementById('paso1').style.display = 'none';
        document.getElementById('paso2').style.display = 'none';
        document.getElementById('paso3').style.display = 'block';
        document.getElementById('paso4').style.display = 'none';
        document.getElementById('alert').style.display = 'none';
       }


}



function paso4(){ 
    let mision = document.getElementById('Mision').value;
       if(mision == ""){
        document.getElementById('alert').style.display = 'block';
       }else{
        document.getElementById('paso1').style.display = 'none';
        document.getElementById('paso2').style.display = 'none';
        document.getElementById('paso3').style.display = 'none';
        document.getElementById('paso4').style.display = 'block';
        document.getElementById('alert').style.display = 'none';
    
       }


}


function guardar(){
    let mision = document.getElementById('Mision').value;

    if(mision == ""){
        document.getElementById('alert').style.display = 'block';
    }else{
        try{
            localStorage.setItem('Mision1',mision);

                
        let progres1 = localStorage.getItem('progressbar');
        let progres2 = localStorage.getItem('progressbar2');

        let progr= '40%';
        let progr2= '60%';



        if(progres1 <= progr && progres2 <= progr2 ){
            console.log('error')

          }else{
            localStorage.setItem('itm',3);
              localStorage.setItem('progressbar',progr);
              localStorage.setItem('progressbar2',progr2);
          }

        }catch(e){
             console.log(e);
        }
    }
}