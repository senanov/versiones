<br><br>
<h1 align="center">Consultar Novedades</h1>
<br>
<div class="con container">
 <div class=" row justify-content-around ">
 	<div class="col-4 ap" >
		<form method="post">
			<h3>Buscar registro</h3>
			<input class="ar" type="search" name="docNovedad" placeholder="numero documento" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required><br><br>
			<center><input class="sm" type="submit" name="buscar" value="Buscar"></center>	
		</form>	
	</div>
 </div>
 <br><br><br><br>
 
 
 


</div>
<div class=" container">
 <div class=" row justify-content-around ">
 	<div class="col-6 " >
 		<br><br><br>
<?php
 if (isset($_SESSION["borrado"])) {
 	if ($_SESSION["borrado"]==1) {
 		echo '<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Exito! </strong>La novedad se ha eliminado correctamente</div>';
		$_SESSION["borrado"]=0;
 	}

 	if ($_SESSION["borrado"]==2) {
 		echo '<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Exito! </strong>Los datos fueron actualizados correctamente</div>';
		$_SESSION["borrado"]=0;
 	}	
 }


 if (isset($_SESSION['doc'])) {
 	$_GET["id"]=$_SESSION['doc'];
 	unset($_SESSION['doc']);

 }
 if (isset($_GET["id"])) 
 {
	$_POST["docNovedad"]=$_GET["id"];
 }
 
 $consulta = new Novedades();
 $consulta -> consultarNovedadesController();
 $consulta -> eliminarNovedadesController();
  ?>
</div></div></div>
<br><br><br><br><br><br><br><br><br>