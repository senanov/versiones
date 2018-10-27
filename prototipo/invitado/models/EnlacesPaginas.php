<?php
class EnlacesPaginas
{
	public static function enlacesModel($enlaces)
	{   
		#carpeta consultas
        #-----------------------------------
		if($enlaces == "consulta_novedades" || $enlaces == "perfil") 
		{
			$modulo="views/modulos/consultas/" . $enlaces . ".php"; 
		}

		elseif($enlaces == "edPerfil") 
		{
			$modulo="views/modulos/editar/" . $enlaces . ".php"; 
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