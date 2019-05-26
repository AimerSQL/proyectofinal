<?php

        require ('conexion.php');
        $dni = $_POST["dni"];
        $correo = $_POST["correo"];
        $mysqli->set_charset("utf8");
        
        $resultado = $mysqli->query("SELECT correo, clave FROM usuario WHERE dni ='".$dni."' AND correo='".$correo."'");
        while($fila = $resultado->fetch_assoc()){
            $correo = $fila['correo'];
            $clave = $fila['clave'];
        }
        if($resultado->num_rows){
            echo '<script type="text/javascript">
            alert("el correo con la contraseña se ha enviado correctamente, revise su bandeja de entrada");
            window.location = "index.php"
            </script>';
            mail($correo,"Recuperar Contraseña","tu contraseña es: ".$clave,"From: robot@proyectofinal.com");
        }
    ?>