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


<div class="container">
<div class="row">
<div class="col">
<br><br>
  <?php 
  
if (isset($datos["aviso"])) {

  echo '<div class="alert alert-success alert-dismissible">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Exito! </strong> '.$datos["aviso"].'</div>';       
 
}
?>
 <br>
<div class="form-group pull-right ">
    <input type="text" class="search form-control" placeholder="Buscar">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results ">
 <thead class="thead-dark">
  <tr>
  <th>Numero de ficha</th>
  <th>Sede</th>
  <th>Jornada</th>
  <th>Modalidad</th>
  <th>Programa</th>
  <th>Trimestre</th>
  <th>Opciones</th>
  </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
 </thead>
<tbody>
<?php

if (isset($datos["id"])) {

      foreach ($datos["ed"] as $ficha) {
                if ($ficha->codigo_ficha==$datos["id"]) {

                $sede ='<option selected value='. $ficha->id_sede .'>'. $ficha->nombre_sede .'</option>';
                $jornada ='<option selected value='. $ficha->id_jornada .'>'. $ficha->tipo_jornada .'</option>';
                $trimeste ='<option selected value='. $ficha->id_trimestre .'>'. $ficha->numero_trimestre .'</option>';

                   echo '<form method="post" action="'.RUTA_URL.'/ficha/editarFicha/">
                   <tr>
                <td>' . $ficha->codigo_ficha . '
                <input type="hidden" name="ficha" value='.$ficha->codigo_ficha.'></td>
                <td><select name="sede" id="td" required>
                      '.$sede.'                     
                      <option value="1">Alamos</option>
                      <option value="2">Colombia</option>
                      <option value="3">Complejo Sur</option>
                      <option value="4">Restrepo</option>
                      <option value="5">Ricaurte</option>
                  </select> </td>
                <td><select name="jornada" id="td" required>
                       '.$jornada.' 
                      <option value="1">Diurna</option>
                      <option value="2">Nocturna</option>
                      <option value="3">Fines de semana</option>
                  </select> </td>
                <td>' . $ficha->tipo_modalidad . '</td>
                <td>' . $ficha->nombre_programa . '</td>


                <td><select name="trimestre" id="td" required>
                       '. $trimeste.'
                      <option value="1">Primero</option>
                      <option value="2">Segundo</option>
                      <option value="3">Tercero</option>
                      <option value="4">Cuarto</option>
                      <option value="5">Quinto</option>
                      <option value="6">Sexto</option>
                      <option value="7">Septimo</option>
                      <option value="8">Octavo</option>
                  </select> </td>
                  
                <td><input  type="submit" value="continuar" id="ip"></td>
                </tr></form>';
                }else{

                echo '<tr>
                <td>' . $ficha->codigo_ficha . '</td>
                <td>' . $ficha->nombre_sede . '</td>
                <td>' . $ficha->tipo_jornada . '</td>
                <td>' . $ficha->tipo_modalidad . '</td>
                <td>' . $ficha->nombre_programa . '</td>
                <td>' . $ficha->numero_trimestre . '</td>
                <td><center><a href="'.RUTA_URL.'/ficha/editarFicha/'. $ficha->codigo_ficha.'"><input id="ip" type="button" value="Editar Ficha"></a></center></td>
                </tr>';
                }
            }
} else {
  foreach ($datos["ed"] as $ficha) {
            echo '<tr>
                <td>' . $ficha->codigo_ficha . '</td>
                <td>' . $ficha->nombre_sede . '</td>
                <td>' . $ficha->tipo_jornada . '</td>
                <td>' . $ficha->tipo_modalidad . '</td>
                <td>' . $ficha->nombre_programa . '</td>
                <td>' . $ficha->numero_trimestre . '</td>
                <td><center><a href="'.RUTA_URL.'/ficha/editarFicha/'. $ficha->codigo_ficha.'"><input id="ip" type="button" value="Editar Ficha"></a></center></td>
                </tr>';
        }

    
}

?>
</tbody>
  </table>



</div></div></div>
<?php
require_once "../app/views/inc/footer.php";
?>