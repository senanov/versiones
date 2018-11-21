<?php 
require_once "../app/views/inc/header.php";
require_once "../app/views/inc/menu.php";
require_once "../app/views/inc/social.php";
 ?>
<br /><br/>
	<div class="cont container">
		<div class="row" id="fila" >
  			<div class="col" id="columna">

				<form method="post">
				<p>  
				<h2>Ingrese su correo para restablecer la contraseña</h2>
				</p>

				<p>
				<input id="restablecer" type="email" name="envio_email" id="email" placeholder="Correo Electronico" required>
				</p>

				<p>
				<input id="sd" type="submit" name="Enviar" value="Enviar">
				</p>

				</form>
				<?php
				if (isset($datos["exito"])) {
				echo '<div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Exito!</strong>'.$datos["exito"].'</div>';
				}

				if (isset($datos["error"])) {
				echo '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error:</strong>'.$datos["error"].'</div>';
				}
				?>
			</div>
		</div>
	</div>

	<?php 
require_once "../app/views/inc/footer.php";
 ?>