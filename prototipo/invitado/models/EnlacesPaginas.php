<?php
class EnlacesPaginas
{
	public static function enlacesModel($enlaces)
	{
		if($enlaces == "reingreso" || $enlaces == "cambio_de_jornada" || $enlaces == "traslado"
			|| $enlaces == "retiros" || $enlaces == "aplazamientos" || $enlaces == "deserciones")
		{
			$modulo="views/modulos/" . $enlaces . ".php"; 
		}

		elseif($enlaces == "index") 
		{
			$modulo="views/modulos/slider.php";
		}

		else
		{
			$modulo="views/modulos/slider.php";
		}
		return $modulo;
	}
}


?>