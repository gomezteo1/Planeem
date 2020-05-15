var contador = 0;



if (contador == 0) {

    // document.getElementById('progres').style.display='block';
    document.getElementById('text').style.display = 'block';
    document.getElementById('paso2').style.display = 'block';
    document.getElementById('paso3').style.display = 'none';
    document.getElementById('paso4').style.display = 'none';
    document.getElementById('paso5').style.display = 'none';


}



function paso1() {


    // document.getElementById('progres').style.display='block';
    document.getElementById('text').style.display = 'block';
    document.getElementById('paso2').style.display = 'block';
    document.getElementById('paso3').style.display = 'none';
    document.getElementById('paso4').style.display = 'none';
    document.getElementById('paso5').style.display = 'none';
}





function paso2() {
    var text = document.getElementById('propuesta').value;


    if (text == "") {
        document.getElementById('alert').style.display = 'block';
    } else {
        document.getElementById('text').style.display = 'block';
        document.getElementById('paso2').style.display = 'none';
        document.getElementById('paso3').style.display = 'block';
        document.getElementById('paso4').style.display = 'none';
        document.getElementById('paso5').style.display = 'none';
    }
}




function paso3() {
    var text = document.getElementById('propuesta').value;


    if (text == "") {
        document.getElementById('alert').style.display = 'block';

    } else {
        document.getElementById('text').style.display = 'block';
        document.getElementById('paso2').style.display = 'none';
        document.getElementById('paso3').style.display = 'none';
        document.getElementById('paso4').style.display = 'block';
        document.getElementById('paso5').style.display = 'none';
    }
}


function inic() {
    var text = document.getElementById('propuesta').value;

    var inic = 0;
    if (inic == 0) {

        // document.getElementById('progres').style.display='block';
        document.getElementById('progress').style.display = 'none';
        document.getElementById('paso2').style.display = 'none';
        document.getElementById('text').style.display = 'none';
        document.getElementById('paso3').style.display = 'none';
        document.getElementById('paso4').style.display = 'none';
        document.getElementById('paso5').style.display = 'none';
        document.getElementById('inic').style.display = 'block';
    } else {
        alert('ERROR');
    }

}



function paso4() {
    var text = document.getElementById('propuesta').value;

    if (text == "") {
        // document.getElementById('progres').style.display='block';
        document.getElementById('alert').style.display = 'block';

    } else {
        document.getElementById('text').style.display = 'block';
        document.getElementById('paso2').style.display = 'none';
        document.getElementById('paso3').style.display = 'none';
        document.getElementById('paso4').style.display = 'none';
        document.getElementById('paso5').style.display = 'block';
    }
}


function guardar() {

    var text = document.getElementById('propuesta').value;

    let progres1 = localStorage.getItem('progressbar');
    let progres2 = localStorage.getItem('progressbar2');

    let progr = '20%';
    let progr2 = '80%';


    if (text == "") {
        document.getElementById('alert').style.display = 'block';
    } else {
        var Propuesta = document.getElementById('propuesta').value;
        localStorage.setItem('propuesta', Propuesta);


        if (progres1 <= progr && progres2 <= progr2) {
            console.log('error')

        } else {
            localStorage.setItem('itm', 2);
            localStorage.setItem('progressbar', progr);
            localStorage.setItem('progressbar2', progr2);
        }




    }
}