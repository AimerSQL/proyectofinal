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
        require_once ('seguridad-global2.php');
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
                  <!-- se habria hecho si hubiera dado tiempo
                  <a href="index3.html#Denoche">De noche</a>-->
                  </div>
              </div>
          <a href="index.html" class="logo">Cinopia</a>

          
          <!--Navegador superior-->
          <div class="navigation">
                  
                        
                        <a href="#Museos">Perfil</a>
                        <a href="#Restaurantes" id="cerrarSesion">Cerrar sesión</a>
                        
            </div>
      </div>
  </header>

  <section class="main-primero" id="accion">
      <h1>ACCIÓN</h1>
               
          <div id="carrusel">
               <a href="#" class="left-arrow"><img src="img/back.png" /></a>
               <a href="#" class="right-arrow"><img src="img/next.png" /></a>
               <div class="carrusel">
                   <div class="product" id="product_0">
                        <img src="img/imagen_portadas.png" class="cajas-fotos">
                        <h2>TITULO</h2>
                   </div>
                   <div class="product" id="product_1">
                        <img src="img/imagen_portadas.png" class="cajas-fotos">
                        <h2>TITULO</h2>
                       
                   </div>
                   <div class="product" id="product_2">
                        <img src="img/imagen_portadas.png" class="cajas-fotos">
                        <h2>TITULO</h2>
                   </div>
                   <div class="product" id="product_3">
                        <img src="img/imagen_portadas.png" class="cajas-fotos">
                        <h2>TITULO</h2>
                   </div>
                   <div class="product" id="product_4">
                        <img src="img/imagen_portadas.png" class="cajas-fotos">
                        <h2>TITULO</h2>
                   </div>
                   <div class="product" id="product_5">
                        <img src="img/imagen_portadas.png" class="cajas-fotos">
                        <h2>TITULO</h2>
                   </div>
                   <div class="product" id="product_5">
                        <img src="img/imagen_portadas.png" class="cajas-fotos">
                        <h2>TITULO</h2>
                   </div>
                   
               </div>
           </div> 
   </section>      
   
   <section class="main-primero" id="romance">
         <h1>ROMANCE</h1>
                  
             <div id="carrusel">
                  <a href="#" class="left-arrow"><img src="img/back.png" /></a>
                  <a href="#" class="right-arrow"><img src="img/next.png" /></a>
                  <div class="carrusel">
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_4">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_5">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_5">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      
                  </div>
              </div> 
      </section>
         

      <section class="main-primero" id="terror">
            <h1>TERROR</h1>
                     
                <div id="carrusel">
                     <a href="#" class="left-arrow"><img src="img/back.png" /></a>
                     <a href="#" class="right-arrow"><img src="img/next.png" /></a>
                     <div class="carrusel">
                         <div class="product" id="product_0">
                              <img src="img/imagen_portadas.png" class="cajas-fotos">
                              <h2>TITULO</h2>
                         </div>
                         <div class="product" id="product_0">
                              <img src="img/imagen_portadas.png" class="cajas-fotos">
                              <h2>TITULO</h2>
                         </div>
                         <div class="product" id="product_0">
                              <img src="img/imagen_portadas.png" class="cajas-fotos">
                              <h2>TITULO</h2>
                         </div>
                         <div class="product" id="product_0">
                              <img src="img/imagen_portadas.png" class="cajas-fotos">
                              <h2>TITULO</h2>
                         </div>
                         <div class="product" id="product_4">
                              <img src="img/imagen_portadas.png" class="cajas-fotos">
                              <h2>TITULO</h2>
                         </div>
                         <div class="product" id="product_5">
                              <img src="img/imagen_portadas.png" class="cajas-fotos">
                              <h2>TITULO</h2>
                         </div>
                         <div class="product" id="product_5">
                              <img src="img/imagen_portadas.png" class="cajas-fotos">
                              <h2>TITULO</h2>
                         </div>
                         
                     </div>
                 </div> 
         </section>

   <section class="main-primero" id="Cficción">
         <h1>CIENCIA FICCIÓN</h1>
                  
             <div id="carrusel">
                  <a href="#" class="left-arrow"><img src="img/back.png" /></a>
                  <a href="#" class="right-arrow"><img src="img/next.png" /></a>
                  <div class="carrusel">
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_4">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_5">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_5">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      
                  </div>
              </div> 
      </section>
     
      <section class="main-primero" id="comedia">
         <h1>COMEDIA</h1>
                  
             <div id="carrusel">
                  <a href="#" class="left-arrow"><img src="img/back.png" /></a>
                  <a href="#" class="right-arrow"><img src="img/next.png" /></a>
                  <div class="carrusel">
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_4">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_5">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_5">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      
                  </div>
              </div> 
      </section>

   <section class="main-primero" id="documentales">
         <h1>DOCUMENTALES</h1>
                  
             <div id="carrusel">
                  <a href="#" class="left-arrow"><img src="img/back.png" /></a>
                  <a href="#" class="right-arrow"><img src="img/next.png" /></a>
                  <div class="carrusel">
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_4">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_5">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_5">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      
                  </div>
              </div> 
      </section>

    <section class="main-primero" id="infantil">
         <h1>INFANTIL</h1>
                  
             <div id="carrusel">
                  <a href="#" class="left-arrow"><img src="img/back.png" /></a>
                  <a href="#" class="right-arrow"><img src="img/next.png" /></a>
                  <div class="carrusel">
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_0">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_4">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_5">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      <div class="product" id="product_5">
                           <img src="img/imagen_portadas.png" class="cajas-fotos">
                           <h2>TITULO</h2>
                      </div>
                      
                  </div>
              </div> 
      </section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="js/scripts.js"></script>
</html>