<?php
    $genero = $_POST['genero'];
    $tituloO = $_POST['tituloOriginal'];
    $tituloE = $_POST['tituloEsp'];
    $anio = $_POST['anio'];
    $trailer = $_POST['trailer'];
    $sinopsis = $_POST['sinopsis'];
    $imagen = $_POST['imagen'];
    $imagen = "img/".$imagen;
    require ('conexion.php');
    $mysqli->set_charset("utf8");
    if($mysqli->query("INSERT INTO peliculas(genero, tituloOriginal, tituloEsp, anioEstreno, trailer, sinopsis, image) VALUES (
                        '$genero','$tituloO','$tituloE','$anio','$trailer','$sinopsis','$imagen'
    )")){
        echo 'pelicula subida';
    }
?>