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
     <header class="header">
      <div class="container logo-nav-container">
            <div class="dropdown">
                  <button class="dropbtn" onclick="myFunction()">
                     Géneros
                  </button>
                  <div class="dropdown-content" id="myDropdown">
                  <a href="#accion">Acción</a>
                  <a href="#romance">Romance</a>
                  <a href="#terror">Terror</a>
                  <a href="#Cficción">Ciencia Ficción</a>
                  <a href="#comedia">Comedia</a>
                  <a href="#documentales">Documentales</a>
                  <a href="#infantil">Infantil</a>
                  </div>
              </div>
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
               echo '<div class="product" id="product_'.$cont.'">
               <a href="peliculas.php?id='.$id.'"><img src="'.$image.'" class="cajas-fotos"></a>
               <h2>'.$titulo.'</h2>
          </div>';
               $cont++;
             }
             
             echo '</div>';
         
        }
        
    ?>
          
   </section>      
   <section class="main-primero" id="romance">
      <h1>ROMANCE</h1>
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
               <h2>'.$titulo.'</h2>
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
               <h2>'.$titulo.'</h2>
          </div>';
               $cont++;
             }
             
             echo '</div>';
         
        }
        
    ?>
     
         </section>
         <section class="main-primero" id="ficcion">
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
               <h2>'.$titulo.'</h2>
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
               <h2>'.$titulo.'</h2>
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
               <h2>'.$titulo.'</h2>
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
               <h2>'.$titulo.'</h2>
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
