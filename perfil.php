<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
$user=$mysqli->query("SELECT usuario, correo, DNI, nivel, nombre, apellido FROM usuario WHERE id='$id' ");
if($user_ok=$user->fetch_assoc() )
{
echo 'Nombre: <b>'.$user_ok["usuario"].'</b><br />';
echo 'Apellido: <b>'.$user_ok["apellido"].'</b><br/>';
echo 'Corrreo: <b>'.$user_ok["correo"].'</b><br />';
echo 'DNI: <b>'.$user_ok["DNI"].'</b><br/>';
echo 'Nivel: <b>'.$user_ok["nivel"].'</b><br/>';
}else{
echo 'No existe el usuario que buscas';
}

} 
?>
</body>
</html>


