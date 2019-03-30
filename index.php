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
      /* INICIO DE SESIÓN, AUNQUE YA ESTÉ INICIADA, PARA
       * DESTRUIRLA AL CERRAR LA SESIÓN DESDE acceso-aceptado-n.php
       */
      if (!isset($_SESSION)) {
          session_start();
      }
      /* DESTRUCCIÓN DE LA SESIÓN */
      session_destroy();
      ?>
   <div>
      <p>Usuario:</p>
      <input type="text" id="usuario">
      <p>Clave:</p>
      <input type="text" id="clave">
      <input type="button" id="inisesion" value="iniciar sesión">
      <div id="resultado">&nbsp;</div>
   </div>
  
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="funciones.js" ></script>
</html>
