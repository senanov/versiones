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
<br></br></br>
<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="" enctype="multipart/form-data" onsubmit="return validarFile();">
				<input type="hidden" name="id" value="2">
				<span class="contact100-form-title">
					Datos del Aprendiz
				</span>

				<label class="label-input100" for="nom1_reingreso">Ingresa los Nombres</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<input class="input100" type="text" placeholder="Primer Nombre *" name="nom1_reingreso" id="nom1_reingreso" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input">
					<input class="input100" type="text" placeholder="Segundo Nombre" name="nom2_reingreso" id="nom2_reingreso">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="apellido1">Ingresa los Apellidos</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<input class="input100" type="text" placeholder="Primer Apellido *" name="apellido1" id="apellido1" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" placeholder="Segundo Apellido" name="apellido2" id="apellido2">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="tdocumento">Tipo y Documento*</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<select name="tdocumento" class="input100" id="tdocumento" required>
					  <option selected disabled value>Seleccione</option>
				      <option value="1">Cédula de Ciudadanía</option>
				      <option value="2">Tarjeta de Identidad</option>
				      <option value="3">Cédula de Extranjeria</option>   
				  </select> 
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input">
					<input class="input100" type="text" placeholder="Numero de Documento *" name="documento" id="documento" minlength="8" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="ficha">Grupo y Ficha</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<input class="input100" type="text" placeholder="Grupo" name="grupo" id="grupo" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input">
					<select class="input100" name="ficha" id="ficha">
         				<option value disabled selected>Seleccione</option>

       					<?php
							foreach ($datos["ficha"] as $fila) {
    						echo "<option value=" . $fila->codigo_ficha . ">" . $fila->codigo_ficha . "</option>";
							}
						?>
             		</select>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="trimestreInput">Trimestre y Jornada</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<input class="input100" type="text" name="trimestre" disabled id="trimestreInput" placeholder="Trimestre">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input">
					<input class="input100" type="text" name="jornada" disabled id="jornadainput" placeholder="Jornada">
					<span class="focus-input100"></span>
				</div>								

				<label class="label-input100" for="programainput">Programa de Formación</label>
				<div class="wrap-input100">
					<input  class="input100" type="text" name="programa" disabled id="programainput" placeholder="Programa de Formación">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="sede">Sede</label>
				<div class="wrap-input100">
					<input class="input100" type="text" placeholder="Sede" name="sede" disabled id="sede">
					<span class="focus-input100"></span>
				</div>	

				<label class="label-input100" for="fecha">Fecha de la Novedad*</label>
				<div class="wrap-input100">
					<input class="input100" type="date" name="fecha" id="fecha" value="<?php  echo date('Y-d-m'); ?>" step="1" required>
					<span class="focus-input100"></span>
				</div>	

				<label class="label-input100" for="acta">Subir Acta</label>
				<div class="wrap-input100">
					<input class="input100" type="file" name="acta" id="acta" >
					<span class="focus-input100"></span>
				</div>				

				<div class="container-contact100-form-btn">
					
					<input class="contact100-form-btn" type="submit" name="registrar" value="REGISTRAR NOVEDAD">	
					
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('../../img/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Formulario de Deserción
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
							<i class="fas fa-folder"> </i> Registro de Novedad
						</span>
					</div>

		<?php

if (isset($datos["exito"])) {

    echo '<br><div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Exito!</strong>' . $datos["exito"] . '
            </div>';

}

if (isset($datos["aviso"])) {

    echo '<br><div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Exito!</strong>' . $datos["aviso"] . '
            </div>';

}

?>
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


	<div id="dropDownSelect1"></div>
<?php 
require_once "../app/views/inc/footer.php";
?>