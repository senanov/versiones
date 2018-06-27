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
				$restablecer = new MvcController();
				$restablecer -> restablecerContrasenaController();
				?>
			</div>
		</div>
	</div>