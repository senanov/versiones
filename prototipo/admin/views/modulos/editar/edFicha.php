<div class="container">
<div class="row">
<div class="col">
<table class="table table-bordered table-striped table-hover table-reponsive">
<br>
<br>
<br>
 <thead class="thead-dark">
  <th>Numero de ficha</th>
  <th>Sede</th>
  <th>Jornada</th>
  <th>Modalidad</th>
  <th>Programa</th>
  <th>Trimestre</th>
  <th>Opciones</th>
<form method="post">
 </thead>
 <?php	
$ficha = new RegistrarNovedad();
$ficha->editarfichaController();
$ficha ->actualizarfichaController();
 ?>	
 </form>		
   </table>
</div></div></div>