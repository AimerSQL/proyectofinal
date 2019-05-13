<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinopia</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    
</head>
<body>
    
<header class="header">
        
        <a href="index.html" class="logo">Cinopia</a></div>
        <!--Navegador superior-->
        <div class="navigation">
            <div class="headerFlex">
                <div class="inputPeli">
                    <input type="text" id="peliQueBuscas">
                <!--boton para buscar pelis-->
                <input type="button" id="buscar" value="buscar">
                </div>
                <div class="inputPeli">
                    <a href="#">Perfil</a>
                <a href="#" id="cerrarSesion">Cerrar sesión</a>
                </div>     
            </div>       
        </div>
</header>
        <section class="main-primero">
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

            echo '<div class="cajaImage"><img src="'.$image.'"></div>';

            echo '<div class="cajaInfo"><p>'.$tituloEsp.'</p>';
            echo '<p>'.$titulo.'</p>';
            echo '<p>'.$anio.'</p>';
            echo '<a href="'.$trailer.'">Video Youtube</a><br>';
            echo '<p>'.$sinopsis.'</p>';
            echo '<input type="button" value="añadir opinión"></div>';

            echo '</div>';
        }
        $res->free();
        $mysqli->close();
?>
        </section>
  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="js/scripts.js"></script>
</html>

