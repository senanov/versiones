<br><br>
<h1 align="center">Cambio de jornada</h1>
<br>
<div class="con container">
 <div class=" row justify-content-around ">
 	<div class="col-4 ap" >
		<form method="post">
			<h3>Buscar registro</h3>
			<input class="ar" type="search" name="docCambio" placeholder="numero documento" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required><br><br>
			<center><input class="sm" type="submit" name="buscar" value="Buscar"></center>	
		</form>	
	</div>
 </div>
 <br><br><br><br>
 
 <?php
 $consulta = new Novedades();
 $consulta -> consultarCambioController();
 ?>
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 </div>