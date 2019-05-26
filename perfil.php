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
if(!isset($id))
{
echo 'No se ha seleccionado ninguna ID'; 
}else{
# EXTRAEMOS DATOS
$user=$mysqli->query("SELECT usuario, correo, DNI, nivel, nombre, apellido ,puntos FROM usuario WHERE id='$id' ");
if($user_ok=$user->fetch_assoc() )
{
echo 'Nombre: <b>'.$user_ok["usuario"].'</b><br />';
echo 'Apellido: <b>'.$user_ok["apellido"].'</b><br/>';
echo 'Corrreo: <b>'.$user_ok["correo"].'</b><br />';
echo 'DNI: <b>'.$user_ok["DNI"].'</b><br/>';
echo 'Nivel: <b>'.$user_ok["nivel"].'</b><br/>';
echo 'Puntos: <b>'.$user_ok["puntos"].'</b><br/>';
}else{
echo 'No existe el usuario que buscas';
}

} 
?>

</section>
</body>
</html>


