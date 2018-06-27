<div class="container">
<div class="row">
<div class="col">
<table class="table table-bordered table-striped table-hover table-reponsive">

 <thead class="thead-dark">
  <th>Programas Técnicos</th>
	<th>opciones</th>';

 </thead>
 <?php	
$programa=new Novedades();
$programa->consultarTecnicosController();
 ?>			
   </table>

   <table class="table table-bordered table-striped table-hover table-reponsive">

 <thead class="thead-dark">
  <th>Programas Técologicos</th>
	<th>opciones</th>';

 </thead>
 <?php	

$programa->consultarTecnologosController();
 ?>			
   </table>


   <table class="table table-bordered table-striped table-hover table-reponsive">

 <thead class="thead-dark">
  <th>Especializaciones</th>
	<th>opciones</th>';

 </thead>
 <?php	

$programa->consultarEspecializacionController();
 ?>			
   </table>

</div></div></div>