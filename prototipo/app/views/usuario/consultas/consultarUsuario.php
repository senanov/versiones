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
<h1 align="center">Consultar Usuarios</h1>
<br>
<div class="container">
	<?php if (isset($_SESSION["exito"])) {

    if ($_SESSION["exito"] == 1) {

        echo '<div class="alert alert-success alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> Los datos fueron actualizados correctamente </div><br>';

        unset($_SESSION["exito"]);
        
    }   

}

if (isset($datos["aviso"])) {
    	echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> '.$datos["aviso"].'</div><br>';
    }
?>
 <div class=" row justify-content-around ">
 	<div class="col " >
 		<div class="form-group pull-right ">
    	<input type="text" class="search form-control" width="30" placeholder="Buscar">
		</div>
		<div class="table100 ver2 m-b-110">
			<div id="div1" align="center" class="table-responsive">
					<table data-vertable="ver2" class="table table-hover table-bordered results ">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Numero de documento</th>
								<th class="column100 column2" data-column="column2">Tipo de Documento</th>
								<th class="column100 column3" data-column="column3">Primer Nombre</th>
								<th class="column100 column3" data-column="column3">Segundo Nombre</th>
								<th class="column100 column4" data-column="column4">Primer Apellido</th>
								<th class="column100 column5" data-column="column5">Segundo Apellido</th>						
								<th class="column100 column7" data-column="column7">Correo</th>
								<th class="column100 column8" data-column="column8">Rol</th>
								<th class="column100 column9" data-column="column9">estado</th>								
									
								<th class="column100 column20" data-column="column20">Editar</th>
								
							</tr>
							<tr class="warning no-result">
      						<td colspan="4"><i class="fa fa-warning"></i> No hay resultado</td>
    						</tr>
						</thead>
						<tbody>
							<?php 
							if ($_SESSION["rol"]!=3) {
								
							
							foreach ($datos["usuarios"] as $datos ) {

								if ($datos->documento_usuario != SUPER_ADMINISTRADOR) {

									echo'<tr class="row100">
								<td class="column100 column7" data-column="column7">' .  $datos->documento_usuario . '</td>
								<td class="column100 column6" data-column="column6">' .  $datos->tipo . '</td>
								<td class="column100 column2" data-column="column2">' . $datos->primer_nombre . '</td>
								<td class="column100 column3" data-column="column3">' . $datos->segundo_nombre . '</td>
								<td class="column100 column4" data-column="column4">' . $datos->primer_apellido . '</td>
								<td class="column100 column5" data-column="column5">' . $datos->segundo_apellido . '</td>	
								<td class="column100 column8" data-column="column8">' . $datos->correo . '</td>
								<td class="column100 column9" data-column="column9">' . $datos->tipo_rol . '</td>
								<td class="column100 column10" data-column="column10">' . $datos->estado_actual . '</td>	
								<td class="column100 column20" data-column="column20"><a href="'.RUTA_URL.'/usuario/editarUsuario/'.$datos->documento_usuario.'"><i class="fas fa-edit fa-2x "></i></a></td>		
							</tr>';								
								}
								
							
							}
						}?>
						</tbody>
					</table>

</div></div></div></div></div>
 		
<br><br><br><br><br><br><br><br><br><br>

</main>


<?php if (isset($datos2["ed"])): ?>


	
<!-- Modal -->
  <div class="modal fade" id="editarUsuario" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h4 class="modal-title">Actualizar datos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
         <form action="<?php  echo RUTA_URL; ?>/usuario/editarUsuario"  method="post">   
  <div class="formulario form-group" >
                  
 <?php 
      echo'
		
		<div class="form-group">
  	 	<label>Numero de Documento</label>
        <input type="text" name="ndocumento"  class="form-control" value="'.$datos2["ed"]->documento_usuario.'" disabled>
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
  	 	<label>Primer Nombre</label>
        <input type="text" name="nombre1"  class="form-control" value="'.$datos2["ed"]->primer_nombre.'" disabled >
      </div>

      <div class="form-group">
        <label>Segundo Nombre</label>
        <input type="text" name="nombre2"  class="form-control" value="'.$datos2["ed"]->segundo_nombre.'" disabled>
      </div>

      <div class="form-group">
        <label>Primer Apellido</label>
        <input type="text" name="apellido1"  class="form-control" value="'.$datos2["ed"]->primer_apellido.'" disabled>
      </div>

      <div class="form-group">
        <label>Segundo Apellido</label>
        <input type="text" name="apellido2"  class="form-control" value="'.$datos2["ed"]->segundo_apellido.'" disabled>
      </div>

      <div class="form-group">
        <label>Correo Electronico</label>
        <input type="text" name="correo"  class="form-control" value="'. $datos2["ed"]->correo . '" disabled>
      </div>	

      <div class="form-group">
        <label>Rol del Usuario</label>
       <select name="rol" class="form-control">
       <option value="'.$datos2["ed"]->id_rol.'">'.$datos2["ed"]->tipo_rol.'</option>
       					<option value="4">Aprendiz</option>
                        <option value="3">Invitado</option>
                        <option value="2">Apoyo Administrativo</option>
              			<option value="1">Administrador</option>
              			</select>
      </div>


       <div class="form-group">
        <label>Estado del Usuario</label>
       <select name="estado"  class="form-control">
       <option value="'. $datos2["ed"]->estado.'">'.$datos2["ed"]->estado_actual .'</option>
                        <option value="1">Activo</option>
              			<option value="2">Inactivo</option>
              			</select>
      </div>


      <input type="hidden" name="id" value="'.$datos2["ed"]->documento_usuario.'">
	
		
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
      $("#editarUsuario").modal("show");
   });
</script>
<?php endif ?>
<?php
require_once "../app/views/inc/footer.php";
?>