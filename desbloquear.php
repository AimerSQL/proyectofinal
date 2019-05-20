<?php
    $idUsu = $_POST['idUsu'];
    require ('conexion.php');
    if($mysqli->query("UPDATE usuario SET estado='desbloqueado' WHERE id ='$idUsu'")){
        echo 'usuario desbloqueado';
    }
    $mysqli->close();


?>