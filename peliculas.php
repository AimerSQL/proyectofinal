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
            <button id="buscar"class="btn btn-sm  btn-warning" type="button">Search</button>
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
        $id = $_GET['id'];
        echo '<input type="hidden" id="peliId" value="'.$id.'">';
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
            echo '<div class="cajaImage" id="'.$id.'"><img src="'.$image.'"></div>';
            echo '<div class="cajaInfo"><h3>'.$tituloEsp.'</h3>';
            echo '<p><span class="negrita">Fecha de estreno: </span>'.$anio.'</p>';
            echo '<p><span class="negrita">Sinopsis: </span>'.$sinopsis.'</p>';
            echo '<div class="cajitas"><div data-toggle="modal" data-target="#myModal">Quiero ver</div><div><a href="#comentario">Añadir opinión</a></div><div><a target="_blank" href="'.$trailer.'">Trailer</a></div><div><a href="acceso-aceptado-user.php">Volver</a></div></div>';
            echo '</div>';
        }
        ?>
          <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Registro</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div class="form-group">
            <label for="">Nombre: </label>
            <input type="text" placeholder="Escribe tu nombre aquí" class="form-control" id="nombre" style="width: 100%;" display: inline-block !important;>
            <label for="">Apellido: </label>
            <input type="text" placeholder="Escribe tu apellido aquí" class="form-control" id="apellido" style="width: 100%;" display: inline-block !important;>
            <label for="">DNI: </label>
            <input type="text" placeholder="Escribe tu DNI aquí" class="form-control" id="dni" style="width: 100%;" display: inline-block !important;>
            <label for="">Usuario: </label>
            <input type="text" placeholder="Escribe tu usuario aquí" class="form-control" id="usuarioR" style="width: 100%;" display: inline-block !important;>
            <label for="">Contraseña: </label>
            <input type="password" placeholder="Escribe tu contraseña aquí" class="form-control" id="contrasena" style="width: 100%;" display: inline-block !important;>
            <label for="">Correo: </label>
            <input type="text" placeholder="Escribe tu correo aquí" class="form-control" id="correo" style="width: 100%;" display: inline-block !important;>
         </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" id="enviar" class="btn btn-primary" data-dismiss="modal">Enviar</button>
        </div>
        
      </div>
    </div>
  </div>
    </section>
    <section class="comentario">
    
        <form>
            <div class="form-group">
                <div class="posicionC">
                    <label for=""><h4>Comentario:</h4></label>
                    <textarea class="form-control col-sm-8" rows="3" id="comentario"></textarea>
                </div>
            </div>
        </form>
        <button class="btn btn-warning btn-sm mt-1" id="pub">Publicar</button>
        
            <?php
            require ('conexion.php');
            $mysqli->set_charset("utf8");
            $res = $mysqli->query("SELECT * FROM opinion where peliId=".$id);
            while($fila = $res->fetch_assoc()){
                $contenido = $fila['contenido'];
                echo '<div class="opinion">';
                echo $contenido;
                echo '</div>';
            }
            ?>
        
    </section>
  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="js/scripts.js"></script>
</html>

