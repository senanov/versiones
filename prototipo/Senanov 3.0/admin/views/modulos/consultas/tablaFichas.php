<div class="container">
<div class="row">
<div class="col">
<br><br>
	<?php 
if (isset($_SESSION["f"])) {
    if ($_SESSION["f"] == 1) {
        echo '<div class="alert alert-success alert-dismissible">
		      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		      <strong>Exito! </strong> La Ficha se Actualizo correctamente</div>';
		      $_SESSION["f"]=0;
    }
}
 ?>
 <br>
<table class="table table-bordered table-striped table-hover table-reponsive">

 <thead class="thead-dark">
  <th>Numero de ficha</th>
  <th>Sede</th>
  <th>Jornada</th>
  <th>Modalidad</th>
  <th>Programa</th>
  <th>Trimestre</th>
  <th>Opciones</th>
 </thead>



<?php

$ficha = new RegistrarNovedad();
$ficha-> tablaFichasController();
?>

   </table>



</div></div></div>