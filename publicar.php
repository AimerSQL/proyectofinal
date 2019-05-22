<?php
    session_start();
    $comentario = $_POST['comentario'];
    $peliId = $_POST['peliId'];
    $usuId = $_SESSION['id'];
    require ('conexion.php');
    $mysqli->set_charset("utf8");
    $res = $mysqli->query("SELECT * FROM usuario where id=".$_SESSION['id']);
            while($fila = $res->fetch_assoc()){
                $estado = $fila['estado'];    
            }
    if($estado=='bloqueado'){
        echo 'no tienes permiso para publicar';
    }else{
        $mysqli->query("INSERT INTO opinion(contenido,usuId,peliId) VALUES ('$comentario','$usuId','$peliId')");
    }
    $mysqli->close();
?>