<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinopia</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-dark" id="head">
        <a class="navbar-brand ml-3 tamano" href="acceso-aceptado-user.php">Cinopia</a>
        <div class="float-right">
        <form class="form-inline mr-3">
            <input id="peliQueBuscas" class="form-control mr-sm-1 mb-1 mt-1" type="text" placeholder="buscar">
            <button id="buscar" class="btn btn-sm  btn-warning" type="button">Search</button>
        </form>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="cerrarSesion">Cerrar sesión</a>
            </li>
        </ul>
        </div>
    </nav>
    <section class="main-primero">
        <?php
        $peli = $_GET['clave'];
        require ('conexion.php');
        $mysqli->set_charset('utf8');
        if($res = $mysqli->query("SELECT * FROM peliculas WHERE tituloOriginal LIKE '%".$peli."%' OR tituloEsp LIKE '%".$peli."%'")){
            echo '<h4>Resultados: </h4><br>';
            echo '<div class="cajaPeliculasFlex">';
            while ($fila = $res->fetch_assoc()) {
                $id = $fila['id'];
                $titulo = $fila['tituloOriginal'];
                $image = $fila['image'];
                echo '<div class="cajaPeli"><a href="peliculas.php?id='.$id.'"><img src="'.$image.'"></a>';
                echo '<div class="cajaTitulo"><h5>'.$titulo.'</h5></div></div>';     
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

