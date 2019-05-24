<?php
# CONECTAMOS CON LA BASE
include('conexion.php'); 
# EXTRAEMOS DATOS DE MYSQL
$id = $_SESSION['id'];
if(!isset($id))
{
echo 'No se ha seleccionado ninguna ID'; 
}else{
# EXTRAEMOS DATOS
$user=mysql_query("SELECT usuario, correo, DNI, nivel, nombre, apellido FROM usuario WHERE id='$id' ");
if($user_ok=mysql_fetch_array($user) )
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
