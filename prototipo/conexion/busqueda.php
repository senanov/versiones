<?php  include("seguridad.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Busqueda</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/estilos.css">

</head>
<body>


<?php
$_SESSION['documento']=$_POST['id'];
$documento=$_SESSION['documento'];

$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");

$consulta=mysqli_query($conexion,"select * from f_aplazamiento where numero_documento='$documento'") or die;
$consulta1=mysqli_query($conexion,"select * from f_desercion where numero_documento='$documento'") or die;
$consulta2=mysqli_query($conexion,"select * from f_c_jornada where numero_documento='$documento'") or die;
$consulta3=mysqli_query($conexion,"select * from f_traslado where numero_documento='$documento'") or die;
$consulta4=mysqli_query($conexion,"select * from f_retiro where numero_documento='$documento'") or die;
$consulta5=mysqli_query($conexion,"select * from f_reingreso where numero_documento='$documento'") or die ("el usuario no presenta ninguna novedad");	 	 	

include("../html/banner1.php");
?>

<?php
if ($_SESSION['roles']=='Apoyo Administrativo') 
{
	include('../html/menu_apoyo.php');
}

else
{
echo'<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">SENANOV</a>
  <button class="navbar-toggler navbar-inverse" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "><img src="../img/icono.png"></span>
  </button>
  <div class="collapse navbar-collapse "  id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active ">
        <a class="nav-link" href="../html/novedades.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="NOVEDADES.PHP" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">registrar novedad</a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">          
          <a class="dropdown-item" href="../formularios/reingreso.php">Reingreso</a>
          <a class="dropdown-item" href="../formularios/cambio_jornada.php">Cambio de Jornada</a>
          <a class="dropdown-item" href="../formularios/traslado.php">Traslado</a>
           <a class="dropdown-item" href="../formularios/retiro.php">Retiros</a>
          <a class="dropdown-item" href="../formularios/aplazamiento.php">Aplazamientos</a>
          <a class="dropdown-item" href="../formularios/desercion.php">Deserciones</a>
        </div>

      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="NOVEDADES.PHP" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consultar</a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">          
          <a class="dropdown-item" href="mostrar_reingreso.php">Reingreso</a>
          <a class="dropdown-item" href="mostrar_cj.php">Cambio de Jornada</a>
          <a class="dropdown-item" href="mostrar_traslado.php">Traslado</a>
           <a class="dropdown-item" href="mostrar_retiro.php">Retiros</a>
          <a class="dropdown-item" href="mostra_aplazamientos.php">Aplazamientos</a>
          <a class="dropdown-item" href="mostrar_desercion.php">Deserciones</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="consulta.php">
         Consulta General
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="consulta_usuario.php">
         Consulta de Usuarios
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="mostrar_programas.php">
         Programas de formación
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="perfil.php">
         Perfil del Usuario
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="salir.php">
         Cerrar sesion
        </a>
      </li>
    </ul>
  </div>
 
</nav>';
}
?>

<br><br> 

<p align="center">
<a href="consulta.php"><input id="ip" type="button" name="volver" value="Volver a Consultar"></a>
</p>

<br>
<div class="container-fluid">


					
						

		<div class="row">
			<div class="col">

				
				<table class="table table-bordered table-striped table-hover table-reponsive">
					
					<thead class="thead-default">
						<th>Tipo de Novedad</th>
						<th>Nombres</th>
						<th>apellidos</th>
						<th>tipo documento</th>
						<th>numero documento</th>
						<th>grupo</th>
						<th>ficha</th>					
						<th>programa</th>					
						<th>Fecha novedad</th>
						<th>Opciones</th>
					</thead>

					
					
					
					<?php
					$contador=0;


					while ($reg=mysqli_fetch_array($consulta)) {
					echo'<tr class=" bg-info"> <td>'.'Aplazamiento'.'</td>'                     
						.'<td>'.$reg['nombre'].'</td>'
						.'<td>'.$reg['apellidos'].'</td>'
						.'<td>'.$reg['documento'].'</td>'
						.'<td>'.$reg['numero_documento'].'</td>'
						.'<td>'.$reg['grupo'].'</td>'
						.'<td>'.$reg['numero_ficha'].'</td>'
						.'<td>'.$reg['programa_formacion'].'</td>'
						.'<td>'.$reg['fecha'].'</td>'
						.'<td class="td"><a href="editar_aplazamiento.php"><input id="ip" type="button" value="Editar"></a> | <a href="eliminar_aplazamiento.php"><input id="ipe" type="button" value="Eliminar"></a></td></tr>';
						$contador=1;
					}
					?>

					<?php
					while ($reg=mysqli_fetch_array($consulta1)) {
					echo'<tr class=" bg-info"><td>'.'Desercion'.'</td>'                     
						.'<td>'.$reg['nombre'].'</td>'
						.'<td>'.$reg['apellidos'].'</td>'
						.'<td>'.$reg['documento'].'</td>'
						.'<td>'.$reg['numero_documento'].'</td>'
						.'<td>'.$reg['grupo'].'</td>'
						.'<td>'.$reg['numero_ficha'].'</td>'
						.'<td>'.$reg['programa_formacion'].'</td>'
						.'<td>'.$reg['fecha'].'</td>'
						.'<td class="td"><a href="modificar_desercion.php"><input id="ip" type="button" value="Editar"></a> | <a href="eliminar_desercion.php"><input id="ipe" type="button" value="Eliminar"></a></td></tr>';
						$contador=1;
					}
					?>

					<?php
					while ($reg=mysqli_fetch_array($consulta2)) {
					echo'<tr class=" bg-info"><td>'.'Cambio de Jornada'.'</td>'                     
						.'<td>'.$reg['nombre'].'</td>'
						.'<td>'.$reg['apellidos'].'</td>'
						.'<td>'.$reg['documento'].'</td>'
						.'<td>'.$reg['numero_documento'].'</td>'
						.'<td>'.$reg['grupo'].'</td>'
						.'<td>'.$reg['numero_ficha'].'</td>'
						.'<td>'.$reg['programa_formacion'].'</td>'
						.'<td>'.$reg['fecha'].'</td>'
						.'<td class="td"><a href="editarcambioj.php"><input id="ip" type="button" value="Editar"></a> | <a href="eliminar_cj.php"><input id="ipe" type="button" value="Eliminar"></a></td></tr>';
						$contador=1;

					}
					?>

					<?php
					while ($reg=mysqli_fetch_array($consulta3)) {
					echo'<tr class=" bg-info"><td>'.'Traslado'.'</td>'                     
						.'<td>'.$reg['nombre'].'</td>'
						.'<td>'.$reg['apellidos'].'</td>'
						.'<td>'.$reg['documento'].'</td>'
						.'<td>'.$reg['numero_documento'].'</td>'
						.'<td>'.$reg['grupo'].'</td>'
						.'<td>'.$reg['numero_ficha'].'</td>'
						.'<td>'.$reg['programa_formacion'].'</td>'
						.'<td>'.$reg['fecha'].'</td>'
						.'<td class="td"><a href="editar_traslado.php"><input id="ip" type="button" value="Editar"></a> | <a href="eliminart.php"><input id="ipe" type="button" value="Eliminar"></a></td></tr>';
						$contador=1;

					}
					?>

					<?php
					while ($reg=mysqli_fetch_array($consulta4)) {
					echo'<tr class=" bg-info"><td>'.'Retiro'.'</td>'                     
						.'<td>'.$reg['nombre'].'</td>'
						.'<td>'.$reg['apellidos'].'</td>'
						.'<td>'.$reg['documento'].'</td>'
						.'<td>'.$reg['numero_documento'].'</td>'
						.'<td>'.$reg['grupo'].'</td>'
						.'<td>'.$reg['numero_ficha'].'</td>'
						.'<td>'.$reg['programa_formacion'].'</td>'
						.'<td>'.$reg['fecha'].'</td>'
						.'<td class="td"><a href="editar_retiro.php"><input id="ip" type="button" value="Editar"></a> | <a href="eliminarr.php"><input id="ipe" type="button" value="Eliminar"></a></td></tr>';
						$contador=1;

					}
					?>

					<?php
					while ($reg=mysqli_fetch_array($consulta5)) {
					echo'<tr class=" bg-info"><td>'.'Reingreso'.'</td>'                     
						.'<td>'.$reg['nombre'].'</td>'
						.'<td>'.$reg['apellidos'].'</td>'
						.'<td>'.$reg['documento'].'</td>'
						.'<td>'.$reg['numero_documento'].'</td>'
						.'<td>'.$reg['grupo'].'</td>'
						.'<td>'.$reg['numero_ficha'].'</td>'
						.'<td>'.$reg['programa_formacion'].'</td>'
						.'<td>'.$reg['fecha_ingreso'].'</td>'
						.'<td class="td"><a href="modificar_reingreso.php"><input id="ip" type="button" value="Editar"></a> | <a href="borrar_reingreso.php"><input id="ipe" type="button" value="Eliminar"></a></td></tr>';
						$contador=1;

					}

mysqli_close($conexion);

if ($contador==0 || $documento== "")
{
echo "<tr bg-danger><td >El Aprendiz con el numero de documento <b>$documento</b><br> no presenta ninguna novedad</td></tr>";
exit;
}

?>
					


				</table>
				<br><br>
			</div>
		</div></div></div>
	 


<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>