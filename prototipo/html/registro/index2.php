<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro de Usuario</title>
<link rel="stylesheet" type="text/css" href="data1/estilos.css" />
<link rel="stylesheet" type="text/css" href="estilos.css" />

</head>

<body bgcolor="#CCCCCC">

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
      
      <font face="sans-serif" color="red" size="3" align="center">Un usuario ya se encuentra registrado con este Numero de documento o Correo</font>
    
    <input type="submit" name="Registrar" value="Registrar" class="enviar">

    <p class="link">¿ya tienes una cuenta? <a href="../../index.php">Ingresa </a></p>

    </div>
    
     
</form>
</body>
</html>