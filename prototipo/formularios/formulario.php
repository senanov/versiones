<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="data1/estilos.css" />


</head>

<body bgcolor="#CCCCCC">
<div class="banner">
<div class="logo"><a href="index.php"><img src="img/sena.png" alt="" width="100" height="90" /></a></div>
<div class="img"></div>
<span class="img"><img src="cee.png"  /></span>
<div class="p">
  
  <div id="apDiv1">
  <h1>SENANOV</h1>
  <p>Sistema de Información Especializado en la Gestión de Novedades en el CEET</p>
  
</div>
</div>
<?php include("menu.php"); ?>

<form id="form1" name="form1" method="post" action="">
<table width="663" height="776" cellspacing="15" align="center"><tr>
    <td width="310" height="504">
  <p>Nombres: </p>
  <p>
    <input type="text" name="nombres" id="nombres" placeholder="Nombres" />
   
    Tipo Documento</p>
  <p>
    <select>
      <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
      <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
      <option value="Cédula de Extranjeria">Cédula de Extranjeria</option>
      <option value="Pasaporte">Pasaporte</option>
  </select>
</p>
  <p>&nbsp;</p>
  <p>  Ficha de Caracterización: </p>
  <p>
    <input type="text" name="Ficha" id="Ficha" placeholder="Ficha" />
</p>
  <p>Fecha de la Novedad:</p>
  <p>
    <label for="fecha"></label>
    <input type="date" name="fecha" id="fecha" />
  </p>
  <p>&nbsp;</p></td>
    <td width="341">
    <p>Apellidos: </p>
      <p>
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" />
      </p>
      <p>N. Documento </p>
      <p>
        <input type="text" name="textfield" id="textfield" placeholder="N. Documeno " />
      </p>
      <p>Trimestre: </p>
      <p>
        <input type="text" name="tri" id="tri" placeholder="Trimestre" />
    </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    
    </tr>
    
     <tr> 
    <td height="11"  colspan="2"><center>
      <p>Motivo: </p>
      <label for="motivo2"></label>
      <textarea name="motivo" id="motivo2" cols="45" rows="5" placeholder="Escriba el Motivo o Razón "></textarea>
    </center></td>
    
    </tr>
    
    <tr> 
    <td height="11"  colspan="2"><center><input type="submit" name="button" id="button" value="Enviar" /></center></td>
    
    </tr>
    
    </table> 
</form>
</body>
</html>