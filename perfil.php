<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
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
    
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" id="cerrarSesion">Cerrar sesión</a>
            </li>
        </ul>
    </div>
    </nav>

<section class="main-primero">
<?php
session_start();
# CONECTAMOS CON LA BASE
include('conexion.php'); 
# EXTRAEMOS DATOS DE MYSQL
$id = $_SESSION['id'];
if(!isset($id)){
echo 'No se ha seleccionado ninguna ID'; 
}else{
    $mysqli->set_charset("utf8");
    if($resultado = $mysqli->query("SELECT * FROM usuario WHERE id='$id'")){
      echo '<div class="cajaInfo central">';
        while ($fila = $resultado->fetch_assoc()) {
          $id=$fila['id'];
          $usuario=$fila['usuario'];
          $nombre = $fila['nombre'];
          $apellido = $fila['apellido'];
          $dni = $fila['dni'];
          $correo = $fila['correo'];
          $nivel =$fila['nivel'];
          echo '<div id="cajaPerfil">
                    <label><span class="negrita">Nombre: </span></label>
                    <input type="text" id="nombre" value="'.$nombre.'"><br>
                    <label><span class="negrita">Apellido: </span></label>
                    <input type="text" id="apellido" value="'.$apellido.'"><br>
                    <label><span class="negrita">DNI: </span></label>
                    <input type="text" id="dni" value="'.$dni.'"><br>
                    <label><span class="negrita">Usuario: </span></label>
                    <input type="text" id="usuario" value="'.$usuario.'"><br>
                    <label><span class="negrita">Correo: </span></label>
                    <input type="text" id="correo" value="'.$correo.'"><br>
                    <label><span class="negrita">Clave: </span></label>
                    <input type="text" id="clave" value="'.$nivel.'">
                </div>';
           }
           echo '<div class="cajitas">
               <div id="actualizar">Actualizar</div>
               <div><a href="acceso-aceptado-user.php">Volver</a></div>
          </div>';
           echo '</div>';
    }
}
?>

</section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="js/scripts.js"></script>
</html>


