<?php
require_once "../app/views/inc/header.php";
require_once "../app/views/inc/menu.php";
require_once "../app/views/inc/social.php";
?>


 <br /><br/>
<div class="cont container">
	<div class="row" id="fila" >
  		<div class="col" id="columna">


    		<form  method="POST" >
    	  <?php

if (isset($datos["usuario"])) {

    if ($datos["usuario"]->documento_usuario) {
        echo '<div class="alert alert-success alert-dismissible">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <strong>Exito! </strong>El usuario ' . $datos["usuario"]->primer_nombre . '  ' . $datos["usuario"]->segundo_nombre . '  ' . $datos["usuario"]->primer_apellido . '  ' . $datos["usuario"]->segundo_apellido . ' ya esta registrado en esta plataforma
         </div>';
    }
} else {
	if (isset($_POST["consulta"])) {
		
	
    echo '<div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Aviso:</strong> El usuario con el numero de documento '. $_POST["consulta"] . ' no se encuentra registrado en la plataforma
        </div>';
    }
}

?>
       		<h2>Ingrese su numero de documento para consultar si ya se encuentra registrado</h2>
       		<input id="consultar" type="text" name="consulta" placeholder="Numero de documento" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required><br><br>
       		<input  id="smm" type="submit" name="buscar">
    		</form><br>
    		<a href="<?php echo RUTA_URL; ?>/usuario/restablecer"><button id="ress">Restablecer Contraseña</button></a><br><br>
		</div>
	</div>
</div>



 <?php
require_once "../app/views/inc/footer.php";
?>