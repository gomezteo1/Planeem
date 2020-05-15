var init= 0;

if(init == 0){
    document.getElementById('paso2').style.display = 'none';
    document.getElementById('alert').style.display = 'none'


}


function paso2(){
let Vision = document.getElementById('Vision').value;
    if(  Vision == ""){
        document.getElementById('alert').style.display = 'block'
        
    }else{
        localStorage.setItem('itm',4);
        document.getElementById('paso2').style.display = 'block';
        document.getElementById('paso1').style.display = 'none';
        document.getElementById('alert').style.display = 'none'

    }
}


function paso1 (){
    document.getElementById('paso2').style.display = 'none';
    document.getElementById('paso1').style.display = 'block';

}


function guardar(){
    let Vision = document.getElementById('Vision').value;
    if(Vision == ""){
        document.getElementById('alert').style.display = 'block';
    }else{
        try{

            let progres1 = localStorage.getItem('progressbar');
            let progres2 = localStorage.getItem('progressbar2');
              document.getElementById('alert').style.display = 'none'

    
            let progr= '80%';
            let progr2= '40%';

            
        if(progres1 <= progr && progres2 <= progr2 ){
            console.log('error')

          }else{
              localStorage.setItem('progressbar',progr);
              localStorage.setItem('progressbar2',progr2);
          }

            localStorage.setItem('Vision',Vision);
        }catch(e){
              console.log(e);
        }
    }
}