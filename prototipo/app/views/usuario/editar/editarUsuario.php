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

<br><br><br><br>
<div class=" container">
 <div class=" row justify-content-around ">
 	<div class="col-6 " >
<form method="post">

<?php
$ndocumento = $datos['ed']->documento_usuario;
$rol        = "<option value=" . $datos['ed']->id_rol . " selected>" . $datos['ed']->tipo_rol . "</option>";
$estado     = "<option value=" . $datos['ed']->estado . " selected>" . $datos['ed']->estado_actual . "</option>";
$tdocumento = "<option value=" . $datos['ed']->tipo_documento . " selected>" . $datos['ed']->tipo . "</option>";

echo "<table class='table table-bordered table-striped table-hover table-reponsive'>

					   <thead class='thead-dark'>

					   <tr class='bg-info'>
						<th>Numero Documento</th>
						<td><input type='text' name='ndocumento' value=" . $datos['ed']->documento_usuario . "></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Tipo Documento</th>
						<td><select name='tdocumento' class='et'>
						" . $tdocumento . "
				      	<option value='1'>Cédula de Ciudadanía</option>
				      	<option value='2'>Tarjeta de Identidad</option>
				      	<option value='3'>Cédula de Extranjeria</option>
				  	   </select>
						</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Primer Nombre</th>
						<td>" . $datos['ed']->primer_nombre . "</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Segundo Nombre</th>
						<td>" . $datos['ed']->segundo_nombre . "</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Primer Apellidos</th>
						<td>" . $datos['ed']->primer_apellido . "</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Segundo Apellido</th>
						<td>" . $datos['ed']->segundo_apellido . "</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Correo</th>
						<td>" . $datos['ed']->correo . "</td>
					    </tr>


					    <tr class='bg-info'>
						<th>Rol</th>
						<td><select name='rol' class='et'>
						" . $rol . "
                        <option value='3'>Invitado</option>
                        <option value='2'>Apoyo Administrativo</option>
              			<option value='1'>Administrador</option>
              			</select></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Estado</th>
						<td><select name='estado' class='et'>
						" . $estado . "
                        <option value='1'>Activo</option>
              			<option value='2'>Inactivo</option>
              			</select></td>
					    </tr>
                         <input type='hidden' name='id' value='$ndocumento'>

						</thead>";

if (isset($datos["aviso"])) {
    echo '<div class="alert alert-danger alert-dismissible">
                    		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    		<strong>Aviso:</strong> ' . $datos["aviso"] . ' </div><br>';
}
?>

                 		<tr>
              	 		<td class='le' align='center' colspan='2'><input class='bt1' type='submit' name='bt' value='Guardar Cambios'></td>
         	 			</tr>
					  </table>

</form>
<br><br><br><br>
</div>
   </div>
     </div>


<?php
require_once "../app/views/inc/footer.php";
?>