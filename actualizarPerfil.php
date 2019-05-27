<?php
    $correo = $_POST["correo"];
    $clave = $_POST["clave"];
    $usuario= $_POST["usuario"];
    require ('conexion.php');
    $mysqli->set_charset('utf8');
    session_start();
    if($mysqli->query("UPDATE usuario SET correo='".$correo."', clave='".$clave."', usuario='".$usuario."' WHERE id =".$_SESSION["id"])){
       echo 'se ha actualizado correctamente';
    }else{
        exit();
    }
    $mysqli->close();
    
?>