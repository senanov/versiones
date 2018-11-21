<br><br><br>
<main role="main">

	<section class="content-form">

		<h2 class="sub-title">Formato de Cambio de Jornada Sena</h2>

		<form action="../conexion/cambiojornada.php" method="POST" id="registrar-form" >
		  
			<div class="form-group width-12">
				 <div class="width-6">
				  <input type="text" placeholder="Nombres del Aprendiz *" class="form-control" name="nombres" id="nombre" required/> 
				 </div> 
				 <div class="width-6">
				  <input type="text" placeholder="Apellidos del Aprendiz *" class="form-control" name="apellidos" id="apellidos" required/> 
				 </div>  
				 <div class="width-6">
				  <select name="tdocumento" id="td"  >
      <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
      <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
      <option value="Cédula de Extranjeria">Cédula de Extranjeria</option>   
                   </select> 
				 </div> 

				 <div class="width-6">
				  <input type="text" placeholder="Numero de Documento *" class="form-control" name="documento" id="documento" minlength="8" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required /> 
				 </div> 
				 <div class="width-6">
				  <input type="text" placeholder="Grupo" class="form-control" name="grupo" id="grupo" /> 
				 </div> 
				 <div class="width-6">
				  <input type="text" placeholder="Numero de Ficha " class="form-control" name="ficha" id="ficha" onkeypress='return event.charCode >= 48 && event.charCode <= 57' /> 
				 </div>  

				 <div class="width-6" >
				  <select name="trimestre" id="td"  >
	  <option >Trimestre</option>
      <option value="1">Primero</option>
      <option value="2">Segundo</option>
      <option value="3">Tercero</option>  
      <option value="4">Cuarto</option>
      <option value="5">Quinto</option>
      <option value="6">Sexto</option>
      <option value="7">Septimo</option>
      
                   </select> 
				 </div> 
				 <div class="width-6">
				   <select name="jornada" id="td"  >
	  <option >Jornada</option>
      <option value="diurna">Diurna</option>
      <option value="nocturna">Noctuna</option>
      <option value="Fines de semana">Fines de semana</option>
      
                   </select> 
				 </div>  

			</div>

			<div class="form-group">
				 <div class="width-12">
				 
Programa de formacion<br>
<?php
include('programas.php');
?>

				 </div>
			</div>

					    
			 <div class="form-group width-12">
				  <h3 class="sub-form">Sede</h3>
				  
				  <div class="width-4">
				    <label for="Restrepo"><input type="radio" id="Restrepo" name="sede" value="Restrepo"/>Restrepo</label>
				  </div>
				  <div class="width-4">
				    <label for="Ricaurte"><input type="radio" id="Ricaurte" name="sede" value="Ricaurte" />Ricaurte</label>
				  </div>
				  <div class="width-4">
				    <label for="Colombia"><input type="radio" id="Colombia" name="sede" value="Colombia" />Colombia</label>
				  </div>
			 </div>
			  
			 <div class="form-group width-12">
				  
				  
				  <div class="width-4">
				    <label for="Alamos" ><input type="radio" id="Alamos" name="sede" value="Alamos"/>Alamos</label>
				  </div>
				  <div class="width-4">
				    <label for="Complejo Sur"><input type="radio" id="Complejo Sur" name="sede" value="Complejo Sur" />Complejo Sur</label>
				  </div>
			  
			 </div>
			 <div class="form-group width-12">
				  <h3 class="sub-form">Fecha de la Novedad</h3>
				  <input type="date" name="fecha"  value="<?php  echo date('Y-d-m'); ?>" step="1" class="form-control" required/> 
			 </div>
			 <div class="form-group width-12">
			      <h3 class="sub-form">Motivo</h3>
				  <textarea name="motivo" placeholder="escriba el motivo o razón" cols="22" rows="10" class="form-control"></textarea>
			 </div>
			 <div class="form-group width-12">
					<input type="submit" value="REGISTRAR NOVEDAD" class="form-control btn btn-principal" id="btn-registrar"/>
					 
			 </div>
	  
		</form>

	</section>
</main>