<?php
require_once "../app/views/inc/header.php";
require_once "../app/views/inc/menu.php";
require_once "../app/views/inc/social.php";
?>



<section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">

                <span class="fa fa-user-circle"></span>
                <h2>Registrate</h2>
            </section>
            <section class="info_items">
                 <p>SENANOV</p>
            </section>
            <p id="aviso"></p>
   <?php

if (isset($datos["mensaje"])) {
    echo '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Aviso:</strong>  ' . $datos["mensaje"] . '
                </div><br>';
}
?>
        </section>

        <form action=""  class="form_contact"  method="post" onsubmit = "return validarform();" >
            <h2>Información Personal</h2>
            <div class="user_info">
                <label for="primer_nombre">Primer nombre *</label>
                <input type="text" name="primer_nombre" id="primer_nombre" required>

                <label for="segundo_nombre">Segundo nombre </label>
                <input type="text" name="segundo_nombre" id="segundo_nombre" >

                <label for="primer_apellido">Primer apellido *</label>
                <input type="text" name="primer_apellido" id="primer_apellido" required>

                <label for="segundo_apellido">Segundo apellido </label>
                <input type="text" name="segundo_apellido" id="segundo_apellido">

                <label for="tdocumento">Tipo de documento </label>
                <select  name="tdocumento" id="tdocumento" required >
                <option value selected disabled>Seleccione</option>
                <option value="1">Cédula de Ciudadanía</option>
                <option value="2">Tarjeta de Identidad</option>
                <option value="3">Cédula de Extranjeria</option>
                <option value="4">Pasaporte</option>                
                </select>                
                <label for="ndocumento">Número documento * </label>
                <input type="text" name="ndocumento" id="ndocumento" minlength="8" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required maxlength="11" >
                <input type="hidden" name="ndocumento1" id="ndocumento1" disabled >
                <label for="correo">Correo eléctronicos *</label>
                <input type="email" name="correo" id="correo"  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required >

                <label for="con">Contraseña *</label>
                <input type="password" name="contra" id="con"   required>

                <label for="cd1">Confirmar contraseña *</label>
                <input type="password" name="contra1" id="con1"  required>
                <center><label for="terminos">Acepto los términos*</label></center>
            <input type="checkbox" name="terminos" id="terminos"/>
            <center><button type="button" class="terminos" data-toggle="modal" data-target="#ter">Términos y condiciones</button></center>
                <input type="submit" value="Registrarse" id="btnSend">
                <p class="link">¿ya tienes una cuenta? <a href="index.php">Ingresa </a></p>
            </div>

        </form>

</section>

<div class="container">
    <!-- Modal -->
  <div class="modal fade" id="ter" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title"><center>Términos y condiciones</center></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
          <p>Mediante las directrices de seguridad, términos de uso del servicio y de tratamiento de la información se busca garantizar la adecuada protección de los datos de nuestros usuarios, Esta información registrada en el aplicativo se realiza dentro de los términos y condiciones establecidas y el uso de los servicios implica la aceptación por parte de los usuarios.
La aceptación de los términos de uso y la política de confidencialidad de los servicios de la plataforma Senanov lo hace responsable en relación con:<br>

•   La información que registra es verídica, real y corresponde a sus datos personales.<br>
•   El usuario y la contraseña asignados son de carácter intransferible, personal y modificable únicamente por su titular<br>
•   La suplantación o ingreso de información falsa constituye un fraude el cual implica sanciones e inhabilidades.<br>
•   Es responsabilidad del usuario mantener la información actualizada: Tipo y número de identificación, nombres y apellidos,<br> dirección de residencia, números de teléfono de contacto y correo electrónico.<br>
•   Como usuario hará buen uso de la información a la que tenga acceso.<br>

AUTORIZACIÓN Y CONSENTIMIENTO PARA EL TRATAMIENTO DE DATOS PERSONALES<br>

Senanov,se permite informar que en cumplimiento de la Ley Estatutaria 1581 del 2012, por la cual se estable el ‘Régimen General de Protección de Datos’ y el Decreto Reglamentario 1377 del 2013”, demanda respetuosamente su autorización para que de manera libre, previa, clara, expresa, voluntaria y debidamente informada permita a la Entidad recolectar, recaudar, almacenar, usar, procesar, compilar, intercambiar con otras Entidades Públicas, dar tratamiento, actualizar y disponer de los datos que serán suministrados y que se incorporen en nuestras bases de datos. Esta información es y será utilizada en el desarrollo de las funciones propias de la Entidad Sena.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
    function validarform(){

        var terminos, nombre, apellido, tdocumento, correo, con, con1, documento, expresion;

    terminos =  document.getElementById("terminos").checked;
    nombre = document.getElementById("primer_nombre").value;
    apellido = document.getElementById("primer_apellido").value;
    tdocumento = document.getElementById("tdocumento").value;
    correo = document.getElementById("correo").value;
    con = document.getElementById("con").value;
    con1 = document.getElementById("con1").value;
    documento = document.getElementById("ndocumento").value;
    expresion = /\w+@\w+\.+[a-z]/;

    if(!terminos){

        swal("No se Completo el Registro Porfavor Acepte Téminos y condiciones");
        return false;

        }

        if(documento == ""){

         swal("No se Completo el Campo del Documento");
        return false;

        }

        if (documento.length>12) {
             swal("El Numero de Documento es Muy Largo");
        return false;

        }

        if (nombre == "" || apellido == "" || tdocumento == "" || correo == "" || con == "" || con1 == "") {
             swal("Por Favor Complete los Campos Obligatorios");
             return false;
        }

        if (con != con1 ) {

             swal("Las Contraseñas no Coinciden ");
            return false;
        }

        if (!expresion.test(correo)) {

             swal("Por Favor Indique un Correo Valido");
            return false;
        }


    }

</script>


<?php
require_once "../app/views/inc/footer.php";
?>