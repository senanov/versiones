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
<div class="container">
	<?php if (isset($_SESSION["exito"])) {

    if ($_SESSION["exito"] == 1) {

        echo '<div class="alert alert-success alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> Los datos fueron actualizados correctamente </div><br>';

        unset($_SESSION["exito"]);
        
    }

     else if ($_SESSION["exito"] == 2) {

        echo '<div class="alert alert-success alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> La Novedad se Elimino  </div><br>';

        unset($_SESSION["exito"]);
        
    }

}?>
 <div class=" row justify-content-around ">
 	<div class="col " >
 		<div class="form-group pull-right ">
    	<input type="text" class="search form-control" width="30" placeholder="Buscar" >
		</div>
		<div class="table100 ver2 m-b-110">
			<div id="div1" align="center" class="table-responsive">
					<table data-vertable="ver2" class="table table-hover table-bordered results ">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Tipo De Novedad</th>
								<th class="column100 column2" data-column="column2">Primer Nombre</th>
								<th class="column100 column3" data-column="column3">Segundo Nombre</th>
								<th class="column100 column4" data-column="column4">Primer Apellido</th>
								<th class="column100 column5" data-column="column5">Segundo Apellido</th>
								<th class="column100 column6" data-column="column6">Tipo Documento</th>
								<th class="column100 column7" data-column="column7">Numero Documento</th>
								<th class="column100 column8" data-column="column8">Grupo</th>
								<th class="column100 column9" data-column="column9">Ficha</th>
								<th class="column100 column10" data-column="column10">Trimestre</th>
								<th class="column100 column11" data-column="column11">Jornada</th>
								<th class="column100 column12" data-column="column12">Centro Actual</th>
								<th class="column100 column13" data-column="column13">Centro Traslado</th>
								<th class="column100 column14" data-column="column14">Ciudad Actual</th>
								<th class="column100 column15" data-column="column15">Ciduad Traslado</th>
								<th class="column100 column16" data-column="column16">Programa de Formación</th>
								<th class="column100 column17" data-column="column17">Sede</th>
								<th class="column100 column18" data-column="column18">Fecha Novedad</th>
								<th class="column100 column18" data-column="column19">Motivo</th>
								<th class="column100 column19" data-column="column20">Acta</th>
								<?php 
								if ($_SESSION["rol"]!=3) {
									echo'
								<th class="column100 column20" data-column="column20">Editar</th>
								<th class="column100 column21" data-column="column21">Eliminar</th>';
							      }
								?>
							</tr>
							<tr class="warning no-result">
      						<td colspan="4"><i class="fa fa-warning"></i> No hay resultado</td>
    						</tr>
						</thead>
						<tbody>
							<?php 
							if ($_SESSION["rol"]!=3) {
								
							
							foreach ($datos["novedades"] as $datos ) {
								if ($datos->estado !=2) {
									
								
							echo'<tr class="row100">
								<td class="column100 column1" data-column="column1">' . $datos->tipo_novedad . '</td>
								<td class="column100 column2" data-column="column2">' . $datos->primer_nombre . '</td>
								<td class="column100 column3" data-column="column3">' . $datos->segundo_nombre . '</td>
								<td class="column100 column4" data-column="column4">' . $datos->primer_apellido . '</td>
								<td class="column100 column5" data-column="column5">' . $datos->segundo_apellido . '</td>
								<td class="column100 column6" data-column="column6">' . $datos->tipo . '</td>
								<td class="column100 column7" data-column="column7">' . $datos->documento . '</td>
								<td class="column100 column8" data-column="column8">' . $datos->grupo . '</td>
								<td class="column100 column9" data-column="column9">' . $datos->numero_ficha . '</td>
								<td class="column100 column10" data-column="column10">' . $datos->numero_trimestre . '</td>
								<td class="column100 column11" data-column="column11">' . $datos->tipo_jornada . '</td>
								<td class="column100 column12" data-column="column12">' . $datos->centro_actual . '</td>
								<td class="column100 column13" data-column="column13">' . $datos->centro_traslado . '</td>
								<td class="column100 column14" data-column="column14">' . $datos->ciudad_actual . '</td>
								<td class="column100 column15" data-column="column15">' . $datos->ciudad_traslado . '</td>
								<td class="column100 column16" data-column="column16">' . $datos->nombre_programa . '</td>
								<td class="column100 column17" data-column="column17">' . $datos->nombre_sede . '</td>
								<td class="column100 column18" data-column="column18">' . $datos->fecha . '</td>
								<td class="column100 column19" data-column="column19">' . $datos->motivo . '</td>
								<td class="column100 column18" data-column="column20"><a href="'.RUTA_URL.'/novedad/consultarNovedad?file=' . $datos->acta . ' ">' . '<i class="fas fa-download fa-2x descarga"></i></a>' . '</td>
								<td class="column100 column20" data-column="column21"><a href="'.RUTA_URL.'/novedad/editarNovedad/'.$datos->documento.'"><i class="fas fa-edit fa-2x "></i></a></td>
								<td class="column100 column21" data-column="column22"><a href="'.RUTA_URL.'/novedad/eliminarNovedad/'.$datos->documento.'"><i class="fas fa-trash-alt fa-2x"></i></a></button ></center></td>
							</tr>';
								}
							}
						}else{

							foreach ($datos["novedades"] as $datos ) {
								if ($datos->estado !=2) {
							echo'<tr class="row100">
								<td class="column100 column1" data-column="column1">' . $datos->tipo_novedad . '</td>
								<td class="column100 column2" data-column="column2">' . $datos->primer_nombre . '</td>
								<td class="column100 column3" data-column="column3">' . $datos->segundo_nombre . '</td>
								<td class="column100 column4" data-column="column4">' . $datos->primer_apellido . '</td>
								<td class="column100 column5" data-column="column5">' . $datos->segundo_apellido . '</td>
								<td class="column100 column6" data-column="column6">' . $datos->tipo . '</td>
								<td class="column100 column7" data-column="column7">' . $datos->documento . '</td>
								<td class="column100 column8" data-column="column8">' . $datos->grupo . '</td>
								<td class="column100 column9" data-column="column9">' . $datos->numero_ficha . '</td>
								<td class="column100 column10" data-column="column10">' . $datos->numero_trimestre . '</td>
								<td class="column100 column11" data-column="column11">' . $datos->tipo_jornada . '</td>
								<td class="column100 column12" data-column="column12">' . $datos->centro_actual . '</td>
								<td class="column100 column13" data-column="column13">' . $datos->centro_traslado . '</td>
								<td class="column100 column14" data-column="column14">' . $datos->ciudad_actual . '</td>
								<td class="column100 column15" data-column="column15">' . $datos->ciudad_traslado . '</td>
								<td class="column100 column16" data-column="column16">' . $datos->nombre_programa . '</td>
								<td class="column100 column17" data-column="column17">' . $datos->nombre_sede . '</td>
								<td class="column100 column18" data-column="column18">' . $datos->fecha . '</td>
								<td class="column100 column19" data-column="column19">' . $datos->motivo . '</td>
								<td class="column100 column18" data-column="column20"><a href="'.RUTA_URL.'/novedad/consultarNovedad?file=' . $datos->acta . ' ">' . '<i class="fas fa-download fa-2x descarga"></i></a>' . '</td>
								
							</tr>';
								}
							}
						}


							?>
						</tbody>
					</table>


<?php if (isset($datos2["eliminar"])): ?>
					
				
					
								<!-- ventana modal -->
<div class="container"> 

  <!-- Modal  eliminar -->
  <div class="modal fade" id="eliminar">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Novedad </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        ¿Esta Seguro que Desea Eliminar el Registro?<br><i class="fas fa-spinner fa-2x fa-spin"></i>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
        	<a href="<?php echo RUTA_URL;?>/novedad/eliminarNovedad?eliminar=<?php echo $datos2['eliminar']->documento; ?>"><i class="fas fa-check-square fa-3x"></i></a>
          <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times-circle fa-2x"></i></button>
        </div>'

      </div>
    </div>
  </div>

</div>
<script>
	$(document).ready(function()
   {
      $("#eliminar").modal("show");
   });
</script>
<!-- fin ventana modal -->
<?php endif ?>
				
				
				</div></div></div></div></div>

<?php 

    // if (isset($datos["aviso"])) {
    //     echo '<div class="alert alert-danger alert-dismissible">
	   //          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	   //          <strong>Aviso:</strong> ' . $datos["aviso"] . ' </div><br>';
    // }


?>

<br><br><br><br><br><br><br><br><br>

</main>
<?php if (isset($datos2["ed"])): ?>






	
<!-- Modal -->
  <div class="modal fade" id="editarNovedad" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h4 class="modal-title">Actualizar datos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
         <form action="<?php  echo RUTA_URL; ?>/novedad/editarNovedad"  method="post">   
  <div class="formulario form-group" >
                  
 <?php 
      echo' <div class="form-group">
  	 	<label>Primer Nombre</label>
        <input type="text" name="nombre1"  class="form-control" value="'.$datos2["ed"]->primer_nombre.'" >
      </div>

      <div class="form-group">
        <label>Segundo Nombre</label>
        <input type="text" name="nombre2"  class="form-control" value="'.$datos2["ed"]->segundo_nombre.'">
      </div>

      <div class="form-group">
        <label>Primer Apellido</label>
        <input type="text" name="apellido1"  class="form-control" value="'.$datos2["ed"]->primer_apellido.'">
      </div>

      <div class="form-group">
        <label>Segundo Apellido</label>
        <input type="text" name="apellido2"  class="form-control" value="'.$datos2["ed"]->segundo_apellido.'">
      </div>
		<div class="form-group">
        <label>Tipo de documento</label>
      <select name="tdocumento" class="form-control" >
						
						<option value="'.$datos2["ed"]->tipo_documento.'">'.$datos2["ed"]->tipo.'</option>
				      	<option value="1">Cédula de Ciudadanía</option>
				      	<option value="2">Tarjeta de Identidad</option>
				      	<option value="3">Cédula de Extranjeria</option>   
				  	    </select>
</div>


      <div class="form-group">
        <label>Grupo</label>
        <input type="text" name="grupo"  class="form-control" value="'.$datos2["ed"]->grupo.'">
      </div>
	
		<input type="hidden" name="id" value="'.$datos2["id"].'">
      ';

      
     
        ?>
  </div>
  <div class="modal-footer">
  <input class="button" type="submit" name="button" id="button" value="Actualizar"/>
  </form>
        </div>
        
      </div>
      
    </div>
  </div>
  
</div>

	<script>
	$(document).ready(function()
   {
      $("#editarNovedad").modal("show");
   });
</script>
<?php endif ?>

<?php
require_once "../app/views/inc/footer.php";
?>