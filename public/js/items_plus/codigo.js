$(document).ready(function() {

    $("option").click(function() {
        $(this).addClass("estilos_seleccion")
    })

    $("option").dblclick(function() {
      $(this).removeClass("estilos_seleccion")
  })

  });