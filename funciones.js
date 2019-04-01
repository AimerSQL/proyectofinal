$(document).ready(function () {
  $("#inisesion").click(function () {
    /* SI ALGUNO DE LOS CAMPOS ESTÁ VACÍO NO SE REALIZA LA PETICIÓN A LA BASE DE DATOS */
    if ($("#usuario").val().trim().length === 0 || $("#clave").val().trim().length === 0) {
      $("#resultado").html("Indique Usuario y Clave.");
    }
    else {
      $.ajax({
        type: "POST",
        url: "control-acceso.php",
        data: { usuario: $("#usuario").val(), clave: $("#clave").val() }
      }).done(function (msg) {
        if (msg == "1") {
          window.location.href = "acceso-aceptado-admin.php";
          $("#usuario").val("");
          $("#clave").val("");
        }
        else{
          $("#resultado").html(msg);
        }
      });



    }

  });
});

