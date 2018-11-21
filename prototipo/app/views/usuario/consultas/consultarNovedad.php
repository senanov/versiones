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
<h1 align="center">Consultar Novedades</h1>
<br>
<div class="con container">
 <div class=" row justify-content-around ">
 	<div class="col-4 ap" >
		<form method="post" action="<?php echo RUTA_URL; ?>/novedad/consultarNovedad">
			<h3>Buscar registro</h3>
			<input class="ar" type="search" name="docNovedad" placeholder="numero documento" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required><br><br>
			<center><input class="sm" type="submit" name="buscar" value="Buscar"></center>
		</form>
	</div>
 </div>

</div>
<div class=" container">
 <div class=" row justify-content-around ">
 	<div class="col-6 " >
 		<br><br><br>

 		<?php if (isset($_SESSION["exito"])) {

    if ($_SESSION["exito"] == 1) {

        echo '<div class="alert alert-success alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> Los datos fueron actualizados correctamente </div><br>';

        unset($_SESSION["exito"]);
        
    }

}?>

<?php if (isset($datos->tipo_novedad)): ?>


 <table class="table table-bordered table-striped table-hover table-reponsive">

		<?php

echo '<thead class="thead-dark">

					   <tr class="bg-info"">
						<th>Tipo De Novedad</th>
						<td>' . $datos->tipo_novedad . '</td>
					    </tr>

						<tr class="bg-info"">
						<th>Primer Nombre</th>
						<td>' . $datos->primer_nombre . '</td>
					    </tr>

					    <tr class="bg-info"">
						<th>Segundo Nombre</th>
						<td>' . $datos->segundo_nombre . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Primer Apellido</th>
						<td>' . $datos->primer_apellido . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Segundo Apellido</th>
						<td>' . $datos->segundo_apellido . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Tipo Documento</th>
						<td>' . $datos->tipo . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Numero Documento</th>
						<td>' . $datos->documento . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Grupo</th>
						<td>' . $datos->grupo . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Ficha</th>
						<td>' . $datos->numero_ficha . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Trimestre</th>
						<td>' . $datos->numero_trimestre . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Jornada</th>
						<td>' . $datos->tipo_jornada . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Centro Actual</th>
						<td>' . $datos->centro_actual . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Centro Traslado</th>
						<td>' . $datos->centro_traslado . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Ciudad Actual</th>
						<td>' . $datos->ciudad_actual . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Ciduad Traslado</th>
						<td>' . $datos->ciudad_traslado . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Programa de Formación</th>
						<td>' . $datos->nombre_programa . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Sede</th>
						<td>' . $datos->nombre_sede . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>Fecha Novedad</th>
						<td>' . $datos->fecha . '</td>
					    </tr>

					    <tr class="bg-info">
						<th>motivo</th>
						<td>' . $datos->motivo . '</td>
					    </tr>


						</thead>'; ?>

                 		<tr>
              	 		<td class="td" colspan="2"><center><a href="<?php echo RUTA_URL; ?>/novedad/editarNovedad/<?php echo $datos->documento ?>"><input id="ip" type="button" value="Editar"></a> | <input id="ipe" type="button" value="Eliminar"></center></td>
         	 			</tr>

					  </table>
<?php endif?>

<?php
if (isset($datos->tipo_novedad)) {

} else {

    if (isset($datos["aviso"])) {
        echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> ' . $datos["aviso"] . ' </div><br>';
    }
}

?>
</div></div></div>
<br><br><br><br><br><br><br><br><br>

</main>
<?php
require_once "../app/views/inc/footer.php";
?>