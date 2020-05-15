function solonumeros(e){
    key=e.keyCode || e.which;

    tecaldo = String.fromCharCode(key);

    numero=".01234567890,"

    especiales="8-37-38-46";

    teclado_especial=false;


    for(var i in especiales){
        if(key==especiales[i]){
            teclado_especial=true;
        }
    }

    if(numero.indexOf(tecaldo)==-1 && !teclado_especial){
        return false;
    }
}