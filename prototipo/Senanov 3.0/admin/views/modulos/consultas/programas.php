<br><br>

<h1 align="center" >Añadir Programas de formacion</h1>


<div class="container" id="contenedor1" >
<br>
<div class="row" id="fila1" >

  <div class="col" id="columna1">
 <form method="post">
 <center><select name="tprograma" class="programa">
   <option value="1">Programa Técnico</option>
   <option value="2">Programa Tecnológico</option>
   <option value="3">Especializaciones</option>
 </select><br><br>
 <input type="text" name="programa" placeholder="Agregar programa de formacion" class="programa" required><br><br>
<input type="submit" name="enviar" value="Agregar" class="bt1">
</center>
   </form>
   <br>
   <center><a  href="tablaProgramas"><input type="button" id="ip" value="Ver Programas"></a></center>
   <br><br>
<?php
$programa=new Novedades();
$programa->insertarProgramasController();

?>
   
</div>

</div>
</div>


<br><br><br><br><br><br><br><br><br>