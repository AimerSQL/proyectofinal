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
    $peli = $_GET['clave'];
    require ('conexion.php');
    $mysqli->set_charset('utf8');
    if($res = $mysqli->query("SELECT * FROM peliculas WHERE tituloOriginal LIKE '%".$peli."%' OR tituloEsp LIKE '%".$peli."%'")){
        echo '<div class="cajaPeliculasFlex">';
        while ($fila = $res->fetch_assoc()) {
            $id = $fila['id'];
            $titulo = $fila['tituloOriginal'];
            $image = $fila['image'];
            echo '<div class="cajaInfo"><a href="peliculas.php?id='.$id.'"><img src="'.$image.'"></a>';
            echo '<p>'.$titulo.'</p></div><br>';     
    }
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

