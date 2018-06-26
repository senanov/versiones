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

$documento=$_SESSION['documento'];

$conexion=mysqli_connect("127.0.0.1","root","","proyecto") or die ("problemas en la conexion");

	 $consulta=mysqli_query($conexion,"select * from f_retiro where numero_documento='$documento'")or die ("problema en el registro". mysqli_error());
	
	$reg=mysqli_fetch_array($consulta);
		

include("../html/banner1.php");
?>

<?php
if ($_SESSION['roles']=='invitado')
{
	include('../html/menu_invitado.php');
}

elseif ($_SESSION['roles']=='Apoyo Administrativo') 
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

<h1 align="center">RETIRO</h1>

	<div class="container-fluid">

<?php 
                     if ($documento!=$reg['numero_documento'] ||$documento== "" ) {
                     	echo " <table class='table table-bordered table-striped table-hover table-reponsive'><tr bg-info ><td >No hay registros</td></</table>";
                     	echo '<form action="buscarr.php" method="post" >
							<h3>Buscar registro</h3>
							<input class="ar" type="search" name="doc" placeholder="numero documento">
							<input class="sm" type="submit" name="buscar" value="Buscar">	
						</form> 	';
                     	exit;

                     }

                     ?>

<div class="con row justify-content-around ">
					<div class="col-4 " >
						<form action="buscarr.php" method="post" >
							<h3>Buscar registro</h3>
							<input class="ar" type="search" name="doc" placeholder="numero documento">
							<input class="sm" type="submit" name="buscar" value="Buscar">	
						</form>	
					</div>

					<div class="col-4">
						<form action="filtrar_r.php" method="post" >
							<h3>Utilizar filtrar</h3>
							<select class="sl" name="filtro">
						<option value="nombre" >Nombres</option>
						<option value="apellidos" >apellidos</option>
						<option value="documento" >tipo documento</option>
						<option value="numero_documento" >numero documento</option>
						<option value="grupo" >grupo</option>
						<option value="numero_ficha" >ficha</option>
						<option value="trimestre" >Trimestre</option>
						<option value="jornada" >jornada</option>
						<option value="programa_formacion" >programa</option>
						<option value="sede" >sede</option>
						<option value="sede" >Fecha novedad</option>
						<option value="motivo" >motivo</option>
							</select>
							<input class="ar" type="search" name="palabra"  placeholder="Buscar">
							<input class="sm" type="submit" name="buscar" value="Buscar">	
						</form>	
					</div>

				</div>
				<br><br>


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
						<?php if ($_SESSION['roles']!='invitado') 
						{
						echo'<th>opciones</th>';
					    }
					    ?>
					</thead>

					
					
					<tr class=" bg-info">
                     
						<td><?php echo $reg['nombre']; ?></td>
						<td><?php echo $reg['apellidos']; ?></td>
						<td> <?php echo $reg['documento']; ?></td>
						<td><?php echo $reg['numero_documento']; ?></td>
						<td><?php echo $reg['grupo']; ?></td>
						<td><?php echo $reg['numero_ficha']; ?></td>
						<td><?php echo $reg['trimestre']; ?></td>
						<td><?php echo $reg['jornada']; ?></td>
						<td><?php echo $reg['programa_formacion']; ?></td>
						<td><?php echo $reg['sede']; ?></td>
						<td><?php echo $reg['fecha']; ?></td>
						<td><?php echo $reg['motivo']; ?></td>
						<?php
						if ($_SESSION['roles']!='invitado') 
						{
						echo'<td class="td"><a href="editar_retiro.php"><input id="ip" type="button" value="Editar"></a> | <a href="eliminarr.php"><input id="ipe" type="button" value="Eliminar"></a> </td>';
						}
						?>

						
					<?php	mysqli_close($conexion); ?>
				</tr>
						
									
					
					
				</table>
				<br><br>

			</div>
			
		</div>
		
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>