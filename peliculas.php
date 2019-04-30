<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php
        $id = $_GET['id'];
        require ('conexion.php');
        require ('seguridad-global2.php');
        $mysqli->set_charset("utf8");
        $res = $mysqli->query("SELECT * FROM peliculas where id=".$id);
        if($fila = $res->fetch_assoc()){
            $tituloEsp = $fila['tituloEsp'];
            $titulo=$fila['tituloOriginal'];
            $anio = $fila['anioEstreno'];
            $sinopsis = $fila['sinopsis'];
            $trailer = $fila['trailer'];
            $image = $fila['image'];
            echo '<div class="contenedorInfo">';
            echo '<div class="cajaInfo"><img src="'.$image.'"></div>';
            echo '<div class="cajaInfo"><p>'.$tituloEsp.'</p>';
            echo '<p>'.$titulo.'</p>';
            echo '<p>'.$anio.'</p>';
            echo '<a href="'.$trailer.'">Trailer Youtube</a><br>';
            echo '<p>'.$sinopsis.'</p>';
            echo '<input type="button" value="añadir opinión"></div>';
            echo '</div>';
        }
?>
</body>
</html>

