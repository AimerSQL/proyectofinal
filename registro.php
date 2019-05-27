<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $correo = $_POST['correo'];
    require ('conexion.php');
    $mysqli->set_charset("utf8");
        if($resultado = $mysqli->query("SELECT * FROM usuario")){
            while ($fila = $resultado->fetch_assoc()) {
              $usuarioE = $fila['usuario'];
              $dniE = $fila['dni'];
              $correoE = $fila['correo'];
              if($usuario == $usuarioE || $dni == $dniE || $correo == $correoE){
                echo 'usuario/dni/correo ya existe';
                exit();
            } else{
                $mysqli->query("INSERT INTO usuario (nombre,apellido,dni,usuario,clave,correo,nivel) VALUES('$nombre','$apellido','$dni','$usuario','$contrasena','$correo','user');");
                echo 'has registrado correctamente';
                exit();
            }
            }
        }
       
    $mysqli->close();
    

?>