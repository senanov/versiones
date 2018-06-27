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
$restablecer = new MvcController();
$restablecer -> cambioContrasenaController();

?>
</form>

</div>
</div>
</div>