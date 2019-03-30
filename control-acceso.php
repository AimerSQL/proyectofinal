<?php
header("Content-Type: application/json; charset=UTF-8");
$datos = json_decode(stripslashes($_GET['datos']),true);

require_once ('conexion.php');
$mysqli->set_charset("utf8");

/* PROTECCIÓN FRENTE A SQL INYECTADO (FUNCIÓN mysql_real_escape_string) */
$usuario = $mysqli->real_escape_string($datos['usuario']);
$clave = $mysqli->real_escape_string($datos['clave']);

if ($resultado = $mysqli->query("SELECT id, usuario FROM usuario WHERE usuario='$usuario' AND clave='$clave'")) {

    /* DETERMINA EL NÚMERO DE REGISTROS QUE DEVUELVE LA CONSULTA */
    $numeroRegistros = $resultado->num_rows;

    if ($numeroRegistros) {
        /* ACCESO ACEPTADO */
        /* INICIO DE LA SESIÓN, SI NO ESTÁ INICIADA */
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION["autentificado"] = "si";

        /* VOLCADO DE LOS DATOS EN VARIABLES DE SESION */
        while ($fila = $resultado->fetch_assoc()) {
          $_SESSION["id"]=$fila['id'];
          $_SESSION["usuario"]=$fila['usuario'];
          $_SESSION["nivel"]=$fila['nivel'];
        }

        /* LIBERA LA MATRIZ QUE ALBERGA EL CONJUNTO DE RESULTADOS */
        $resultado->free();
        /* CIERRA LA CONEXIÓN */
        $mysqli->close();

        /* SE DEVUELVE EL NIVEL AUTENTICADO A $.getJSON (function) EN funciones.js
         * INDICANDO QUE EL ACCESO HA SIDO ACEPTADO
         */
         /* Matriz retornada como matriz */
         $respuesta = array('autentificado' => $_SESSION["autentificado"], 'nivel' => $_SESSION["nivel"]);
         echo json_encode($respuesta);

    } else {
        /* LIBERA LA MATRIZ QUE ALBERGA EL CONJUNTO DE RESULTADOS */
        $resultado->free();
        /* CIERRA LA CONEXIÓN */
        $mysqli->close();
        /* ACCESO DENEGADO */
        /* INICIO DE LA SESIÓN, SI NO ESTÁ INICIADA */
        if (!isset($_SESSION)) {
            session_start();
        }
        /* DESTRUCCIÓN DE LA SESIÓN */
        session_destroy();
        /* SE DEVUELVE 0 A $.getJSON (function) EN funciones.js
         * INDICANDO QUE EL ACCESO HA SIDO DENEGADO
         */

         /* SE DEVUELVE QUE NO ESTA AUTENTICADO Y EL NIVEL 0 A $.getJSON (function) EN funciones.js
          * INDICANDO QUE EL ACCESO HA SIDO DENEGADO
          */
          /* Matriz retornada como matriz */
          $resultado = array('autentificado' => "no", 'nivel' => 0);
          echo json_encode($respuesta);
    }
}
?>
