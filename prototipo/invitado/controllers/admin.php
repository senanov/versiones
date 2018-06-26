<?php
class Invitado
{
	public function plantilla()
	{
		include "views/plantilla.php";
	}

	public function enlacesController()
	{
		 if (isset($_GET["action"])) 
		 {
    		$enlaces = $_GET["action"];
    	 }
	
		 else
		 {
			$enlaces="index";
		 }

		$respuesta =  EnlacesPaginas::enlacesModel($enlaces);
		include $respuesta;
	}

}

?>