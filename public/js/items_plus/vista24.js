//Se crean acá las opciones y donde se listan es en option.js

function option1() {




    try {
        $("#option1").click(function() {
            $("#option1").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })
            var valor = "Amor";
            var descaript = "Trabajamos con el sentimiento más grande que es el amor e influimos sobre nuestros colaboradores para que identifiquen y amen lo que hacen en cada área de la empresa."

            localStorage.setItem('Actitud1', valor);
            localStorage.setItem('Actitud2', descaript);

        });
        $("#option1").dblclick(function() {
            $("#option1 ").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Actitud1');
            localStorage.removeItem('Actitud2')
        });



    } catch (e) {
        console.log('ERROR', e)
    }




}





function option2() {





    try {




        $("#option2").click(function() {
            $("#option2").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })
            var valor = "Confianza";
            var descaript = "Trabajamos en la transparencia y credibilidad para nuestros colaboradores y clientes, con la convicción de que nuestro proceder les genera seguridad y confianza. "


            localStorage.setItem('Aprendizaje', valor);
            localStorage.setItem('Aprendizaje2', descaript);

        });
        $("#option2").dblclick(function() {
            $("#option2 ").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Aprendizaje');
            localStorage.removeItem('Aprendizaje2')
        });


    } catch (e) {
        console.log('ERROR', e)
    }


}





function option3() {




    try {


        $("#option3").click(function() {
            $("#option3").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })
            var valor = "Constancia";
            var descaript = "La voluntad inquebrantable y continua determina el que hacer de nuestra labor empresarial."


            localStorage.setItem('Asertividad1', valor);
            localStorage.setItem('Asertividad2', descaript);

        });
        $("#option3").dblclick(function() {
            $("#option3 ").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Asertividad1');
            localStorage.removeItem('Asertividad2')
        });



    } catch (e) {
        console.log('ERROR', e)
    }





}


function option4() {

    try {

        $("#option4").click(function() {
            $("#option4").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })
            var valor = "Comunicación";
            var descaript = "Expresarnos de manera clara, simple, oportuna y direccionada nos permite tener mejores relaciones dentro" +
                " de la empresa y nos conduce a resultados efectivos y eficientes de nuestros objetivos."

            localStorage.setItem('Autocritica1', valor);
            localStorage.setItem('Autocritica2', descaript);

        });
        $("#option4").dblclick(function() {
            $("#option4").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Autocritica1');
            localStorage.removeItem('Autocritica2');
        });

    } catch (e) {
        console.log('ERROR', e)
    }

}



function option5() {


    try {




        $("#option5").click(function() {
            $("#option5").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })
            var valor = "Confidencialidad";
            var descaript = "Estamos comprometidos con la información confidencial de nuestra empresa, tanto en los procesos como en la privacidad de datos de los colaboradores, clientes y Stakeholders."



            localStorage.setItem('Calidad1', valor);
            localStorage.setItem('Calidad2', descaript);

        });
        $("#option5").dblclick(function() {
            $("#option5").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Calidad1');
            localStorage.removeItem('Calidad2');
        });





    } catch (e) {
        console.log('ERROR', e)
    }


}





function option6() {




    try {


        $("#option6").click(function() {
            $("#option6").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })
            var valor = "Creatividad ";
            var descaript = "Promovemos el pensamiento disruptivo de nuestros colaboradores, clientes y stakeholders en pro de generar espacios de construcción, buscando siempre superar expectativas."


            localStorage.setItem('vida1', valor);
            localStorage.setItem('vida2', descaript);


        });
        $("#option6").dblclick(function() {
            $("#option6").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('vida1');
            localStorage.removeItem('vida2');
        });






    } catch (e) {
        console.log('ERROR', e)
    }





}





function option7() {






    try {



        $("#option7").click(function() {
            $("#option7").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })
            var valor = "Compromiso";
            var descaript = "Fomentar la responsabilidad con nuestros colaboradores, clientes y stakeholders" +
                " es la forma de entender nuestra actividad empresarial y la importancia del trabajo bien hecho."


            localStorage.setItem('Compromiso1', valor);
            localStorage.setItem('Compromiso2', descaript);



        });
        $("#option7").dblclick(function() {
            $("#option7").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Compromiso1');
            localStorage.removeItem('Compromiso1');
        });



    } catch (e) {
        console.log('ERROR', e)
    }





}





function option8() {






    try {







        $("#option8").click(function() {
            $("#option8").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })


            var valor = "Diversidad";
            var descaript = "Trabajamos de manera inclusiva con un equipo multidisciplinario, de diferente raza, religión y género, sin discriminación alguna."


            localStorage.setItem('Comunicación1', valor);
            localStorage.setItem('Comunicación2', descaript);



        });
        $("#option8").dblclick(function() {
            $("#option8").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Comunicación1');
            localStorage.removeItem('Comunicación2');
        });




    } catch (e) {
        console.log('ERROR', e)
    }





}


//no pasan estos valores

function option9() {
    try {
        $("#option9").click(function() {
            $("#option9").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })
            var valor = "Disciplina";
            var descaript = "Actuamos de manera perseverante y ordenada con base en los lineamentos empresariales para satisfacer las necesidades de nuestros colaboradores,clientes, y proveedores."
            localStorage.setItem('Constancia1', valor);
            localStorage.setItem('Constancia2', descaript);
        });
        //Con la funcion doble clik se quita lo que se tiene señalado 
        $("#option9").dblclick(function() {
            $("#option9").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Constancia1');
            localStorage.removeItem('Constancia2');
        });
    } catch (e) {
        console.log('ERROR', e)
    }
}

function option10() {
    try {
        $("#option10").click(function() {
            $("#option10").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })
            var valor = "Ética";
            var descaript = "Basados en los principios y normas de la empresa actuamos desde la cordialidad y entendimiento de las diferencias, escuchando y reconociendo el criterio de cada colaborador o cliente en pro de tomar decisiones correctas para afianzar la credibilidad y la confiabilidad en la empresa."
            localStorage.setItem('Creatividad1', valor);
            localStorage.setItem('Creatividad2', descaript);
        });
        $("#option10").dblclick(function() {
            $("#option10").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Creatividad1');
            localStorage.removeItem('Creatividad2');
        });
    } catch (e) {
        console.log('ERROR', e)
    }
}
//no pasan estos valores


function option11() {



    try {


        $("#option11").click(function() {
            $("#option11").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })


            var valor = "Empatia";
            var descaript = "Buscamos permanentemente habilidades sociales de convivencia que nos " +
                "permitan entender las actitudes y acciones que guían el comportamiento " +
                "de nuestros colaboradores, clientes y proveedores."


            localStorage.setItem('Crecimiento1', valor);
            localStorage.setItem('Crecimiento2', descaript);



        });
        $("#option11").dblclick(function() {
            $("#option11").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Crecimiento1');
            localStorage.removeItem('Crecimiento2');
        });




    } catch (e) {
        console.log('ERROR', e)
    }




}



function option12() {


    try {


        $("#option12").click(function() {
            $("#option12").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })


            var valor = "Equidad";
            var descaript = "Tratamos a nuestros colaboradores con igualdad y respeto, brindándoles herramientas y valores para el crecimiento y reconocimiento de su dignidad humana.  "


            localStorage.setItem('Disciplina1', valor);
            localStorage.setItem('Disciplina2', descaript);


        });
        $("#option12").dblclick(function() {
            $("#option12").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Disciplina1');
            localStorage.removeItem('Disciplina2');
        });




    } catch (e) {
        console.log('ERROR', e)
    }






}



function optiona2_2() {




    try {



        $("#optiona2").click(function() {
            $("#optiona2").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })


            var valor = "Flexibilidad";
            var descaript = "Adaptarnos a los cambios y aceptar los nuevos retos que nos" +
                " depara el futuro nos permite el desarrollo empresarial permanente y nos prepara eficazmente para entornos competitivos. "


            localStorage.setItem('Disponibilidad1', valor);
            localStorage.setItem('Disponibilidad2', descaript);



        });
        $("#optiona2").dblclick(function() {
            $("#optiona2").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Disponibilidad1');
            localStorage.removeItem('Disponibilidad2');
        });





    } catch (e) {
        console.log('ERROR', e)
    }





}



function optiona2_3() {





    try {


        $("#optiona3").click(function() {
            $("#optiona3").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })


            var valor = "Honestidad";
            var descaript = "Actuamos de manera correcta con énfasis en nuestros colaboradores, incentivando las relaciones sanas de honestidad y convivencia."


            localStorage.setItem('Eficiencia1', valor);
            localStorage.setItem('Eficiencia2', descaript);



        });
        $("#optiona3").dblclick(function() {
            $("#optiona3").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Eficiencia1');
            localStorage.removeItem('Eficiencia2');
        });




    } catch (e) {
        console.log('ERROR', e)
    }





}





function optiona2_4() {


    try {

        $("#optiona4").click(function() {
            $("#optiona4").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })


            var valor = "Liderazgo";
            var descaript = "Impulsamos e incentivamos la habilidad de dirigir y guiar en" +
                " nuestros colaboradores con el fin de contribuir a la efectividad y el" +
                " éxito de su superación personal, brindarles un sentido de pertenencia por su labor y el crecimiento de la empresa."



            localStorage.setItem('Empatía1', valor);
            localStorage.setItem('Empatía2', descaript);



        });
        $("#optiona4").dblclick(function() {
            $("#optiona4").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Empatía1');
            localStorage.removeItem('Empatía2');
        });

    } catch (e) {
        console.log('ERROR', e)
    }



}




function optiona2_5() {





    try {

        $("#optiona5").click(function() {
            $("#optiona5").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })


            var valor = "La sencillez";
            var descaript = "Trabajamos en equipo con simplicidad, respeto y buen trato, " +
                "teniendo en cuenta los aportes dados por los grupos de trabajo incrementando" +
                " las relaciones interpersonales con nuestros colaboradores y clientes."



            localStorage.setItem('Flexibilidad1', valor);
            localStorage.setItem('Flexibilidad2', descaript);



        });
        $("#optiona5").dblclick(function() {
            $("#optiona5").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Flexibilidad1');
            localStorage.removeItem('Flexibilidad2');
        });

    } catch (e) {
        console.log('ERROR', e)
    }










}



function optiona2_6() {





    try {


        $("#optiona6").click(function() {
            $("#optiona6").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })

            var valor = "Orden";
            var descaript = "Somos ordenados con nuestro direccionamiento como empresa, " +
                "teniendo planteamientos estratégicos que guíen a nuestros colaboradores" +
                " a tomar acciones acertadas en pro de los beneficios de la empresa. "



            localStorage.setItem('Honestidad1', valor);
            localStorage.setItem('Honestidad2', descaript);


        });
        $("#optiona6").dblclick(function() {
            $("#optiona6").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Honestidad1');
            localStorage.removeItem('Honestidad2');
        });




    } catch (e) {
        console.log('ERROR', e)
    }





}



function optiona2_7() {


    try {
        $("#optiona7").click(function() {
            $("#optiona7").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })

            var valor = "Perseverancia";
            var descaript = "Trabajamos con convencimiento, pasión y constancia para entregar siempre lo mejor como organización, comprendiendo las eventuales dificultades como caminos al éxito. "



            localStorage.setItem('Humanismo1', valor);
            localStorage.setItem('Humanismo2', descaript);


        });
        $("#optiona7").dblclick(function() {
            $("#optiona7").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Humanismo1');
            localStorage.removeItem('Humanismo2');
        });

    } catch (e) {
        console.log('ERROR', e)
    }


}





function optiona2_8() {



    try {

        $("#optiona8").click(function() {
            $("#optiona8").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })

            var valor = "Pro actividad";
            var descaript = "Impulsamos a nuestros colaboradores en la toma de decisiones," +
                " de manera acertada y positiva sobre las dificultades que se presenten " +
                "en nuestra organización, desde su conocimiento y experiencia. "



            localStorage.setItem('Iniciativa1', valor);
            localStorage.setItem('Iniciativa2', descaript);

        });
        $("#optiona8").dblclick(function() {
            $("#optiona8").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Iniciativa1');
            localStorage.removeItem('Iniciativa2');
        });





    } catch (e) {
        console.log('ERROR', e)
    }




}


function optiona2_9() {

    try {

        $("#optiona9").click(function() {
            $("#optiona9").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })

            var valor = "Respeto";
            var descaript = "Actuamos de manera correcta y atenta, priorizando la dignidad de nuestros colaboradores, clientes, proveedores y stakeholders de la empresa, considerando el valor que representan. "



            localStorage.setItem('Integridad1', valor);
            localStorage.setItem('Integridad2', descaript);

        });
        $("#optiona9").dblclick(function() {
            $("#optiona9").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Integridad1');
            localStorage.removeItem('Integridad2');
        });








    } catch (e) {
        console.log('ERROR', e)
    }




}



function optiona2_10() {

    try {

        $("#optiona10").click(function() {
            $("#optiona10").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })

            var valor = "Reconocimiento";
            var descaript = "Estimulamos y potencializamos las capacidades de nuestros colaboradores para el desarrollo personal, con el fin de buscar el logro empresarial."



            localStorage.setItem('Justicia1', valor);
            localStorage.setItem('Justicia2', descaript);


        });
        $("#optiona10").dblclick(function() {
            $("#optiona10").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Justicia1');
            localStorage.removeItem('Justicia2');
        });




    } catch (e) {
        console.log('ERROR', e)
    }





}




function optiona2_11() {


    try {

        $("#optiona11").click(function() {
            $("#optiona11").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })


            var valor = "Responsabilidad";
            var descaript = "Promulgamos la disposición para realizar las actividades de" +
                " manera adecuada y en el tiempo establecido, con determinación en pro" +
                " del cumplimiento de los objetivos empresariales y la satisfacción de nuestros clientes."



            localStorage.setItem('Liderazgo1', valor);
            localStorage.setItem('Liderazgo2', descaript);


        });
        $("#optiona11").dblclick(function() {
            $("#optiona11").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Liderazgo1');
            localStorage.removeItem('Liderazgo2');
        });





    } catch (e) {
        console.log('ERROR', e)
    }





}



////////////////////////////////////////////////////////////////////77


function optiona2_12() {

    try {


        $("#optiona12").click(function() {
            $("#optiona12").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })


            var valor = "Solidaridad";
            var descaript = "Nos caracterizamos porque siempre unimos fuerzas, recursos, voluntades," +
                " para satisfacer necesidades comunes; consolidándonos como una empresa que busca mejorar la calidad de vida de todos los que se relacionan con ella."



            localStorage.setItem('Perseverancia1', valor);
            localStorage.setItem('Perseverancia2', descaript);


        });
        $("#optiona12").dblclick(function() {
            $("#optiona12").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Perseverancia1');
            localStorage.removeItem('Perseverancia2');
        });







    } catch (e) {
        console.log('ERROR', e)
    }

}

/////////////////////////////////////////////////////////////////////////////////////////////////////7



function optiona2_13() {



    try {


        $("#optiona13").click(function() {
            $("#optiona13").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })

            var valor = "Sustentabilidad";
            var descaript = "Trabajamos en pro del equilibrio de " +
                "recursos naturales y ecológicos en el desarrollo de nuestras" +
                " actividades laborales, con el fin de optimizar recursos existentes" +
                " y no comprometer recursos futuros como aporte al medio ambiente."



            localStorage.setItem('Pertenencia1', valor);
            localStorage.setItem('Pertenencia2', descaript);

        });
        $("#optiona13").dblclick(function() {
            $("#optiona13").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Pertenencia1');
            localStorage.removeItem('Pertenencia2');
        });









    } catch (e) {
        console.log('ERROR', e)
    }





}

///////////////////////////////////////////////////////////////////////////////




function optiona3_1() {


    try {


        $("#option3_1").click(function() {
            $("#option3_1").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })

            var valor = "Sentido de pertenencia";
            var descaript = "Buscamos que nuestros colaboradores se sientan parte importante de la empresa, para lograr la identificación y apropiación con su labor."



            localStorage.setItem('Pro_actividad1', valor);
            localStorage.setItem('Pro_actividad2', descaript);


        });
        $("#option3_1").dblclick(function() {
            $("#option3_1").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Pro_actividad1');
            localStorage.removeItem('Pro_actividad2');
        });





    } catch (e) {
        console.log('ERROR', e)
    }




}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////




function optiona3_2() {

    try {


        $("#option3_2").click(function() {
            $("#option3_2").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })

            var valor = "Transparencia";
            var descaript = "Buscamos aumentar la confianza entre quienes tienen relación " +
                "con la empresa, ya sean los colaboradores, los clientes, los accionistas" +
                " o los proveedores; a través de la transparencia la empresa hace saber a " +
                "la sociedad cómo actúa, abriendo paso a posibles críticas o juicios de valor."



            localStorage.setItem('Profesionalismo1', valor);
            localStorage.setItem('Profesionalismo2', descaript);

        });
        $("#option3_2").dblclick(function() {
            $("#option3_2").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Profesionalismo1');
            localStorage.removeItem('Profesionalismo2');
        });







    } catch (e) {
        console.log('ERROR', e)
    }





}


//////////////////////////////////////////////////////////////////////////////////////////////////////




function optiona3_3() {

    try {


        $("#option3_3").click(function() {
            $("#option3_3").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })

            var valor = "Prudencia";
            var descaript = "Es la virtud de actuar de forma justa, adecuada y con cautela, respetando los sentimientos," +
                " la vida y las libertades de las demás personas, pero también es la cualidad de comunicarse" +
                " con un lenguaje claro, cuidadoso y acertado; con sensatez, con moderación y reflexión."




            localStorage.setItem('Prudencia1', valor);
            localStorage.setItem('Prudencia2', descaript);

        });
        $("#option3_3").dblclick(function() {
            $("#option3_3").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Prudencia1');
            localStorage.removeItem('Prudencia2');
        });



    } catch (e) {
        console.log('ERROR', e)
    }




}




////////////////////////////////////////////////////




function optiona3_4() {


    try {


        $("#option3_4").click(function() {
            $("#option3_4").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })

            var valor = "Prudencia";
            var descaript = "Es la virtud de actuar de forma justa, adecuada y con cautela, respetando los sentimientos," +
                " la vida y las libertades de las demás personas, pero también es la cualidad de comunicarse" +
                " con un lenguaje claro, cuidadoso y acertado; con sensatez, con moderación y reflexión."




            localStorage.setItem('Prudencia1', valor);
            localStorage.setItem('Prudencia2', descaript);

        });
        $("#option3_4").dblclick(function() {
            $("#option3_4").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Prudencia1');
            localStorage.removeItem('Prudencia2');
        });



    } catch (e) {
        console.log('ERROR', e)
    }




}



////////////////////option5////////////////////////////////////




function optiona3_5() {







    try {



        $("#option3_5").click(function() {
            $("#option3_5").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })

            var valor = "Responsabilidad";
            var descaript = "Cuando se inicia un negocio se adquieren un sinnúmero de responsabilidades, tanto de índole personal como de índole social; el concepto de la responsabilidad es entender que se deben respetar una serie de lineamientos y reglas, además de contribuir en el crecimiento y la armonía del entorno en el que nos desenvolvemos y con las personas que interactuamos."


            localStorage.setItem('Responsabilidad1', valor);
            localStorage.setItem('Responsabilidad2', descaript);


        });
        $("#option3_5").dblclick(function() {
            $("#option3_5").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Responsabilidad1');
            localStorage.removeItem('Responsabilidad2');
        });





    } catch (e) {
        console.log('ERROR', e)
    }



}


/////////////////////////////////////////////////////////////////



function optiona3_6() {

    try {



        $("#option3_6").click(function() {
            $("#option3_6").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })

            var valor = "Responsabilidad Social";
            var descaript = "Es un valor empresarial y social que se refiere al compromiso que tiene una empresa o corporación con la comunidad donde se ubica. La finalidad es generar y poner en práctica diversas iniciativas y actividades que contribuyan a mejorar la vida en comunidad."

            localStorage.setItem('Responsabilidad_Social1', valor);
            localStorage.setItem('Responsabilidad_Social2', descaript);

        });
        $("#option3_6").dblclick(function() {
            $("#option3_6").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Responsabilidad_Social1');
            localStorage.removeItem('Responsabilidad_Social2');
        });







    } catch (e) {
        console.log('ERROR', e)
    }




}



/////////////////////////////////////////////////////////////////////////////////////////////////////////////



function optiona3_7() {

    try {


        $("#option3_7").click(function() {
            $("#option3_7").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })
            var valor = "Resiliencia";
            var descaript = "Es la resistencia frente a la adversidad y la capacidad de reconstruirse Es una actitud vital" +
                " positiva a pesar de las circunstancias difíciles, y representa el lado positivo de las cosas" +
                " también en saber aprender de la derrota y transformarla en oportunidades."



            localStorage.setItem('Resiliencia1', valor);
            localStorage.setItem('Resiliencia2', descaript);


        });
        $("#option3_7").dblclick(function() {
            $("#option3_7").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Resiliencia1');
            localStorage.removeItem('Resiliencia2');
        });







    } catch (e) {
        console.log('ERROR', e)
    }




}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function optiona3_8() {

    try {



        $("#option3_8").click(function() {
            $("#option3_8").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })
            var valor = "Sencillez";
            var descaript = "Es el valor de ser humildes y empáticos con la gente, sin importar los títulos profesionales o" +
                " el reconocimiento que se tenga ante otros. El valor de la sencillez, nos permite ser" +
                " conscientes de que otros merecen nuestro respeto y buen trato, sin importar nuestro estatus" +
                " social o prestigio social."



            localStorage.setItem('Sencillez1', valor);
            localStorage.setItem('Sencillez2', descaript);



        });
        $("#option3_8").dblclick(function() {
            $("#option3_8").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Sencillez1');
            localStorage.removeItem('Sencillez2');
        });


    } catch (e) {
        console.log('ERROR', e)
    }



}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function optiona3_9() {

    try {






        $("#option3_9").click(function() {
            $("#option3_9").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })
            var valor = "Solidaridad";
            var descaript = "Responsabilidad solidaria de las empresas se enmarca dentro de un concepto más amplio, el" +
                " de la Responsabilidad Social Corporativa. Al hablar de solidaridad empresarial, nos" +
                " referimos a la contribución que las compañías hacen de alguna u otra forma al entorno en el " +
                " que operan."



            localStorage.setItem('Solidaridad1', valor);
            localStorage.setItem('Solidaridad2', descaript);


        });
        $("#option3_9").dblclick(function() {
            $("#option3_9").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Solidaridad1');
            localStorage.removeItem('Solidaridad2');
        });


    } catch (e) {
        console.log('ERROR', e)
    }



}

////////////////////////////////////////////////////////////////////////////////////////////////////////////


function optiona3_10() {

    try {




        $("#option3_10").click(function() {
            $("#option3_10").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })


            var valor = "Transparencia";
            var descaript = "Busca aumentar la confianza entre quienes tienen relación con la empresa, ya sean los" +
                " empleados, los clientes, los accionistas o los proveedores. ... A través de la transparencia, la" +
                " empresa hace saber a la sociedad cómo actúa, abriendo paso a posibles críticas o juicios de " +
                " valor."



            localStorage.setItem('Transparencia1', valor);
            localStorage.setItem('Transparencia2', descaript);


        });
        $("#option3_10").dblclick(function() {
            $("#option3_10").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Transparencia1');
            localStorage.removeItem('Transparencia2');
        });



    } catch (e) {
        console.log('ERROR', e)
    }



}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




function optiona3_11() {


    try {

        $("#option3_11").click(function() {
            $("#option3_11").css({ "background-color": "#FC7323", "border-radius": "50px", "color": "white", "width": "95%" })


            var valor = "Vocación de servicio";
            var descaript = "Cuando alguien tiene el convencimiento y la pasión por ejercer una actividad profesional se" +
                " dice que tiene vocación. Por otra parte, la idea de servicio en un sentido general se refiere a" +
                " la acción de servir, es decir, mantener una actitud de empatía hacia los demás. " +
                " Consecuentemente, el concepto de vocación de servicio se refiere a la inclinación profesional orientada a satisfacer las necesidades ajenas."



            localStorage.setItem('Vocación_servicio1', valor);
            localStorage.setItem('Vocación_servicio2', descaript);



        });
        $("#option3_11").dblclick(function() {
            $("#option3_11").css({ "cursor": "pointer", "width": "78%", "height": " 9%", "border-radius": "26px", "border": "#FC7323 2px solid", "background-color": "white", "outline": "none", "text-align": "center", "color": "black" })
            localStorage.removeItem('Vocación_servicio1');
            localStorage.removeItem('Vocación_servicio2');
        });





    } catch (e) {
        console.log('ERROR', e)
    }





}