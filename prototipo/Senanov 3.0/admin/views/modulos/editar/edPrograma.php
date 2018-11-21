<div class="container">
<div class="row">
<div class="col">
	<br>
	<br>
	<br>
<table class="table table-bordered table-striped table-hover table-reponsive">

 <thead class="thead-dark">
  <th>Id Programa</th>
  <th>Tipo de Programa</th>
  <th>Programas</th>
  <th>Opciones</th>
<form method="post">
 </thead>
 <?php	
$programa = new Novedades();
$programa->editarProgramaController();
$programa -> actualizarProgramasController();
 ?>	
 </form>		
   </table>
</div></div></div>