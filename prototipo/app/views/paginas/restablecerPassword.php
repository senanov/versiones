<?php 
require_once "../app/views/inc/header.php";
require_once "../app/views/inc/menu.php";
require_once "../app/views/inc/social.php";
 ?>

<div class="cont container">

<div class="row" id="fila" >

  <div class="col" id="columna">

<form method="POST">

<h2>Ingrese su nueva contraseña</h2>	

<p>
<input id="contrasena" type="password" name="cambioContrasena" placeholder="Contraseña" required>
</p>

<h2>Confirme la contraseña</h2>

<p>
<input id="contrasena" type="password" name="cambioContrasena1" placeholder="Confirmar Contraseña" required>
</p>

<p>
<input id="guardar" type="submit" name="Guardar" value="Guardar">
</p>

<?php 
if (isset($datos["aviso"])) {
  echo '<div class="alert alert-danger alert-dismissible exito">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <strong>Aviso:</strong>'.$datos["aviso"].' </div><br>';
}
 ?>
</form>

</div>
</div>
</div>
<?php 
require_once "../app/views/inc/footer.php";
 ?>