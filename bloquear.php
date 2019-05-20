<?php
    $idUsu = $_POST['idUsu'];
    require ('conexion.php');
    if($mysqli->query("UPDATE usuario SET estado='bloqueado' WHERE id ='$idUsu'")){
        echo 'usuario bloqueado';
    }
    $mysqli->close();


?>