<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Iniciar Sesión</title>
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
      <?php
      /* INICIO DE SESIÓN, AUNQUE YA ESTÉ INICIADA, PARA
       * DESTRUIRLA AL CERRAR LA SESIÓN DESDE acceso-aceptado-n.php
       */
      if (!isset($_SESSION)) {
          session_start();
      }
      /* DESTRUCCIÓN DE LA SESIÓN */
      session_destroy();
      ?>
      <h1 style="text-align:center"><span>Cinopia</span></h1>
 <div id="cajaUsu">     
<div class="row">
   <div class="col-12">

      <div class="form-group">
      <label for="">Usuario</label>
      <input type="text" placeholder="Escribe tu usuario aquí" class="form-control" id="usuario" style="width: 100%;" display: inline-block !important;>
      </div>

      <div class="form-group">
      <label for="">Contraseña</label>
      <input type="text" placeholder="Escribe tu contraseña" class="form-control" id="clave" style="width: 100%;" display: inline-block !important;>
      </div>

      <div class="form-group">
      <button class="btn btn-danger" id="inisesion">Iniciar sesión</button>
      </div>

      <div id="resultado">&nbsp;</div>
   </div>
 </div>   
 </div> 
      

      
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/funciones.js" ></script>

</html>
