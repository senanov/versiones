<?php
class EnlacesPaginas
{
	public static function enlacesModel($enlaces)
	{
		if($enlaces == "form_reingreso" || $enlaces == "form_cam_jor" || $enlaces == "form_traslado"
			|| $enlaces == "form_retiro" || $enlaces == "form_aplazamiento" || $enlaces == "form_desercion")
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