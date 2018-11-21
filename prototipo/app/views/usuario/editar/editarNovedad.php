<?php
require_once "../app/views/usuario/inc/header.php";
require_once "../app/views/usuario/inc/banner.php";

if ($_SESSION["rol"] == 1 || $_SESSION["rol"] == 0 ) {
    require_once "../app/views/usuario/inc/menuAdmin.php";
} else if ($_SESSION["rol"] == 2) {
    require_once "../app/views/usuario/inc/menuApoyo.php";
} else {
    require_once "../app/views/usuario/inc/menuInvitado.php";
}

?>


<div class=" container">
 <div class=" row justify-content-around ">
 	<div class="col-6 " >
 		<br><br><br>

<form method="post" action="<?php echo RUTA_URL;?>/novedad/editarNovedad">
<?php if (isset($datos["id"])): ?>


 <table class='table table-bordered table-striped table-hover table-reponsive'>
					
				<?php 
	$nombre1=$datos["ed"]->primer_nombre;
    $nombre2=$datos["ed"]->segundo_nombre;
	$apellido1=$datos["ed"]->primer_apellido;
    $apellido2=$datos["ed"]->segundo_apellido;
    $tdocumento=$datos["ed"]->tipo;
    $id_tdocumento=$datos["ed"]->tipo_documento;
    $ndocumento=$datos["ed"]->documento;
    $grupo=$datos["ed"]->grupo;
    $ficha=$datos["ed"]->codigo_ficha;
    $trimestre=$datos["ed"]->numero_trimestre;
    $jornada=$datos["ed"]->tipo_jornada;
    $centroActual=$datos["ed"]->centro_actual;
    $centroTraslado=$datos["ed"]->centro_traslado;
    $ciudadActual=$datos["ed"]->ciudad_actual;
    $ciudadTraslado=$datos["ed"]->ciudad_traslado;
    $programa=$datos["ed"]->nombre_programa;
    $sede=$datos["ed"]->nombre_sede;
    $fecha=$datos["ed"]->fecha;
    $motivo=$datos["ed"]->motivo;
    $novedad=$datos["ed"]->tipo_novedad;

				echo"<thead class='thead-dark'>

					   <tr class='bg-info'>
						<th>Tipo De Novedad</th>
						<td>$novedad</td>
					    </tr>
					 						
						<tr class='bg-info'>
						<th>Primer Nombre</th>
						<td><input size='35' type='text' name='nombre1' value='$nombre1'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Segundo Nombre</th>
						<td><input size='35' type='text' name='nombre2' value='$nombre2'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Primer Apellido</th>
						<td><input size='35' type='text' name='apellido1' value='$apellido1'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Segundo Apellido</th>
						<td><input size='35' type='text' name='apellido2' value='$apellido2'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Tipo Documento</th>
						<td><select name='tdocumento' class='et'>
						
						<option value='".$id_tdocumento."'>".$tdocumento."</option>
				      	<option value='1'>Cédula de Ciudadanía</option>
				      	<option value='2'>Tarjeta de Identidad</option>
				      	<option value='3'>Cédula de Extranjeria</option>   
				  	    </select></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Numero Documento</th>
						<td>$ndocumento</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Grupo</th>
						<td><input size='35' type='text' name='grupo' value='$grupo'></td>
					    </tr>

					    <tr class='bg-info'>
						<th>Ficha</th>
						<td>$ficha</td>
					    </tr>
					   
					    <tr class='bg-info'>
						<th>Trimestre</th>
						<td>$trimestre</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Jornada</th>
						<td>$jornada</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Centro Actual</th>
						<td>$centroActual</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Centro Traslado</th>
						<td>$centroTraslado</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Ciudad Traslado</th>
						<td>$ciudadTraslado</td>
					    </tr>

					    <tr class='bg-info'>
						<th>ciudad Actual</th>
						<td>$ciudadActual</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Programa de Formación</th>
						<td>$programa</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Sede</th>
						<td>$sede</td>
					    </tr>

					    <tr class='bg-info'>
						<th>Fecha Novedad</th>
						<td>$fecha</td>
					    </tr>

					    <tr class='bg-info'>
					    <th>Motivo</th>
					    <td>$motivo</td>
					    </tr>
					    

						<input type='hidden' name='id' value='$ndocumento'>

						</thead>

                 		<tr>
              	 		<td class='le' align='center' colspan='2'><input class='bt1' type='submit' name='bt' value='Guardar Cambios'></td>
         	 			</tr>";
?>
					  </table>
					  </form>
<?php endif?>

</div></div></div>
<br><br><br><br><br><br><br><br><br>

</main>
<?php
require_once "../app/views/inc/footer.php";
?>