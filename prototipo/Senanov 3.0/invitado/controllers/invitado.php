<?php
session_start();
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

	public function seguridad()
	{
		if ($_SESSION["ingreso"]!="1")
		{
   			header("location: ../index");	
		}		
	}

	public function cerrarSesion()
	{
		$_SESSION["ingreso"]=0;
		echo '<meta http-equiv="refresh" content="0; url=index.php">';
	}

	public function nombreUsuario()
	{
		echo $_SESSION["nombre"]." ".$_SESSION["apellido"]."<br><center>". $_SESSION["rol"]."</center>";
	}


}

