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
    <a class="navbar-brand ml-3 tamano" href="#">Cinopia</a>
    <div class="float-right">
    <form class="form-inline mr-3">
        <input class="form-control mr-sm-1 mb-1 mt-1" type="text" placeholder="buscar">
        <button class="btn btn-sm  btn-warning" type="button">Search</button>
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
        <div class="seleccion">
            <div id="gestionUsu" class="tipo">Gestionar Usuario</div>
            <div id="subidaPeli" class="tipo">Subir nueva pelicula</div>
        </div>
        <?php
        require ('conexion.php');
        require ('seguridad-global1.php');
        $mysqli->set_charset("utf8");
        if($resultado = $mysqli->query("SELECT * FROM usuario")){
            echo '<div class="usu" id="usuBox">';
            echo '<h3>Usuarios:</h3><br>';
            while ($fila = $resultado->fetch_assoc()) {
                $id=$fila['id'];
               $usuario=$fila['usuario'];
               $clave=$fila['clave'];
               $nivel =$fila['nivel'];
               echo '<div><a href="usuarioInfo.php?id='.$id.'">'.$usuario.'</a><div>';
             } 
            echo '</div>';
        }
    ?>
            
        </section>
        <div class="col-6 peliForm hide" id="peliForm">
                <div class="form-group">
                <label for="">Genero</label>
                <input type="text" placeholder="" class="form-control" id="genero" style="width: 100%;" display: inline-block !important;>
                </div>
                <div class="form-group">
                <label for="">Titulo Original</label>
                <input type="text" placeholder="" class="form-control" id="tituloOriginal" style="width: 100%;" display: inline-block !important;>
                </div>
                <div class="form-group">
                <label for="">Titulo Español</label>
                <input type="text" placeholder="" class="form-control" id="tituloEsp" style="width: 100%;" display: inline-block !important;>
                </div>
                <div class="form-group">
                <label for="">Año de estreno</label>
                <input type="text" placeholder="" class="form-control" id="anio" style="width: 100%;" display: inline-block !important;>
                </div>
                <div class="form-group">
                <label for="">url de Tráiler</label>
                <input type="text" placeholder="" class="form-control" id="trailer" style="width: 100%;" display: inline-block !important;>
                </div>
                <div class="form-group">
                <label for="">Sinopsis</label>
                <input type="text" placeholder="" class="form-control" id="sinopsis" style="width: 100%;" display: inline-block !important;>
                </div>
                <div class="form-group">
                <label for="">Portada de pelicula</label>
                <input type="file" class="form-control" id="imagen" style="width: 100%;" display: inline-block !important;>
                </div>
                <div class="form-group">
                <button class="btn btn-warning btn-sm mb-1" id="subirPeli">Subir</button>
                <button class="btn btn-warning btn-sm mb-1"><a href="acceso-aceptado-admin.php">Volver</a></button>
            </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="js/scripts.js"></script>
</html>
