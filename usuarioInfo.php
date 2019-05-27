<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
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
<?php
        $id = $_GET['id'];
        echo '<input type="hidden" id="idUsu" value='.$id.'>';
        require ('conexion.php');
        require ('seguridad-global1.php');
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
                      <span class="negrita">Nombre: </span><p>'
                        .$nombre.'</p><br>
                        <span class="negrita">Apellido: </span><p>'
                        .$apellido.'</p><br>
                        <span class="negrita">DNI: </span><p>'
                        .$dni.'</p><br>
                        <span class="negrita">Usuario: </span><p>'
                        .$usuario.'</p><br>
                        <span class="negrita">correo: </span><p>'
                        .$correo.'</p><br>
                        <span class="negrita">Privilegio: </span><p>'
                        .$nivel.'</p><br>
                    </div>';
               }
          echo '<div class="cajitas">
               <div id="bloquear">Bloquear</div>
               <div id="desbloquear">Desbloquear</div>
               <div><a href="acceso-aceptado-admin.php">Volver</a></div>
          </div>';
          echo '</div>';
          }
        $mysqli->close();
?>

</section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="js/scripts.js"></script>
</html>

