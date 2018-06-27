<?php

class RegistrarNovedad
{   
    
   #llamada de programas tecnicos
   #--------------------------------------

	public function tecnicosController()
	{

		$respuesta = RegistroNovedades::tecnicosModel('programas_tecnicos');

		foreach ($respuesta as $fila => $programa) {
			$tecnico=$programa['p_tecnicos'];
			echo"<option value='$tecnico'>".$programa['p_tecnicos'].'</option>';
		}


	}

	#llamada de programas tecnologicos
    #--------------------------------------
	public function tecnologosController()
	{

		$respuesta = RegistroNovedades::tecnologosModel('programas_tecnologicos');

		foreach ($respuesta as $fila => $programa) {
			$tecnologo=$programa['p_tecnologicos'];
			echo"<option value='$tecnologo'>".$programa['p_tecnologicos'].'</option>';
		}


	}

	#llamada de programas especializaciones
    #--------------------------------------
	public function especializacionController()
	{

		$respuesta = RegistroNovedades::especializacionModel('especializaciones');

		foreach ($respuesta as $fila => $programa) {
			$especializacion=$programa['especializacion'];
			echo"<option value='$especializacion'>".$programa['especializacion'].'</option>';
		}
	}

	#----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	#Registro del reingreso
	#--------------------------------------
	public function reingresoController()
	{
		if (isset($_POST ["nom_reingreso"])) 
		{
			$datos = array('nombre' => $_POST ["nom_reingreso"],'apellido' => $_POST ["apellidos"],
			'tdocumento' => $_POST ["tdocumento"],'documento' => $_POST ["documento"],
			'grupo' => $_POST ["grupo"],'ficha' => $_POST ["ficha"],
			'trimestre' => $_POST ["trimestre"],'jornada' => $_POST ["jornada"],
			'programa' => $_POST ["programa"],'sede' => $_POST ["sede"],
			'fecha' => $_POST ["fecha"]);

			$respuesta=RegistroNovedades::reingresoModels($datos,'f_reingreso');

			if ($respuesta=="exito") 
			{
			echo  '<br><div class="alert alert-success alert-dismissible">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Exito!</strong>El registro se realizo correctamente <a href="index.php?action=reingreso&id='. $_POST ["documento"].'"><input id="ip" type="button" value="Ver registro"></a>
		    </div>';
			}

			else
			{
				  echo '<div class="alert alert-danger alert-dismissible">
	              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	              <strong>Error:</strong>Este aprendiz ya presenta esta novedad</div><br>';
			}
		}
	}

	#Registro del cambio de jornada
	#--------------------------------------
	public function cambioJornadaController()
	{
      if (isset($_POST ["nom_cambio"])) 
		{
			$datos = array('nombre' => $_POST ["nom_cambio"],'apellido' => $_POST ["apellidos"],
			'tdocumento' => $_POST ["tdocumento"],'documento' => $_POST ["documento"],
			'grupo' => $_POST ["grupo"],'ficha' => $_POST ["ficha"],
			'trimestre' => $_POST ["trimestre"],'jornada' => $_POST ["jornada"],
			'programa' => $_POST ["programa"],'sede' => $_POST ["sede"],
			'fecha' => $_POST ["fecha"],'motivo' => $_POST ["motivo"]);

			$respuesta=RegistroNovedades::cambioJornadaModel($datos,'f_c_jornada');

			if ($respuesta=="exito") 
			{
			echo '<br><div class="alert alert-success alert-dismissible">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Exito!</strong>El registro se realizo correctamente <a href="index.php?action=cambio_jornada&id='. $_POST ["documento"].'"><input id="ip" type="button" value="Ver registro"></a>
		    </div>';
			}

			else
			{
				echo '<div class="alert alert-danger alert-dismissible">
	              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	              <strong>Error:</strong>Este aprendiz ya presenta esta novedad</div><br>';
			}
		}
	}

	#Registro traslado
	#--------------------------------------
	public function trasladoController()
	{
      if (isset($_POST ["nom_traslado"])) 
		{
			$datos = array('nombre' => $_POST ["nom_traslado"],'apellido' => $_POST ["apellidos"],
			'tdocumento' => $_POST ["tdocumento"],'documento' => $_POST ["documento"],
			'grupo' => $_POST ["grupo"],'ficha' => $_POST ["ficha"],
			'trimestre' => $_POST ["trimestre"],'jornada' => $_POST ["jornada"],
			'centroa' => $_POST["centroa"],'centron' => $_POST["centron"],
			'ciudada' => $_POST["ciudada"],'ciudadn' => $_POST["ciudadn"],
			'programa' => $_POST ["programa"],'fecha' => $_POST ["fecha"],
			'motivo' => $_POST ["motivo"]);

			$respuesta=RegistroNovedades::trasladoModel($datos,'f_traslado');

			if ($respuesta=="exito") 
			{
			echo '<br><div class="alert alert-success alert-dismissible">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Exito!</strong>El registro se realizo correctamente <a href="index.php?action=traslado&id='. $_POST ["documento"].'"><input id="ip" type="button" value="Ver registro"></a>
		    </div>';
			}

			else
			{
				echo '<div class="alert alert-danger alert-dismissible">
	              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	              <strong>Error:</strong>Este aprendiz ya presenta esta novedad</div><br>';
			}
		}
	}

	#Registro retiro
	#--------------------------------------
	public function retiroController()
	{
      if (isset($_POST ["nom_retiro"])) 
		{
			$datos = array('nombre' => $_POST ["nom_retiro"],'apellido' => $_POST ["apellidos"],
			'tdocumento' => $_POST ["tdocumento"],'documento' => $_POST ["documento"],
			'grupo' => $_POST ["grupo"],'ficha' => $_POST ["ficha"],
			'trimestre' => $_POST ["trimestre"],'jornada' => $_POST ["jornada"],
			'programa' => $_POST ["programa"],'sede' => $_POST ["sede"],
			'fecha' => $_POST ["fecha"],'motivo' => $_POST ["motivo"]);

			$respuesta=RegistroNovedades::retiroModel($datos,'f_retiro');

			if ($respuesta=="exito") 
			{
			echo '<br><div class="alert alert-success alert-dismissible">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Exito!</strong>El registro se realizo correctamente <a href="index.php?action=retiro&id='. $_POST ["documento"].'"><input id="ip" type="button" value="Ver registro"></a>
		    </div>';
			}

			else
			{
				echo '<div class="alert alert-danger alert-dismissible">
	              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	              <strong>Error:</strong>Este aprendiz ya presenta esta novedad</div><br>';
			}
		}
	}

	#Registro aplazamiento
	#--------------------------------------
	public function aplazamientoController()
	{
      if (isset($_POST ["nom_aplazamiento"])) 
		{
			$datos = array('nombre' => $_POST ["nom_aplazamiento"],'apellido' => $_POST ["apellidos"],
			'tdocumento' => $_POST ["tdocumento"],'documento' => $_POST ["documento"],
			'grupo' => $_POST ["grupo"],'ficha' => $_POST ["ficha"],
			'trimestre' => $_POST ["trimestre"],'jornada' => $_POST ["jornada"],
			'programa' => $_POST ["programa"],'sede' => $_POST ["sede"],
			'fecha' => $_POST ["fecha"],'motivo' => $_POST ["motivo"]);

			$respuesta=RegistroNovedades::aplazamientoModel($datos,'f_aplazamiento');

			if ($respuesta=="exito") 
			{
			echo '<br><div class="alert alert-success alert-dismissible">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Exito!</strong>El registro se realizo correctamente <a href="index.php?action=aplazamiento&id='. $_POST ["documento"].'"><input id="ip" type="button" value="Ver registro"></a>
		    </div>';
			}

			else
			{
				echo '<div class="alert alert-danger alert-dismissible">
	              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	              <strong>Error:</strong>Este aprendiz ya presenta esta novedad</div><br>';
			}
		}
	}

	#Registro desercion
	#--------------------------------------
	public function desercionController()
	{
      if (isset($_POST ["nom_desercion"])) 
		{
			$datos = array('nombre' => $_POST ["nom_desercion"],'apellido' => $_POST ["apellidos"],
			'tdocumento' => $_POST ["tdocumento"],'documento' => $_POST ["documento"],
			'grupo' => $_POST ["grupo"],'ficha' => $_POST ["ficha"],
			'trimestre' => $_POST ["trimestre"],'jornada' => $_POST ["jornada"],
			'programa' => $_POST ["programa"],'sede' => $_POST ["sede"],
			'fecha' => $_POST ["fecha"]);

			$respuesta=RegistroNovedades::desercionModel($datos,'f_desercion');

			if ($respuesta=="exito") 
			{
			echo '<br><div class="alert alert-success alert-dismissible">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Exito!</strong>El registro se realizo correctamente <a href="index.php?action=desercion&id='. $_POST ["documento"].'"><input id="ip" type="button" value="Ver registro"></a>
		    </div>';
			}

			else
			{
				echo '<div class="alert alert-danger alert-dismissible">
	              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	              <strong>Error:</strong>Este aprendiz ya presenta esta novedad</div><br>';
			}
		}
	}

}


?>