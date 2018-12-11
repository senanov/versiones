<?php
require_once "../app/views/usuario/inc/header.php";
require_once "../app/views/usuario/inc/banner.php";

if ($_SESSION["rol"] == 1 || $_SESSION["rol"] == 0 ) {
    require_once "../app/views/usuario/inc/menuAdmin.php";
} else if ($_SESSION["rol"] == 2) {
    require_once "../app/views/usuario/inc/menuApoyo.php";
} else {
    require_once "../app/views/usuario/inc/menuInvitado.php";
}

?>

<div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" action="" onsubmit="return programa();" method="post"   >
        
        <span class="contact100-form-title">
          Datos del Programa Formativo
        </span> 

        <label class="label-input100" for="tprograma">Seleccione el tipo de programa</label>
        <div class="wrap-input100">
          <select class="input100" name="tprograma" id="tprograma"   required>
             <option  value selected disabled >Seleccione</option>
             <option value="1">PROGRAMA TÉCNICO</option>
             <option value="2">PROGRAMA TECNOLÓGICO</option>
             <option value="3">ESPECIALIZACIONES</option>
           </select>
          <span class="focus-input100"></span>
        </div>      

        <label class="label-input100" for="programa">Nombre Completo del Programa de Formación</label>
        <div class="wrap-input100">
          <input  class="input100" type="text" name="programa" id="programa" placeholder="Agregar programa" required style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" onkeypress="return soloLetras(event)" />
          <span class="focus-input100"></span>
        </div>

        

        <div class="container-contact100-form-btn">
          
          <input class="contact100-form-btn" type="submit" name="registrar" value="REGISTRAR PROGRAMA">  
          
        </div>
        
      </form>

      <div class="contact100-more flex-col-c-m" style="background-image: url('../img/bg-01.jpg');">
        <div class="flex-w size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-map-marker"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Añadir Programas de formación
            </span>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              Senanov
            </span>
          </div>
        </div>

        <div class="dis-flex size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-phone-handset"></span>
          </div>

          <div class="flex-col size2">
            <span class="txt1 p-b-20">
              <i class="fas fa-folder"> </i> Registro de Programa
            </span>
          </div>  
          <?php
if (isset($datos['aviso'])) {
  echo '<div class="alert alert-'.$datos["alert"].' alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>aviso! </strong> '.$datos['aviso'].'</div>';
}
?>  

<center><a href="<?php echo RUTA_URL; ?>/programa/consultarPrograma"><input type="button" class="form-control btn btn-principal" value="Ver Programas"></a></center>
        </div>

        <div class="dis-flex size1 p-b-47">
          <div class="txt1 p-r-25">
            <span class="lnr lnr-envelope"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



  <div id="dropDownSelect1"><center></center></div>

<?php 
require_once "../app/views/inc/footer.php";
?>