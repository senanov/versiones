<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro de Usuario</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="estilos.css" />
<link rel="stylesheet" type="text/css" href="banner.css" />

</head>

<body bgcolor="#CCCCCC">

<div class="container-fluid"> 
    <div class="header row">
      <div class="animacion-izquierda col-12 col-sm-12 col-md-6 col-lg-3">
        
          <img src="logo.png" height="200">
          
        
        
      </div>
      <div class="animacion-centro col-12 col-sm-12 col-md-6 col-lg-6 ">
        <div class="texto ">
          <h1>SENANOV</h1>
          <hr>
          <p>Sistema de Información Especializado en la Gestión de Novedades en el CEET</p>
          <div class="btn "><a href="../../index.php">ingresar</a></div>
        </div>
      </div> 
      <div class="animacion-derecha col-12 col-sm-12 col-md-12 col-lg-3 ">
        <img src="ba.png" height="200">
      </div>
    </div>
  </div>

<br><br>

<h1>Formulario de registro</h1>
<form id="form1" name="form1" method="post" action="pdo.php" class="form"> 

<h2 class="titulo">Create Una Cuenta</h2> 

<div class="registro">

  
    <input type="text" name="nombres" id="nombres" placeholder="Nombres" class="input50" required />

    
    <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" class="input50" required/>


        
        <input type="email" name="correo" id="correo" placeholder="correo " class="input100" required />
   
    
    <select name="tdocumento" id="td" >
      <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
      <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
      <option value="Cédula de Extranjeria">Cédula de Extranjeria</option>
      <option value="Pasaporte">Pasaporte</option>
  </select>


    
   
     
      
        <input type="text" name="ndocumento" id="ndocumento" placeholder="N. Documeno " class="input50" required/>
      


    
      
   
      
        <input type="password" name="contra" id="con" placeholder="Contraseña " class="input50" required/>

           
      
        <input type="password" name="contra1" id="cd1" placeholder="Confirmar Contraseña " class="input50"  required/>
      
      
    
    <input type="submit" name="Registrar" value="Registrar" class="enviar">

    <p class="link">¿ya tienes una cuenta? <a href="../../index.php">Ingresa </a></p>
    </div>

        
</form>

<br><br>

<footer>
<img src="gsena.gif" width="150" height="102" />
Cristian Ortiz <br />
Mónica Díaz <br />
Daniel Acosta <br />
Felipe Pinzón <br />
Juan David Ramirez | SENANOV
</footer>
 
 <script src="js/jquery-3.3.1.min.js"> </script>
 <script src="js/bootstrap.min.js"> </script>

</body>
</html>