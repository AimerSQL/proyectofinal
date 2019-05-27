<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $correo = $_POST['correo'];
    require ('conexion.php');
    $mysqli->set_charset("utf8");
    if($mysqli->query("INSERT INTO usuario (nombre,apellido,dni,usuario,clave,correo,nivel) VALUES('$nombre','$apellido','$dni','$usuario','$contrasena','$correo','user');")){

    }
    $mysqli->close();
    

?>