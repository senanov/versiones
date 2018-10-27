<main role="main">

	<section class="content-form">

		<h2 class="sub-title">Formato de Reingreso Sena</h2>

<?php

$registrar = new RegistrarNovedad();
$registrar -> reingresoDesercionController();
?>
		<form method="POST" id="registrar-form" >
		  <input type="hidden" name="id" value="4">
			<div class="form-group width-12">
				 
				 <div class="width-6">
				  <input type="text" placeholder="Primer nombre del Aprendiz *" class="form-control" name="nom1_reingreso" id="nombre1" required/> 
				 </div>

				  <div class="width-6">
				  <input type="text" placeholder="segundo nombre del Aprendiz *" class="form-control" name="nom2_reingreso" id="nombre2" required/> 
				  </div>  

				 <div class="width-6">
				  <input type="text" placeholder="Primer apellido del Aprendiz *" class="form-control" name="apellido1" id="apellido1" required/> 
				 </div>

				 <div class="width-6">
				  <input type="text" placeholder="Segundo apellido del Aprendiz *" class="form-control" name="apellido2" id="apellido2" required/> 
				 </div>
				 
				 <div class="width-6">
				  <select name="tdocumento" id="td">
				      <option value="1">Cédula de Ciudadanía</option>
				      <option value="2">Tarjeta de Identidad</option>
				      <option value="3">Cédula de Extranjeria</option>   
				  </select> 
				 </div> 

				 <div class="width-6">
				  <input type="text" placeholder="Numero de Documento *" class="form-control" name="documento" id="documento" minlength="8" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required /> 
				 </div> 
				 
				 <div class="width-6">
				  <input type="text" placeholder="Grupo" class="form-control" name="grupo" id="grupo" /> 
				 </div> 
				 
				 <div class="width-6">
				  <select name="ficha" id="ficha">
				  <option disabled selected>selecionar</option>
				      <?php
				      $ficha = new RegistrarNovedad();
				      $ficha -> llamarFichaController();
				      ?>

				  </select>  
				 </div>  

				 <div class="width-6" >
				  <input class="form-control" name="trimestre" disabled id="trimestreInput" placeholder="Trimestre"> 
				 </div> 
				 
				 <div class="width-6">
				   <input class="form-control" name="jornada" disabled id="jornadainput" placeholder="jornada">	  
				 </div>
				</div>

			<div class="form-group">
				 <div class="width-12">
				 	
Programa de formacion<br>
<input class="form-control" name="programa" disabled id="programainput">	  
					 
				 </div>
			</div>

					    
			 <div class="form-group width-12">
				  <h3 class="sub-form">Sede</h3>
				  
				  <div class="width-4">
				    <label for="Restrepo" ><input disabled type="radio" id="Restrepo" name="sede" value="4" />Restrepo</label>
				  </div>
				  <div class="width-4">
				    <label for="Ricaurte" ><input disabled type="radio" id="Ricaurte" name="sede" value="5" />Ricaurte</label>
				  </div>
				  <div class="width-4">
				    <label for="Colombia" ><input disabled type="radio" id="Colombia" name="sede" value="2" />Colombia</label>
				  </div>
			 </div>
			  
			 <div class="form-group width-12">	  
				  <div class="width-4">
				    <label for="Alamos" ><input disabled type="radio" id="Alamos" name="sede" value="1"/>Alamos</label>
				  </div>
				  <div class="width-4">
				    <label for="Complejo Sur"><input disabled type="radio" id="Complejo Sur" name="sede" value="3" />Complejo Sur</label>
				  </div>
			 </div>

			 <div class="form-group width-12">
				  <h3 class="sub-form">Fecha de ingreso</h3>
				  <input type="date" name="fecha"  value="<?php  echo date('Y-d-m'); ?>" step="1" class="form-control" required/> 
			 </div>
			 
			 <div class="form-group width-12">
					<input type="submit" value="REGISTRAR NOVEDAD" class="form-control btn btn-principal" id="btn-registrar"/>

			 </div>
	  
		</form>

	</section>
</main>

