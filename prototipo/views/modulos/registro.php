

<br><br>

<h1 id="h1">Formulario de registro</h1>
<form id="form1" name="form1" method="post" class="form"> 

<h2 class="titulo">Create Una Cuenta</h2> 

<div class="registro">

  
    <input id="input" type="text" name="nombres" id="nombres" placeholder="Nombres" class="input50" required />

    
    <input id="input" type="text" name="apellidos" id="apellidos" placeholder="Apellidos" class="input50" required/>


        
        <input id="input" type="email" name="correo" id="correo" placeholder="correo " class="input100" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" />
   
    
    <select id="select" name="tdocumento" id="td" >
      <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
      <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
      <option value="Cédula de Extranjeria">Cédula de Extranjeria</option>
      <option value="Pasaporte">Pasaporte</option>
  </select>


    
   
     
      
        <input id="input" type="text" name="ndocumento" id="ndocumento" placeholder="N. Documeno " class="input50" required  minlength="8" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
      


    
      
   
      
        <input id="input" type="password" name="contra" id="con" placeholder="Contraseña " class="input50" required/>

           
      
        <input id="input" type="password" name="contra1" id="cd1" placeholder="Confirmar Contraseña " class="input50"  required/>
      
      <?php
      if (isset($_SESSION['error'])) 
      {
      if ($_SESSION['error']==1) 
      {
       echo '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Aviso:</strong>  Un usuario ya se encuentra registrado con este Numero de documento o Correo
            </div>';
            $_SESSION['error']=0;
      }
    }
     

     if (isset($_SESSION['error'])) 
     {  
      if ($_SESSION['error']==2) 
      {
       echo '<div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Aviso:</strong>  Las contraseñas no Coinciden
            </div>';
            $_SESSION['error']=0; 
      }
    }

    ?>
    
    <input id="input" type="submit" name="Registrar" value="Registrar" class="enviar">

    <p class="link">¿ya tienes una cuenta? <a href="index.php">Ingresa </a></p>
    </div>

</form>


<?php

$registro = new MvcController();
$registro -> registroUsuarioController();
?>