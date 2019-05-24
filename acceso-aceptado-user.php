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
    <?php 
        require ('conexion.php');
        require ('seguridad-global2.php');
        $mysqli->set_charset("utf8");
        if($resultado = $mysqli->query("SELECT * FROM peliculas WHERE genero = 'Accion'")){
          while ($fila = $resultado->fetch_assoc()) {
               $titulo=$fila['tituloOriginal'];
               $image=$fila['image'];
             }
        }
    ?>
    <nav class="navbar navbar-dark" id="head">
    <a class="navbar-brand ml-3 tamano" href="acceso-aceptado-user.php">Cinopia</a>
    <div class="float-right">
    <form class="form-inline mr-3">
        <input id="peliQueBuscas" class="form-control mr-sm-1 mb-1 mt-1" type="text" placeholder="buscar">
        <button id="buscar" class="btn btn-sm  btn-warning" type="button">Search</button>
    </form>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Generos
      </a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="#accion">Acción</a>
          <a class="dropdown-item" href="#romance">Romance</a>
          <a class="dropdown-item" href="#terror">Terror</a>
          <a class="dropdown-item" href="#Cficcion">Ciencia Ficción</a>
          <a class="dropdown-item" href="#comedia">Comedia</a>
          <a class="dropdown-item" href="#documentales">Documentales</a>
          <a class="dropdown-item" href="#infantil">Infantil</a>
      </div>
    </li>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" id="perfil">Perfil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="cerrarSesion">Cerrar sesión</a>
        </li>
    </ul>
    </div>
    </nav>

  <section class="main-primero" id="accion">
      <h1>ACCIÓN</h1>
      <?php
        require ('conexion.php');
        require_once ('seguridad-global2.php');
        $mysqli->set_charset("utf8");
        if($resultado = $mysqli->query("SELECT * FROM peliculas WHERE genero LIKE '%Accion%'")){
             echo '<div id="carrusel">
             <a href="#" class="left-arrow" id="1"><img src="img/back.png" /></a>
             <a href="#" class="right-arrow" id="1"><img src="img/next.png" /></a>
             <div class="carrusel" id="c1">';
             $cont = 0;
             while ($fila = $resultado->fetch_assoc()) {
               $titulo=$fila['tituloOriginal'];
               $image=$fila['image'];
               $id = $fila['id'];
               echo 
               '<div class="product" id="product_'.$cont.'">
               <a href="peliculas.php?id='.$id.'"><img src="'.$image.'"></a>
               <div class="cajaTitulo"><h4>'.$titulo.'</h4></div>
              </div>';
               $cont++;
             }
             
             echo '</div>';
         
        }
        
    ?>
          
   </section>      
   <section class="main-primero" id="romance">
      <h2>ROMANCE</h2>
      <?php
        require ('conexion.php');
        require_once ('seguridad-global2.php');
        $mysqli->set_charset("utf8");
        if($resultado = $mysqli->query("SELECT * FROM peliculas WHERE genero LIKE '%Romance%'")){
             echo '<div id="carrusel">
             <a href="#" class="left-arrow" id="2"><img src="img/back.png" /></a>
             <a href="#" class="right-arrow" id="2"><img src="img/next.png" /></a>
             <div class="carrusel" id="c2">';
             $cont = 0;
             while ($fila = $resultado->fetch_assoc()) {
               $titulo=$fila['tituloOriginal'];
               $image=$fila['image'];
               $id = $fila['id'];
               echo '<div class="product" id="product_'.$cont.'">
               <a href="peliculas.php?id='.$id.'"><img src="'.$image.'" class="cajas-fotos"></a>
               <div class="cajaTitulo"><h4>'.$titulo.'</h4></div>
              </div>';
               $cont++;  
             }
             
             echo '</div>';
         
        }
        
    ?>
  
           
      </section>
         
    <section class="main-primero" id="terror">
      <h1>TERROR</h1>
      <?php
        require ('conexion.php');
        require_once ('seguridad-global2.php');
        $mysqli->set_charset("utf8");
        if($resultado = $mysqli->query("SELECT * FROM peliculas WHERE genero LIKE '%Terror%'")){
             echo '<div id="carrusel">
             <a href="#" class="left-arrow" id="3"><img src="img/back.png" /></a>
             <a href="#" class="right-arrow" id="3"><img src="img/next.png" /></a>
             <div class="carrusel" id="c3">';
             $cont = 0;
             while ($fila = $resultado->fetch_assoc()) {
               $titulo=$fila['tituloOriginal'];
               $image=$fila['image'];
               $id = $fila['id'];
               echo '<div class="product" id="product_'.$cont.'">
               <a href="peliculas.php?id='.$id.'"><img src="'.$image.'" class="cajas-fotos"></a>
               <div class="cajaTitulo"><h4>'.$titulo.'</h4></div>
          </div>';
               $cont++;
             }
             
             echo '</div>';
         
        }
        
    ?>
     
         </section>
         <section class="main-primero" id="Cficcion">
      <h1>CIENCIA FICCIÓN</h1>
      <?php
        require ('conexion.php');
        require_once ('seguridad-global2.php');
        $mysqli->set_charset("utf8");
        if($resultado = $mysqli->query("SELECT * FROM peliculas WHERE genero LIKE '%Ficción%'")){
             echo '<div id="carrusel">
             <a href="#" class="left-arrow" id="4"><img src="img/back.png" /></a>
             <a href="#" class="right-arrow" id="4"><img src="img/next.png" /></a>
             <div class="carrusel" id="c4">';
             $cont = 0;
             while ($fila = $resultado->fetch_assoc()) {
               $titulo=$fila['tituloOriginal'];
               $image=$fila['image'];
               $id = $fila['id'];
               echo '<div class="product" id="product_'.$cont.'">
               <a href="peliculas.php?id='.$id.'"><img src="'.$image.'" class="cajas-fotos"></a>
               <div class="cajaTitulo"><h4>'.$titulo.'</h4></div>
          </div>';
               $cont++;
             }
             
             echo '</div>';
         
        }
        
    ?>
  
      </section>
      
      <section class="main-primero" id="comedia">
      <h1>COMEDIA</h1>
      <?php
        require ('conexion.php');
        require_once ('seguridad-global2.php');
        $mysqli->set_charset("utf8");
        if($resultado = $mysqli->query("SELECT * FROM peliculas WHERE genero LIKE '%Comedia%'")){
             echo '<div id="carrusel">
             <a href="#" class="left-arrow" id="5"><img src="img/back.png" /></a>
             <a href="#" class="right-arrow" id="5"><img src="img/next.png" /></a>
             <div class="carrusel" id="c5">';
             $cont = 0;
             while ($fila = $resultado->fetch_assoc()) {
               $titulo=$fila['tituloOriginal'];
               $image=$fila['image'];
               $id = $fila['id'];
               echo '<div class="product" id="product_'.$cont.'">
               <a href="peliculas.php?id='.$id.'"><img src="'.$image.'" class="cajas-fotos"></a>
               <div class="cajaTitulo"><h4>'.$titulo.'</h4></div>
          </div>';
               $cont++;
             }
             
             echo '</div>';
         
        }
        
    ?>
     
      </section>
      
      <section class="main-primero" id="documentales">
      <h1>DOCUMENTALES</h1>
      <?php
        require ('conexion.php');
        require_once ('seguridad-global2.php');
        $mysqli->set_charset("utf8");
        if($resultado = $mysqli->query("SELECT * FROM peliculas WHERE genero LIKE '%Documental%'")){
             echo '<div id="carrusel">
             <a href="#" class="left-arrow" id="6"><img src="img/back.png" /></a>
             <a href="#" class="right-arrow" id="6"><img src="img/next.png" /></a>
             <div class="carrusel" id="c6">';
             $cont = 0;
             while ($fila = $resultado->fetch_assoc()) {
               $titulo=$fila['tituloOriginal'];
               $image=$fila['image'];
               $id = $fila['id'];
               echo '<div class="product" id="product_'.$cont.'">
               <a href="peliculas.php?id='.$id.'"><img src="'.$image.'" class="cajas-fotos"></a>
               <div class="cajaTitulo"><h4>'.$titulo.'</h4></div>
          </div>';
               $cont++;
             }
             
             echo '</div>';
         
        }
        
    ?>
  
      </section>
      <section class="main-primero" id="infantil">
      <h1>INFANTIL</h1>
      <?php
        require ('conexion.php');
        require_once ('seguridad-global2.php');
        $mysqli->set_charset("utf8");
        if($resultado = $mysqli->query("SELECT * FROM peliculas WHERE genero LIKE '%Infantil%'")){
             echo '<div id="carrusel">
             <a href="#" class="left-arrow" id="7"><img src="img/back.png" /></a>
             <a href="#" class="right-arrow" id="7"><img src="img/next.png" /></a>
             <div class="carrusel" id="c7">';
             $cont = 0;
             while ($fila = $resultado->fetch_assoc()) {
               $titulo=$fila['tituloOriginal'];
               $image=$fila['image'];
               $id = $fila['id'];
               echo '<div class="product" id="product_'.$cont.'">
               <a href="peliculas.php?id='.$id.'"><img src="'.$image.'" class="cajas-fotos"></a>
               <div class="cajaTitulo"><h4>'.$titulo.'</h4></div>
          </div>';
               $cont++;
             }
             
             echo '</div>';
         
        }
        
    ?>
   
      </section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="js/scripts.js"></script>
</html>
