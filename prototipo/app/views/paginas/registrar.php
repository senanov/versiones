<?php 
require_once "../app/views/inc/header.php";
require_once "../app/views/inc/menu.php";
require_once "../app/views/inc/social.php";
 ?>



<br><br>

<h1 id="h1">Formulario de registro</h1>
<form id="form1" name="form1" method="post" class="form"> 

<h2 class="titulo">Create Una Cuenta</h2> 

<div class="registro">

   <select id="select" name="tdocumento" id="td" >
      <option value="1">Cédula de Ciudadanía</option>
      <option value="2">Tarjeta de Identidad</option>
      <option value="3">Cédula de Extranjeria</option>
      <option value="4">Pasaporte</option>
  </select>
     
      
        <input type="text" name="ndocumento" id="ndocumento" placeholder="N. Documeno " class="input50" required  minlength="8" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>      
   

  
    <input id="input" type="text" name="primer_nombre" id="primer_nombre" placeholder="Primer Nombre" class="input50" required />

    <input id="input" type="text" name="segundo_nombre" id="segundo_nombre" placeholder="Segundo Nombre" class="input50" />

    <input id="input" type="text" name="primer_apellido" id="primer_apellido" placeholder="Primer Apellido" class="input50" required />
    
    <input id="input" type="text" name="segundo_apellido" id="segundo_apellido" placeholder="Segundo Apellido" class="input50"  />


        
        <input  type="email" name="correo" id="correo" placeholder="correo " class="input100" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" />
   
      
        <input id="input" type="password" name="contra" id="con" placeholder="Contraseña " class="input50" required/>
 
      
        <input id="input" type="password" name="contra1" id="cd1" placeholder="Confirmar Contraseña " class="input50"  required/>

    

        
   <p id="aviso"></p>
   <?php 

   if (isset($datos["mensaje"])) {
     echo '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Aviso:</strong>  '.$datos["mensaje"].'
                </div><br>';
   }
   


    ?>
    <br><input id="input" type="submit" name="Registrar" value="Registrar" class="enviar"></br>
   
    <p class="link">¿ya tienes una cuenta? <a href="index.php">Ingresa </a></p>
    </div>

</form>




<?php 
require_once "../app/views/inc/footer.php";
 ?>