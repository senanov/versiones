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
<br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col">

<?php if (isset($datos["aviso"])) {
    echo '<br><div class="alert alert-'.$datos["alert"].' alert-dismissible ">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Aviso:</strong>  ' . $datos["aviso"] . '
            </div><br><br>';
}?>

<?php
if (isset($datos["ed"]->documento_usuario)) {

    $documento_usuario = $datos["ed"]->documento_usuario;
    $tipo_documento    = $datos["ed"]->tipo;
    $nombre1           = $datos["ed"]->primer_nombre;
    $nombre2           = $datos["ed"]->segundo_nombre;
    $apellido1         = $datos["ed"]->primer_apellido;
    $apellido2         = $datos["ed"]->segundo_apellido;
    $contrasena        = $datos["ed"]->contrasena;
    $correo            = $datos["ed"]->correo;

    echo "<table class='table table-bordered table-striped table-hover table-reponsive'>

          <thead class='thead-dark'>

            <tr>
            <th>Numero Documento</th>
            <td>$documento_usuario</td>
              </tr>

              <tr>
            <th>Tipo Documento</th>
            <td>$tipo_documento</td>
              </tr>

                    <form method='POST' action='".RUTA_URL."/usuario/editarPerfil'>
              <tr>
            <th>Primer Nombre</th>
            <td><input size='35' type='text' name='nombre1' value='$nombre1'></td>
              </tr>

              <tr>
            <th>Segundo Nombre</th>
            <td><input size='35' type='text' name='nombre2' value='$nombre2'></td>
              </tr>

              <tr>
            <th>Primer Apellido</th>
            <td><input size='35' type='text' name='apellido1' value='$apellido1'></td>
              </tr>

              <tr>
            <th>Segundo Apellido</th>
            <td><input size='35' type='text' name='apellido2' value='$apellido2'></td>
              </tr>

              <tr>
            <th>Correo</th>
            <td><input size='35' type='email' name='correo' value='$correo'></td>
              </tr>

                     <input type='hidden' name='id' value='$documento_usuario'>
                     <tr>
                     <td class='le' align='center' colspan='2'><input class='bt1' type='submit' name='bt' value='Guardar Cambios'>
                   </tr>
            </form>
          </thead>
          </table>

<!--  tabla de la contraseña-->
          <br>

              <table class='table table-bordered table-striped table-hover table-reponsive'>
                
                <thead class='thead-dark'>

                  <tr>
                    <th>Contraseña</th>
                    <td class='le'><div class='container'>
        <!-- Trigger the modal with a button -->
        <button type='button' id='ip' data-toggle='modal' data-target='#myModal'>Editar Contraseña</button>
        </td>
      </tr>
        <!-- Modal -->
        <div class='modal fade' id='myModal' role='dialog'>
          <div class='modal-dialog'>
          
            <!-- Modal content-->
            <br><br><br><br><br><br><br><br>
            <div class='modal-content  columna1'>

              <div class='modal-header'>
                 <h4 class='modal-title'><b>Cambio de contraseña</b></h4>
                 <button type='button' class='close' data-dismiss='modal'>&times;</button>
              </div>

              <div class='modal-body'>

               <center>
               <form method='POST' action='".RUTA_URL."/usuario/editarPerfil'>
               <h6><b>Ingrese su Contraseña actual</b></h6>
               <input size='35' class='ar' type='password' name='contrasena' placeholder='Contraseña Actual' required><br><br>
               
               <h6><b>Ingrese su Contraseña nueva</b></h6>
               <input size='35' class='ar' type='password' name='contrasena1' placeholder='contraseña nueva' required><br><br>
               
               <h6><b>Confirme su contraseña nueva</b></h6>
               <input size='35' class='ar' type='password' name='contrasena2' placeholder='confirmar contraseña' required><br><br>
                
               <input id='ip' type='submit' name='Cambiar Contraseña' value='Cambiar Contraseña'>
               
               </form>
               </center>

             </div>

              <div class='modal-footer'>
                <button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
              </div>
            </table>
            </div>
            
          </div>
        </div>";
}

?>
<!--  -->
</div>
</div></div>
<?php
require_once "../app/views/inc/footer.php";
?>