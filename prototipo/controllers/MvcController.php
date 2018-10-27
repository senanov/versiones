<?php
/**
* 
*/
session_start();
class MvcController
{
	#llamada a plantilla
	#-----------------------------------------------
	public function plantilla()
  {
		include "views/plantilla.php";
	}


  #enlaces
  #---------------------------------------------
	public function enlacesPaginasController()
  {
    if (isset($_GET["enlace"]))
     {
    	$enlaces= $_GET["enlace"];
     }
	
	   else
     {
		    $enlaces= "slider";
	   }

	   $respuesta =  Enlaces::enlacesPaginasModel($enlaces);
	   include $respuesta;
  }


	#registro de usuarios
	#-------------------------------------------------------------
	public function registroUsuarioController()
  {
       if (isset($_POST["primer_nombre"]))
       {
         $encriptar = crypt($_POST["contra"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

          $datos = array("ndocumento" => strip_tags($_POST["ndocumento"]),"tdocumento" => strip_tags($_POST["tdocumento"]),
                      "primer_nombre" => strip_tags($_POST["primer_nombre"]),"segundo_nombre" => strip_tags($_POST["segundo_nombre"]),"primer_apellido" => strip_tags($_POST["primer_apellido"]),"segundo_apellido" => strip_tags($_POST["segundo_apellido"]),
                      "contra" => strip_tags($encriptar),"contra1" => strip_tags($_POST["contra1"]),"correo" => strip_tags($_POST["correo"]),"rol" => "3", "estado" => "1");

          if (strip_tags($_POST["contra"])!=strip_tags($_POST["contra1"]))
          {
              echo '<div class="alert alert-danger alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Aviso:</strong>  Las contraseñas no Coinciden
              </div><br>';
          }

          else
          {
          #funcion que valida si el usuario ya esta registrado 
          #-------------------------------------------------------------
            $validar = Datos::validarUsuarioModel($datos,"usuario");

              if ($validar==false)
              {
                $respuesta = Datos::registroUsuarioModel($datos,"usuario");
                if ($respuesta=="exito") 
                {
                  echo '<meta http-equiv="refresh" content="0; url=ok">';
                }

                else
                {
                  echo '<div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Aviso:</strong>  No se pudo registrar el usuario
                  </div><br>';
                }
                
              }

              else
              {
                echo '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Aviso:</strong>  Un usuario ya se encuentra registrado con este Numero de documento o Correo
                </div><br>';
              }
          }
        }
	}

  #Consulta de usuarios
  #-------------------------------------------------------------
  public function consultaUsuarioController()
  {
    if (isset($_POST["consulta"])) 
    {
       $consulta = strip_tags($_POST["consulta"]);
       $respuesta = Datos::consultaUsuarioModel($consulta,"usuario");
      
      if ($respuesta["documento_usuario"]==$_POST["consulta"])
      {
         echo  '<div class="alert alert-success alert-dismissible">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <strong>Exito! </strong>El usuario '.$respuesta["primer_nombre"].'  '.$respuesta["segundo_nombre"].'  '.$respuesta["primer_apellido"].'  '.$respuesta["segundo_apellido"].' ya esta registrado en esta plataforma   
         </div>';
      }

      else
      {
        echo '<div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Aviso:</strong> El usuario con el numero de documento ' .$_POST["consulta"].' no se encuentra registrado en la plataforma
        </div>';    
       }
    }
  }




	#Ingreso de usuarios
	#-------------------------------------------------------------
	public function ingresoUsuarioController()
  {
       if (isset($_POST["usuario"]))
       {
          $encriptar = crypt(strip_tags($_POST["contrai"]), '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
          
          $datos = array("usuario" => strip_tags($_POST["usuario"]),"contrai" => strip_tags($encriptar));
          $respuesta = Datos::ingresoUsuarioModel($datos,"usuario");
       
          if ($respuesta["documento_usuario"]==$_POST["usuario"] && $respuesta["contrasena"]==$encriptar && $respuesta["estado"]==1) 
          {
             $nombre = $respuesta["primer_nombre"]." ".$respuesta["segundo_nombre"];
             $apellido = $respuesta["primer_apellido"]." ".$respuesta["segundo_apellido"];

             $_SESSION["ingreso"]=1;
             $_SESSION["nombre"]=$nombre;
             $_SESSION["apellido"]=$apellido;
             $_SESSION["docPerfil"]=$respuesta["documento_usuario"];
             $_SESSION["rol"]=$respuesta["tipo_rol"];

             if ($respuesta["rol"]=="1") 
             {
               header("location:admin/index.php");
             }

             if ($respuesta["rol"]=="2") 
             {
               header("location:apoyo/index.php");
             }

             if ($respuesta["rol"]=="3")
             {
              header("location:invitado/index.php");
             }
       	     
          }

          else
          {
             $_SESSION["login"]=1; 
        	   header("location:index.php?enlace=slider");
          }

	     }
  }

  #enviar correo 
  #--------------------------------------------------------------
  public function restablecerContrasenaController()
  {
    $mensaje='ingrese al siguiente link para restablecer clave "http://localhost:8082/prototipo3.5/restablecer_contrasena"';
    $asunto='Restablecimiento de clave SENANOV';
    $cabecera='from:senanov2018@gmail.com'.phpversion();


    if (isset($_POST["envio_email"]))
    {
      $envio_email=strip_tags($_POST["envio_email"]);
      $_SESSION["correo"]=$envio_email;
      $respuesta = Datos::restablecerContrasenaModel($envio_email,"usuario");

      if ($respuesta["correo"]==$_POST['envio_email']) 
      {
        if(mail($envio_email,$asunto,$mensaje,$cabecera))
        {
            echo '<div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Exito!</strong>El correo se ha enviado exitosamente</div>';
        }    
      }

      else
      {
        echo '<div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error:</strong>El correo ingresado ' .$_POST["envio_email"]. ' no se encuentra registrado en la plataforma</div>';
      }
    }
  }

  #Cambio de contraseña 
  #--------------------------------------------------------------
  public function cambioContrasenaController()
  {
    if (isset($_POST["cambioContrasena1"])) 
    {
      $encriptar = crypt(strip_tags($_POST["cambioContrasena"]), '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

      if ($_POST["cambioContrasena"]==$_POST["cambioContrasena1"]) 
      {
        $cambiar=$encriptar;
        $respuesta = Datos::cambioContrasenaModel($cambiar,"usuario",$_SESSION["correo"]);
        

        if ($respuesta=="0") 
        {

           $_SESSION["correo"]=1;
           echo '<meta http-equiv="refresh" content="0; url=index.php">';
        }

        else
        {
            echo '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error:</strong>No se puede cambiar la contraseña</div>';
        }
        
      }

      else
      {
        echo '<div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error:</strong>Las contraseñas no coinciden</div>';
      }
    }
  }
          

}#clase

?>