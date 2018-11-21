<br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col">

			<form method="post">
			<?php
			$editar = new Novedades();
			$editar -> editarPerfilController();
			$editar -> actualizarPerfilController();
			?>
			</form>

			<form method="post">
			<?php
			$editar -> editarContrasenaController();
			?>	
			</form>

		</div>
	</div>
</div>

