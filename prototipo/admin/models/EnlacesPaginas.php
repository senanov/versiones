<?php
class EnlacesPaginas
{
	public static function enlacesModel($enlaces)
	{   
		#carpeta formularios
        #-----------------------------------
		if($enlaces == "form_reingreso" || $enlaces == "form_cam_jor" || $enlaces == "form_traslado"
			|| $enlaces == "form_retiro"|| $enlaces == "form_aplazamiento" || $enlaces == "form_desercion" || $enlaces == "form_fichas")
		{
			$modulo="views/modulos/formularios/" . $enlaces . ".php"; 
		}
        
        #carpeta consultas
        #-----------------------------------
		elseif($enlaces == "consulta_novedades" ||$enlaces == "consultaGeneral"|| $enlaces == "consultaUsuarios"|| $enlaces == "programas" || $enlaces == "tablaProgramas"|| $enlaces == "tablaFichas" || $enlaces == "perfil") 
		{
			$modulo="views/modulos/consultas/" . $enlaces . ".php"; 
		}
        #carpeta editar
        #-----------------------------------
		elseif($enlaces == "edNovedades" || $enlaces == "edUsuarios" ||$enlaces == "edPrograma" || $enlaces == "edFicha" ||$enlaces == "edPerfil") 
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