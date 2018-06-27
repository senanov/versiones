<?php
class EnlacesPaginas
{
	public static function enlacesModel($enlaces)
	{   
		#carpeta formularios
        #-----------------------------------
		if($enlaces == "form_reingreso" || $enlaces == "form_cam_jor" || $enlaces == "form_traslado"
			|| $enlaces == "form_retiro"|| $enlaces == "form_aplazamiento" || $enlaces == "form_desercion")
		{
			$modulo="views/modulos/formularios/" . $enlaces . ".php"; 
		}
        
        #carpeta consultas
        #-----------------------------------
		elseif($enlaces == "aplazamiento" || $enlaces == "desercion" || $enlaces == "cambio_jornada"
			|| $enlaces == "traslado" || $enlaces == "retiro" || $enlaces == "reingreso"||$enlaces == "consultaGeneral"|| $enlaces == "consultaUsuarios"|| $enlaces == "programas" || $enlaces == "tablaProgramas"||$enlaces == "perfil") 
		{
			$modulo="views/modulos/consultas/" . $enlaces . ".php"; 
		}
        #carpeta editar
        #-----------------------------------
		elseif($enlaces == "edReingreso"||$enlaces == "edCambio_jornada"||
	           $enlaces == "edTraslado"||$enlaces == "edRetiro"||
	           $enlaces == "edAplazamiento"||$enlaces == "edDesercion"||
	           $enlaces == "edUsuarios" ||$enlaces == "edPrograma"||$enlaces == "edPerfil") 
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