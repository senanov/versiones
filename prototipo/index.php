<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="logo.ico" />
<link rel="stylesheet" type="text/css" href="estilos.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Senanov</title>
<style type="text/css">
.letra {
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
}
.ww {
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
}
.asd {
	color: #000;
}
.vd {
	font-size: 36px;
}
.s {
	text-align: center;
}
.dfg {
	font-family: Arial, Helvetica, sans-serif;
}
.ww {
	font-weight: bold;
}
.vd table tr td p {
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
}
.vd table tr td {
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
	color: #333;
}
#form1 div p {
	color: #F00;
}
.ww .ww {
	font-size: 24px;
}
.clase2 {
	font-size: 16px;
}


#apDiv1 {
	position: absolute;
	width: 835px;
	height: 104px;
	z-index: 1;
	left: 442px;
	top: -26px;
}
.p #apDiv1 h1 {
	text-align: center;
}
.p #apDiv1 p {
	font-size: 24px;
	font-weight: bold;
	text-align: center;
}



form
{
	margin:auto;
	
	}

input
{
	alignment-adjust:central;
	padding:8px;
	border-radius:10px;
	border-top-style:groove;
	margin-bottom:20px;
	
	
	
	
	}



</style>
</head>

<body bgcolor="#666666">
<?php include("social.php"); ?>
<div class="banner">
<div class="logo"><img src="img/sena.png" alt="" width="100" height="90" /></div>
<div class="img"></div>
<span class="img"><img src="cee.png"  /></span>
<div class="p">
  
  <div id="apDiv1">
  <h1>SENANOV</h1>
  <p>Sistema de Información Especializado en la Gestión de Novedades en el CEET</p>
  
</div>
</div>

<br /> <br /> <br /> <br /> <br /> <br />
<?php include("menu2.php"); ?>
<?php include("slider.php"); ?>




<table width="1381" height="368" border="0" align="center" cellspacing="20">
  <tr>
    
    <td width="503" height="362"><center><h1>sobre senanov....</h1></center>
    <p>&nbsp;</p>
    <div class="letra"><p>El  registro de novedades en el SENA en general, es de vital importancia para el  normal funcionamiento interno de la entidad SENA, actualmente estos datos son  ingresados a la plataforma excel,  lo que no es un problema, pero si es limitada en algunos aspectos necesarios  para realizar el registro de estos datos.</p></div></td>
    <td width="471"><img src="Registro.jpg" width="471" height="437" /></td>
    <td width="321"><div class="login">
  <img src="img/sena.png" width="136" height="132" />
  <form id="form1" name="form1" method="post" action="formulario.php">
    <p>
      <label for="textfield"></label>
    Usuario</p>
    <p>
      <label for="textfield3"></label>
      <input type="text" name="textfield" id="textfield3" placeholder="Usuario" />
    </p>
    <p>contraseña</p>
    <p>
      <label for="textfield4"></label>
      <input type="password" name="textfield2" id="textfield4" placeholder="Contraseña" />
    </p>
    <p>
      <input type="submit" name="button" id="button" value="Ingresar " />
    </p>
  </form>

</div></td>
  </tr>
</table>
<br /> <br />
<footer>
<img src="img/gsena.gif" width="150" height="102" />
Cristian Ortiz <br />
Mónica Díaz <br />
Daniel Acosta <br />
Felipe Pinzón <br />
Juan David Ramirez | SENANOV
</footer>
</body>
</html>