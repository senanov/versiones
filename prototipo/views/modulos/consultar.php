<br /><br/>
<div class="cont container">
	<div class="row" id="fila" >
  		<div class="col" id="columna">   


    		<form  method="POST">
    	   <?php
            $consulta = new MvcController();
            $consulta -> consultaUsuarioController();
         	?>
       		<h2>Ingrese su numero de documento para consultar si ya se encuentra registrado</h2>
       		<input id="consultar" type="text" name="consulta" placeholder="Numero de documento" required><br><br>
       		<input  id="smm" type="submit" name="buscar">
    		</form><br>
    		<a href="restablecer"><button id="ress">Restablecer Contraseña</button></a><br><br>
		</div>
	</div>
</div>




