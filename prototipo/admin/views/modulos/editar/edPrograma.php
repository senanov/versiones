<div class="container">
<div class="row">
<div class="col">
<table class="table table-bordered table-striped table-hover table-reponsive">

 <thead class="thead-dark">
  <th>Programas Técnicos</th>
	<th>opciones</th>';
<form method="post">
 </thead>
 <?php	
$programa=new Novedades();
$programa->editarTecnicosController();
$programa->editarTecnologosController();
$programa->editarEspecializacionController();
$programa->actualizarProgramasController();
 ?>	
 </form>		
   </table>
</div></div></div>