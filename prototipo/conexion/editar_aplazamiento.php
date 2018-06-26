<?php  include("seguridad.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tablas</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos.css">
</head>
<body>

	<?php
	
		if (isset($_GET['id'])) {
			$doc=$_GET['id'];
	  	$_SESSION['documento']=$doc;
		}
	  	
	  

$documento=$_SESSION['documento'];

$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");

	 $consulta=mysqli_query($conexion,"select * from f_aplazamiento where numero_documento='$documento'")or die ("problema en el registro". mysqli_error());
	
	$reg=mysqli_fetch_array($consulta);
		
	// UPDATE `f_aplazamiento` SET `nombre` = 'juan davi', `apellidos` = 'ramire', `documento` = 'Tarjeta de Identida', `numero_documento` = '100738223', `grupo` = '2', `numero_ficha` = '143830', `trimestre` = '5', `jornada` = 'nocturn', `programa_formacion` = 'Ads', `sede` = 'colombi', `fecha` = '2018-04-15', `motivo` = ' \r\n gfsa dasfasdfasdf' WHERE `f_aplazamiento`.`numero_documento` = '1007382235';
	



include("../html/banner1.php");
?>

<?php
if ($_SESSION['roles']=='Apoyo Administrativo') 
{
	include('../html/menu_apoyo.php');
}

else
{

echo '<nav class="navbar navbar-expand-lg ">
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

<h1 align="center" >APLAZAMIENTO</h1>

	<div class="container-fluid">
		<div class="row">
			<div class="col">
				
				<table class="table table-bordered table-striped table-hover table-reponsive">
					
					<thead class="thead-default">

						<th>Nombres</th>
						<th>apellidos</th>
						<th>tipo documento</th>
						<th>numero documento</th>
						<th>grupo</th>
						<th>ficha</th>
						<th>Trimestre</th>
						<th>jornada</th>
						<th>programa</th>
						<th>sede</th>
						<th>Fecha novedad</th>
						<th>motivo</th>
						<th>opciones</th>
					</thead>

					
					
					<tr class=" bg-info">
                     <form action="editar.php" method="post">
						<td><input class="ed"  type="text" name="nombres" value="<?php echo $reg['nombre']; ?>"></td>
						<td><input class="ed"  type="text" name="apellidos" value="<?php echo $reg['apellidos']; ?>"></td>
						<td> <input class="ed"  type="text" name="tdocumento" value="<?php echo $reg['documento']; ?>"></td>
	                         <!--evento para solo numeros-->
						<td><input onkeypress='return event.charCode >= 48 && event.charCode <= 57'
						 class="ed"  type="text" name="documento" value="<?php echo $reg['numero_documento']; ?>"></td>

						<td><input class="ed"  type="text" name="grupo" value="<?php echo $reg['grupo']; ?>"></td>
						
                           <!--evento para solo numeros-->
						<td><input onkeypress='return event.charCode >= 48 && event.charCode <= 57'
						 class="ed"  type="text" name="ficha" value="<?php echo $reg['numero_ficha']; ?>"></td>
						<td><input class="ed"  type="text" name="trimestre" value="<?php echo $reg['trimestre']; ?>"></td>
						<td><input  class="ed" type="text" name="jornada" value="<?php echo $reg['jornada']; ?>"></td>
						<td><input class="ed"  type="text" name="programa" value="<?php echo $reg['programa_formacion']; ?>"></td>
						<td><input class="ed"  type="text" name="sede" value="<?php echo $reg['sede']; ?>"></td>
						<td><input class="ed"  type="text" name="fecha" value="<?php echo $reg['fecha']; ?>"></td>
						<td><input class="ed"  type="text" name="motivo" value="<?php echo $reg['motivo']; ?>"></td>
						<td><input class="sm" type="submit" name="enviar" value="continuar"> </td>
						<input  type="hidden" name="valor" value="<?php echo $documento; ?>">

						</form>
						

						
					<?php	mysqli_close($conexion); ?>
				</tr>
						
									
					
					
				</table>
				<br><br>

			</div>
			
		</div>
		
	</div>

	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/evento.js"> </script>
</body>
</html>