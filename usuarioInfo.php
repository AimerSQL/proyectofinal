<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body> 
<?php
        $id = $_GET['id'];
        require ('conexion.php');
        require ('seguridad-global1.php');
        $mysqli->set_charset("utf8");
        if($resultado = $mysqli->query("SELECT * FROM usuario WHERE id='$id'")){
            while ($fila = $resultado->fetch_assoc()) {
              $id=$fila['id'];
                 $usuario=$fila['usuario'];
                 $clave=$fila['clave'];
                 $nivel =$fila['nivel'];
                 echo '<div style="margin:20px 20px;padding:10px 10px;border:1px solid black; width:500px; background-color:#f2f2f2">nombre del Usuario: '
                        .$usuario.'<br>Nivel del Usuario: '.$nivel.'<br>
                       </div>';
               }
          }
        $mysqli->close();
?>
</body>
</html>

