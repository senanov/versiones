<br><br>
<h1 align="center" >Consulta Usuarios</h1>
<br>
<div class="con container">
 <div class=" row justify-content-around ">
 	<div class="col-4 ap" >
		<form method="post">
			<h3>Buscar registro</h3>
			<input class="ar" type="search" name="docUsuario" placeholder="numero documento" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required><br><br>
			<center><input class="sm" type="submit" name="buscar" value="Buscar"></center>	
		</form>	
	</div>
 </div>
 <br><br><br><br>
 <?php
 if (isset($_SESSION['doc'])) {
 	     $_POST["docUsuario"]=$_SESSION['doc'];
 		
 		echo '<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Exito! </strong>El cambio de datos fue exitoso</div>';

 	unset($_SESSION['doc']);
 	
 	
 	

 }
$consultarUsuario = new Novedades();
$consultarUsuario ->consultaUsuariosController();
 ?>
 
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</form>
</div>


