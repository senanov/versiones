<?php
class EnlacesPaginas
{
	public static function enlacesModel($enlaces)
	{
		if($enlaces == "aplazamiento" || $enlaces == "desercion" || $enlaces == "cambio_jornada"
			|| $enlaces == "traslado" || $enlaces == "retiro" || $enlaces == "reingreso") 
		{
			$modulo="views/modulos/consultas/" . $enlaces . ".php"; 
		}

		elseif($enlaces == "index") 
		{
			$modulo="views/modulos/slider.php";
		}

		elseif($enlaces == "salir") 
		{
			$modulo="views/modulos/" . $enlaces . ".php";
		}

		else
		{
			$modulo="views/modulos/slider.php";
		}
		return $modulo;
	}
}


?>