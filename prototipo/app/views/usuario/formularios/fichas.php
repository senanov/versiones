<?php
require_once "../app/views/usuario/inc/header.php";
require_once "../app/views/usuario/inc/banner.php";

if ($_SESSION["rol"] == 1 || $_SESSION["rol"] == 0) {
    require_once "../app/views/usuario/inc/menuAdmin.php";
} else if ($_SESSION["rol"] == 2) {
    require_once "../app/views/usuario/inc/menuApoyo.php";
} else {
    require_once "../app/views/usuario/inc/menuInvitado.php";
}

?>

<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" enctype="multipart/form-data" action="<?php echo RUTA_URL; ?>/ficha/registrarFicha" onsubmit="return ficha();">
				
				<span class="contact100-form-title">
					Ingresa los Datos de la Ficha
				</span>

				<label class="label-input100" for="num_ficha">Numero de Ficha y Sede</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<input class="input100" type="text" placeholder="Numero de la ficha"  name="num_ficha" id="num_ficha" maxlength="8" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input">
					<select name="sede" id="sede" class="input100" required>
				  	  <option disabled selected value="">Seleccione Sede</option>
				      <option value="1">Alamos</option>
				      <option value="2">Colombia</option>
				      <option value="3">Complejo Sur</option>
				      <option value="4">Restrepo</option>
				      <option value="5">Ricaurte</option>
				  </select>
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="jornada">Jornada y Modalidad</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					 <select name="jornada" id="jornada" class="input100" required>
				 	  <option disabled selected value="">Seleccione Jornada</option>
				      <option value="1">Diurna</option>
				      <option value="2">Nocturna</option>
				      <option value="3">Fines de semana</option>
				  </select>
					<span class="focus-input100"></span>
				</div>				
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<select name="modalidad" id="modalidad" class="input100" required>
				  	  <option disabled selected value="">Seleccione Modalidad</option>
				      <option value="1">Presencial</option>
				      <option value="2">Virtual</option>
				  </select>
					<span class="focus-input100"></span>
				</div>


				<label class="label-input100" for="programa">Programa y Trimestre</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					 <select name="programa" id="programa"  class="input100" required>
				  <option disabled selected value="">Seleccione Programa</option>

				    <?php

    //programas tecnicos
    echo '<optgroup label="Programas Tècnicos">';
    foreach ($datos["programa"] as $fila) {
        if ($fila->id_tipo_programa == 1) {
            echo '<option value=' . $fila->id . '>' . $fila->nombre_programa . '</option>';
        }
    }
    echo '</optgroup>';

    //programas tecnologicos
    echo '<optgroup label="Programas Tecnològicos">';
    foreach ($datos["programa"] as $fila) {
        if ($fila->id_tipo_programa == 2) {
            echo '<option value=' . $fila->id . '>' . $fila->nombre_programa . '</option>';
        }
    }
    echo '</optgroup>';

    //especializaciones
    echo '<optgroup label="Especializaciones">';
    foreach ($datos["programa"] as $fila) {
        if ($fila->id_tipo_programa == 3) {
            echo '<option value=' . $fila->id . '>' . $fila->nombre_programa . '</option>';
        }
    }
    echo '</optgroup>';

?>
				  </select>
					<span class="focus-input100"></span>
				</div>				
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<select name="trimestre" id="trimestre" class="input100" required>
				      <option disabled selected value="">Seleccione Trimestre</option>
				      <!-- <option value="1">Primero</option>
				      <option value="2">Segundo</option>
				      <option value="3">Tercero</option>
				      <option value="4">Cuarto</option>
				      <option value="5">Quinto</option>
				      <option value="6">Sexto</option>
				      <option value="7">Septimo</option>
				      <option value="8">Octavo</option> -->
				  </select>
					<span class="focus-input100"></span>					
				</div>


				
				<div class="container-contact100-form-btn">
					
					<input class="contact100-form-btn" type="submit" name="registrar" value="REGISTRAR FICHA">	
					
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('../img/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Añadir Ficha
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
							<i class="fas fa-folder"> </i> Registro de Ficha
						</span>
					</div>

					<?php
if (isset($datos["aviso"])) {
	echo '<div class="alert alert-'.$datos["alert"].' alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Aviso:</strong>'.$datos["aviso"].'</div><br>';
}
?>

					<a href="<?php echo RUTA_URL;?>/ficha/editarFicha"><input type="button" name="bt" value="Ver fichas" class="form-control btn btn-principal"></a>
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


<?php
require_once "../app/views/inc/footer.php";
?>