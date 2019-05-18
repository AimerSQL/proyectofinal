<?php
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
require_once ('conexion.php');
$mysqli->set_charset("utf8");

/* PROTECCIÓN FRENTE A SQL INYECTADO (FUNCIÓN mysql_real_escape_string) */
$usuario = $mysqli->real_escape_string($usuario);
$clave = $mysqli->real_escape_string($clave);

if ($resultado = $mysqli->query("SELECT id, usuario, nivel FROM usuario WHERE usuario='$usuario' AND clave='$clave'")) {

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
        if($_SESSION["nivel"]=="admin"){
            echo "1";
        }
        if($_SESSION["nivel"]=="user"){
            echo "2";
        }
       

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
          echo "Usuario/clave incorrecto";
    }
}
?>
