<?php
class Novedades
{

    public function tabla($respuesta){

return '<table class="table table-bordered table-striped table-hover table-reponsive">
					
					   <thead class="thead-dark">
												
						<tr class="bg-info"">
						<th>Nombres</th>
						<td>'.$respuesta["nombre"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Apellidos</th>
						<td>'.$respuesta["apellidos"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Tipo Documento</th>
						<td>'.$respuesta["documento"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Numero Documento</th>
						<td>'.$respuesta["numero_documento"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Grupo</th>
						<td>'.$respuesta["grupo"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Ficha</th>
						<td>'.$respuesta["numero_ficha"].'</td>
					    </tr>
					   
					    <tr class="bg-info">
						<th>Trimestre</th>
						<td>'.$respuesta["trimestre"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Jornada</th>
						<td>'.$respuesta["jornada"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Programa de Formación</th>
						<td>'.$respuesta["programa_formacion"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Sede</th>
						<td>'.$respuesta["sede"].'</td>
					    </tr>

					    <tr class="bg-info">
						<th>Fecha Novedad</th>
						<td>'.$respuesta["fecha"].'</td>
					    </tr>


						</thead>

                 		
					  </table>';





    }

	#Consulta reingreso
	#----------------------------------------------
	public function consultarReingresoController()
	{
		if (isset($_POST["docReingreso"])) 
		{
			$documento=$_POST["docReingreso"];
			$respuesta= CrudNovedades::consultarReingresoModel($documento,"f_reingreso");
			if ($respuesta["numero_documento"]==$_POST["docReingreso"]) 
			{

			$tabla = Novedades::tabla($respuesta);
			echo $tabla;
				
			}

			else 
			{
				echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El aprendiz no presenta esta novedad </div><br>';
			}	
		}
	}

	#Consulta cambio de jornada
	#----------------------------------------------
	public function consultarCambioController()
	{
		if (isset($_POST["docCambio"])) 
		{
			$documento=$_POST["docCambio"];
			$respuesta= CrudNovedades::consultarCambioModel($documento,"f_c_jornada");
			if ($respuesta["numero_documento"]==$_POST["docCambio"]) 
			{

			$tabla = Novedades::tabla($respuesta);
			echo $tabla;
				
			}

			else 
			{
				echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El aprendiz no presenta esta novedad </div><br>';
			}	
		}
	}

	#Consulta traslados
	#----------------------------------------------
	public function consultarTrasladoController()
	{
		if (isset($_POST["docTraslado"])) 
		{
			$documento=$_POST["docTraslado"];
			$respuesta= CrudNovedades::consultarTrasladoModel($documento,"f_traslado");
			if ($respuesta["numero_documento"]==$_POST["docTraslado"]) 
			{

			$tabla = Novedades::tabla($respuesta);
			echo $tabla;
				
			}

			else 
			{
				echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El aprendiz no presenta esta novedad </div><br>';
			}	
		}
	}

	#Consulta retiros
	#----------------------------------------------
	public function consultarRetiroController()
	{
		if (isset($_POST["docRetiro"])) 
		{
			$documento=$_POST["docRetiro"];
			$respuesta= CrudNovedades::consultarTrasladoModel($documento,"f_retiro");
			if ($respuesta["numero_documento"]==$_POST["docRetiro"]) 
			{

			$tabla = Novedades::tabla($respuesta);
			echo $tabla;
				
			}

			else 
			{
				echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El aprendiz no presenta esta novedad </div><br>';
			}	
		}
	}

	#Consulta aplazamiento
	#----------------------------------------------
	public function consultarAplazamientoController()
	{
		if (isset($_POST["docAplazamiento"])) 
		{
			$documento=$_POST["docAplazamiento"];
			$respuesta= CrudNovedades::consultarAplazamientoModel($documento,"f_aplazamiento");
			if ($respuesta["numero_documento"]==$_POST["docAplazamiento"]) 
			{

			$tabla = Novedades::tabla($respuesta);
			echo $tabla;
				
			}

			else 
			{
				echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El aprendiz no presenta esta novedad </div><br>';
			}	
		}
	}

	#Consulta desercion
	#----------------------------------------------
	public function consultarDesercionController()
	{
		if (isset($_POST["docDesercion"])) 
		{
			$documento=$_POST["docDesercion"];
			$respuesta= CrudNovedades::consultarDesercionModel($documento,"f_desercion");
			if ($respuesta["numero_documento"]==$_POST["docDesercion"]) 
			{

			$tabla = Novedades::tabla($respuesta);
			echo $tabla;
				
			}

			else 
			{
				echo '<div class="alert alert-danger alert-dismissible">
	            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	            <strong>Aviso:</strong> El aprendiz no presenta esta novedad </div><br>';
			}	
		}
	}



}

