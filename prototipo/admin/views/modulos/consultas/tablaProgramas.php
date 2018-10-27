<br><br>
<div class="container">
<div class="row">
<div class="col">
<table class="table table-bordered table-striped table-hover table-reponsive">
<?php 
if (isset($_SESSION["p"])) {
    if ($_SESSION["p"] == 1) {
        echo '<div class="alert alert-success alert-dismissible">
		      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		      <strong>Exito! </strong> El Programa se Actualizo correctamente</div>';
		      $_SESSION["p"]=0;
    }
}
 ?>
 <thead class="thead-dark">
  <th>Id Programa</th>
  <th>Tipo de Programa</th>
  <th>Programas</th>
  <th>Opciones</th>
 </thead>

<?php

$programa = new Novedades();
$programa->tablaProgramasController();
?>

   </table>



</div></div></div>