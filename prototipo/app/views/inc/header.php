
<!DOCTYPE html >
<html >
<head>
<title><?php echo NOM_SITIO;?></title>
<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
   
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/bootstrap.min.css">
<link rel="icon" href="<?php echo RUTA_URL;?>/img/logo.ico" />
<link rel="stylesheet"  href="<?php echo RUTA_URL;?>/css/icon.css" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  href="<?php echo RUTA_URL;?>/css/fonts.css" />
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/banner.css">
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/estilos_ayuda.css">
<link rel="stylesheet" href="<?php echo RUTA_URL;?>/css/estiloserv.css" />
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/registro.css" />
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/estilos.css" />


</head>
<body>

<!-- Inicio de Banner -->

<div class="container-fluid"> 
    <div class="header row">
      <div class="animacion-izquierda col-12 col-sm-12 col-md-6 col-lg-3">
        
          <img src="<?php echo RUTA_URL; ?>/img/logo.png" height="200">
          
        
        
      </div>
      <div class="animacion-centro col-12 col-sm-12 col-md-6 col-lg-6 ">
        <div class="texto ">
          <h1>SENANOV</h1>
          <hr>
          <p>Sistema de Información Especializado en la Gestión de Novedades en el CEET</p>
          <div class="btn "><a href="<?php echo RUTA_URL; ?>/usuario/registrar">Registrate</a></div>

            <!-- Trigger the modal with a button -->
  <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Login</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="contcolor modal-content">

        <div class="modal-body">

         <div class="columna columna1">
     <center><img src="<?php echo RUTA_URL; ?>/img/sena.png" width="136" height="132"/></center>

                  <!--formulario login -->

  <form  method="POST" action="<?php echo RUTA_URL; ?>/usuario/login">
    <p>
      <label for="textfield"></label>
    Usuario</p>
    <p>
      <label for="usuario"></label>
      <input class="input" type="text" name="usuario" id="usuario" placeholder="Numero de Documento" required />
    </p>
    <p>contraseña</p>
    <p>
      <label for="contra"></label>
      <input class="input" type="password" name="contrai" id="contrai" placeholder="Contraseña" required />
    </p>

    <p>
      <input class="button" type="submit" name="button" id="button" value="Ingresar " />
    </p>
  </form>

  <center>
    <p id="mensaje"> </p>
    <a href="<?php echo RUTA_URL; ?>/usuario/restablecer">Restablecer Contraseña</a></center><br><br>
     </div>

    </div>

        <div class="modal-footer">
          <button type="button" id="ip" data-dismiss="modal">Cerrar Ventana</button>
        </div>

      </div>
      
    </div>
  </div>


        </div>
      </div> 
      <div class="animacion-derecha col-12 col-sm-12 col-md-12 col-lg-3 ">
        <img src="<?php echo RUTA_URL; ?>/img/banner.png" height="200">

      </div>
    </div>
  </div>


 <!--  Fin de Banner -->