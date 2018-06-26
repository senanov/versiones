<?php
/**
* 
*/

class MvcController
{
	#llamada a plantilla
	
	public function plantilla (){



		include "views/plantilla.php";
	}


    #enlaces
    #---------------------------------------------
	public function enlacesPaginasController (){

    if (isset($_GET["enlace"])) {
    	$enlaces= $_GET["enlace"];
    }
	
	else{

		$enlaces= "index";
	}

	$respuesta =  EnlacesPaginas::enlacesPaginasModel($enlaces);
	include $respuesta;

	}


	#registro de usuarios
	#-------------------------------------------------------------
	public function registroUsuarioController(){


       if (isset($_POST["nombres"])) {
       
       
       $datos = array("ndocumento" => $_POST["ndocumento"],"tdocumento" => $_POST["tdocumento"],
                      "nombres" => $_POST["nombres"],"apellidos" => $_POST["apellidos"],
                      "contra" => $_POST["contra"],"correo" => $_POST["correo"],"rol" => "invidado");

       $respuesta = Datos::registroUsuarioModel($datos,"registro");
       if ($respuesta =="exito") {
    	   echo '<meta http-equiv="refresh" content="0; url=index.php?enlace=ok">';       	 
          }else{
           $_SESSION['error']=1;
     
          }

       }

	}
  #Consulta de usuarios
  #-------------------------------------------------------------
  public function consultaUsuarioController(){
    if (isset($_POST["consulta"])) {

       $consulta = $_POST["consulta"];

        $respuesta = Datos::consultaUsuarioModel($consulta,"registro");
      return"<h2>El usuario " . "<b><font color='#F80101'>  ".$respuesta["nombres"]."  ". $respuesta["apellidos"]."</font></b>". " ya se encuentra registrado en esta plataforma<br></h2>".

      '<a href="index.php?enlaces=restablecer"><button id="res">Restablecer Contraseña</button></a><br><br>';
      header("location:index.php?enlaces=consultar2");
     
    }else{

      echo "no se pudo hacer la consulta";
      header("location:index.php?enlaces=consultar2");

    }

   





  }




	#Ingreso de usuarios
	#-------------------------------------------------------------
	public function ingresoUsuarioController(){


       if (isset($_POST["usuario"])) {
       
       
       $datos = array("usuario" => $_POST["usuario"],"contrai" => $_POST["contrai"]);

       $respuesta = Datos::ingresoUsuarioModel($datos,"registro");
       
       if ($respuesta["documento_usuario"]==$_POST["usuario"] && $respuesta["contrasena"]==$_POST["contrai"]) 
         {
       	header("location:admin/index.php");
        
        }else{
        	          
          header("location:index.php?enlace=slider");          
        }

	 }
  }

}


?>