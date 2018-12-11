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
<style type="text/css">
  
  td{
    background: white;
  }
</style>
<br><br>

<!-- los cambios se realizaron exitosamente   -->
<?php if (isset($datos["aviso"])) {
    echo '<div class="alert alert-'.$datos["alert"].' alert-dismissible exito">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Aviso:</strong>  ' . $datos["aviso"] . '
            </div><br><br>';
}?>

<div class="container">
				 <div class="row">
				   <div class="col">
<?php if (isset($datos["ed"]->documento_usuario)) {
    $perfil = $datos["ed"];

    echo '<table class="table table-bordered table-striped table-hover table-reponsive">

					<thead class="thead-dark">

						<tr>
						<th>Numero Documento</th>
						<td>' . $perfil->documento_usuario . '</td>
					    </tr>

					    <tr>
						<th>Tipo Documento</th>
						<td>' . $perfil->tipo . '</td>
					    </tr>

					    <tr>
						<th>Nombres</th>
						<td>' . $perfil->primer_nombre . ' ' . $perfil->segundo_nombre . '</td>
					    </tr>

					    <tr>
						<th>Apellidos</th>
						<td>' . $perfil->primer_apellido . ' ' . $perfil->segundo_apellido . '</td>
					    </tr>

					    <tr>
						<th>Correo</th>
						<td>' . $perfil->correo . '</td>
					    </tr>

					</thead>
		          		<tr>
		            	<td class="le" align="center" colspan="2"><button type="button" class="bt1" data-toggle="modal" data-target="#confirmar">Actualizar Información </button>
          				</tr>
					</table>';
}
?>
			   </div>
		     </div>
		   </div>
<!-- ventana modal -->
<div class="container"> 

  <!-- The Modal -->
  <div class="modal fade" id="confirmar">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Confirme su contraseña</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        	<form method="POST" action="<?php echo RUTA_URL;?>/usuario/editarPerfil">
          <input type="password" name="pass" id="pass" class="ar"  placeholder="confirmar contraseña" required>
          <input type="submit" value="confirmar" class="bt">
          </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" id="ip" data-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>

</div>
<!-- fin ventana modal -->
<?php
require_once "../app/views/inc/footer.php";
?>