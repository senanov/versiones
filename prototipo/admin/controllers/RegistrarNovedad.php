<?php

class RegistrarNovedad
{
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
			echo "el registro fue exitoso";
			}

			else
			{
				echo "error en el registro";
			}
		}
	}
}


?>