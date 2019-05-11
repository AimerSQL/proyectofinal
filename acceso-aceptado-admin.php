<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinopia</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    
</head>
<body>
    
     <header class="header">
          <a href="index.html" class="logo">Cinopia</a>

          
          <!--Navegador superior-->
          <div class="navigation">
                  
               <input type="text" id="peliQueBuscas">
               <input type="button" id="buscar" value="buscar">
               <a href="#">Perfil</a>
               <a href="#" id="cerrarSesion">Cerrar sesión</a>
                        
            </div>
      </div>
  </header>
        <section class="main-primero">
        <?php
        require ('conexion.php');
        require ('seguridad-global1.php');
        $mysqli->set_charset("utf8");
        if($resultado = $mysqli->query("SELECT * FROM usuario")){
            echo '<h3>Usuarios:</h3><br>';
          while ($fila = $resultado->fetch_assoc()) {
            $id=$fila['id'];
               $usuario=$fila['usuario'];
               $clave=$fila['clave'];
               $nivel =$fila['nivel'];
               echo '<div><a href="usuarioInfo.php?id='.$id.'">'.$usuario.'</a><div>';
             }
        }
    ?>
        </section>
  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="js/scripts.js"></script>
</html>
