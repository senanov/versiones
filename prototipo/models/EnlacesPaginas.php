<?php

/**
* 
*/
class EnlacesPaginas
{
	// enlaces
	public static function enlacesPaginasModel ($enlaces){

		if (
	        $enlaces=="consultar"||
	        $enlaces=="pag_ayuda"||
	        $enlaces=="servicios"||
	        $enlaces=="registro"||
	        $enlaces=="restablecer"||
	        $enlaces=="consultar2") {

			$modulo =  "views/modulos/".$enlaces.".php";
			
		}
		else if($enlaces=="index"||$enlaces=="ok"){

			$modulo =  "views/modulos/slider.php";


		}



		else {

			$modulo =  "views/modulos/slider.php";


		}

		return $modulo;

	}
}


?>