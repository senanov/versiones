<?php
require_once "../app/views/usuario/inc/header.php";
require_once "../app/views/usuario/inc/banner.php";

if ($_SESSION["rol"] == 1 || $_SESSION["rol"] == 0) {
    require_once "../app/views/usuario/inc/menuAdmin.php";
} else if ($_SESSION["rol"] == 2) {
    require_once "../app/views/usuario/inc/menuApoyo.php";
} else {
    require_once "../app/views/usuario/inc/menuInvitado.php";
}

?>

<br><br>
<h1 align="center" >Consulta Usuarios</h1>
<br>
<div class="con container">
 <div class=" row justify-content-around ">
 	<div class="col-4 ap" >
		<form method="post" action="<?php echo RUTA_URL; ?>/usuario/consultarusuario">
			<h3>Buscar registro</h3>
			<input class="ar" type="search" name="docUsuario" placeholder="numero documento" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required><br><br>
			<center><input class="sm" type="submit" name="buscar" value="Buscar"></center>
		</form>
	</div>
 </div>






</form>
</div>

<div class=" container">
 <div class=" row justify-content-around ">
 	<div class="col-6 " >
 <br><br><br><br>

 <?php
if (isset($datos->documento_usuario)) {

} else {
    if (isset($datos["aviso"])) {
        echo '<div class="alert alert-'.$datos["alert"].' alert-dismissible">
		        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		        <strong>Exito! </strong>' . $datos["aviso"] . '</div>';
    }
}

if (isset($_SESSION["exito"])) {
	echo '<div class="alert alert-success alert-dismissible">
		        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		        <strong>Exito! </strong>Los datos se actualizaron correctamente</div>';
		        unset($_SESSION["exito"]);
}

?>

<?php if (isset($datos->documento_usuario)): ?>




 <table class="table table-bordered table-striped table-hover table-reponsive">

		<?php echo ' <thead class="thead-dark">

					   <tr class="bg-info"">
						<th>Numero Documento</th>
						<td>' . $datos->documento_usuario . '</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Tipo Documento</th>
						<td>' . $datos->tipo . '</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Primer Nombre</th>
						<td>' . $datos->primer_nombre . '</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Segundo Nombre</th>
						<td>' . $datos->segundo_nombre . '</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Primer Apellidos</th>
						<td>' . $datos->primer_apellido . '</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Segundo Apellido</th>
						<td>' . $datos->segundo_apellido . '</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Correo</th>
						<td>' . $datos->correo . '</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Rol</th>
						<td>' . $datos->tipo_rol . '</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Estado</th>
						<td>' . $datos->estado_actual . '</td>
					    </tr>



						</thead>'; ?>

                 		<tr>
              	 		<td class="td" colspan="2"><center><a href="<?php echo RUTA_URL; ?>/usuario/editarUsuario/<?php echo $datos->documento_usuario ?>"><input id="ip" type="button" value="Editar"></center></a></td>
         	 			</tr>
					  </table>
<?php endif?>
 		</div></div></div>
<br><br><br><br><br><br><br><br><br><br>

</main>
<?php
require_once "../app/views/inc/footer.php";
?>