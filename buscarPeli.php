<?php
    $peli = $_POST['peliQueBuscas'];
    require ('conexion.php');
    $mysqli->set_charset('utf8');
    if($res = $mysqli->query("SELECT id FROM peliculas WHERE tituloOriginal LIKE '%".$peli."%' OR tituloEsp LIKE '%".$peli."%'")){
        while ($fila = $res->fetch_assoc()) {
            $id = $fila['id'];
    }
    echo $id;
   
    }else{
        echo "No se ha encontrado resultados";
    }

    $res->free();
    $mysqli->close();
?>