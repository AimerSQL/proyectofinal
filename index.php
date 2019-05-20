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
      <button class="btn btn-warning btn-sm" id="inisesion">Iniciar sesión</button>
      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">Registrar</button>
      </div>
      

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Registro</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <div class="form-group">
            <label for="">Nombre: </label>
            <input type="text" placeholder="Escribe tu nombre aquí" class="form-control" id="nombre" style="width: 100%;" display: inline-block !important;>
            <label for="">Apellido: </label>
            <input type="text" placeholder="Escribe tu apellido aquí" class="form-control" id="apellido" style="width: 100%;" display: inline-block !important;>
            <label for="">DNI: </label>
            <input type="text" placeholder="Escribe tu DNI aquí" class="form-control" id="dni" style="width: 100%;" display: inline-block !important;>
            <label for="">Usuario: </label>
            <input type="text" placeholder="Escribe tu usuario aquí" class="form-control" id="usuarioR" style="width: 100%;" display: inline-block !important;>
            <label for="">Contraseña: </label>
            <input type="password" placeholder="Escribe tu contraseña aquí" class="form-control" id="contrasena" style="width: 100%;" display: inline-block !important;>
            <label for="">Correo: </label>
            <input type="text" placeholder="Escribe tu correo aquí" class="form-control" id="correo" style="width: 100%;" display: inline-block !important;>
         </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" id="enviar" class="btn btn-primary" data-dismiss="modal">Enviar</button>
        </div>
        
      </div>
    </div>
  </div>
      <div id="resultado" class="text-danger">&nbsp;</div>
   </div>
 </div>   
 </div> 
      

      
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/funciones.js" ></script>
<script type="text/javascript" src="js/scripts.js" ></script>

</html>
