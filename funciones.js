$(document).ready(function () {
    $("#inisesion").click(function () {
        /* SI ALGUNO DE LOS CAMPOS ESTÁ VACÍO NO SE REALIZA LA PETICIÓN A LA BASE DE DATOS */
        if ($("#usuario").val().trim().length === 0 || $("#clave").val().trim().length === 0) {
          $("#resultado").html("Indique Usuario y Clave.");
        }
        else {
            /*CONVIERTE UNA CADENA DE ARRAY EN JSON*/
            const datosUsuario = { "usuario":$("#usuario").val(), "clave":$("#clave").val() };
            const datosJson = JSON.stringify(datosUsuario);
            alert("hola");
          $.getJSON("control-acceso.php",{ datos: datosJson}, function(json){
            if (json.autentificado == "no") {
                /* ACCESO DENEGADO */
                $("#resultado").html("Usuario y/o clave incorrectos.")
            }
            else if (json.autentificado == "si") {
                /* ACCESO ACEPTADO.
                 * SE REDIRIGE A acceso-aceptado-n.php
                 * SIN DESTRUIR LAS VARIABLES DE SESIÓN  */
                var paginaDestino="acceso-aceptado-" + json.nivel + ".php";
                window.location.href = paginaDestino;
            }

          });

          $("#usuario").val("");
          $("#clave").val("");

        }

    });
});