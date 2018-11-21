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


<br><br>

<h1 align="center" >Añadir Programas de formación</h1>


<div class="container" id="contenedor1" >
<br>
<div class="row" id="fila1" >

  <div class="col" id="columna1">
 <form method="post">
 <center><select name="tprograma" class="programa">
 <option value="1">PROGRAMA TÉCNICO</option>
   <option value="2">PROGRAMA TECNOLÓGICO</option>
   <option value="3">ESPECIALIZACIONES</option>
 </select><br><br>
 <input type="text" name="programa" placeholder="Agregar programa " class="programa" required style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"><br><br>
<input type="submit" name="enviar" value="Agregar" class="bt1">
</center>
   </form>
   <br>
   <center><a  href="<?php echo RUTA_URL; ?>/programa/consultarPrograma"><input type="button" id="ip" value="Ver Programas"></a></center>
   <br><br>
<?php
if (isset($datos['aviso'])) {
	echo '<div class="alert alert-'.$datos["alert"].' alert-dismissible">
		        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		        <strong>aviso! </strong> '.$datos['aviso'].'</div>';
}
?>
   
</div>

</div>
</div>


<br><br><br><br><br><br><br><br><br>


<?php 
require_once "../app/views/inc/footer.php";
?>