<main role="main">

	<section class="content-form">

		<h2 class="sub-title">Formato de registro de fichas</h2>

		<form method="POST" id="registrar-form" >
		<?php
			$ficha = new RegistrarNovedad();
			$ficha -> fichaController();
		?>
		  <div class="form-group width-12">
				 
				 <div class="width-6">
				  <input type="text" placeholder="Numero de la ficha" class="form-control" name="num_ficha" id="num_ficha" required/> 
				 </div>

				 <div class="width-6">
				  <select name="sede" id="td" required>
				  	  <option disabled selected value="">Seleccione Sede</option>
				      <option value="1">Alamos</option>
				      <option value="2">Colombia</option>
				      <option value="3">Complejo Sur</option>
				      <option value="4">Restrepo</option>
				      <option value="5">Ricaurte</option>
				  </select> 
				 </div>

				 <div class="width-6">
				  <select name="jornada" id="td" required>
				 	  <option disabled selected value="">Seleccione Jornada</option>  
				      <option value="1">Diurna</option>
				      <option value="2">Nocturna</option>
				      <option value="3">Fines de semana</option>
				  </select> 
				 </div>  

				 <div class="width-6">
				  <select name="modalidad" id="td" required>
				  	  <option disabled selected value="">Seleccione Modalidad</option>
				      <option value="1">Presencial</option>
				      <option value="2">Virtual</option>
				  </select> 
				 </div>  
				 
				 <div class="width-6">
				  <select name="programa" id="td" required>
				  <option disabled selected value="">Seleccione Programa</option>
				    <?php
						$programa = new RegistrarNovedad();
						$programa -> programasController();
					?>
				  </select> 
				 </div> 

				  <div class="width-6">
				  <select name="trimestre" id="td" required>
				      <option disabled selected value="">Seleccione Trimestre</option>
				      <option value="1">Primero</option>
				      <option value="2">Segundo</option>
				      <option value="3">Tercero</option>
				      <option value="4">Cuarto</option>
				      <option value="5">Quinto</option>
				      <option value="6">Sexto</option>
				      <option value="7">Septimo</option>
				      <option value="8">Octavo</option>
				  </select> 
				 </div>  


			  			 			 
			 <div class="form-group width-12">
					<input type="submit" value="REGISTRAR FICHA" class="form-control btn btn-principal" id="btn-registrar"/>
					<a href="tablaFichas"><input type="button" name="bt" value="Ver fichas" class="form-control btn btn-principal"></a>

			 </div>
	  
		</form>

	</section>
</main>