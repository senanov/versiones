<!DOCTYPE html >
<html >
<head>
<title><?php echo NOM_SITIO;?></title>
<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/bootstrap.min.css">
<link rel="icon" href="<?php echo RUTA_URL;?>/img/logo.ico" />
<link rel="stylesheet"  href="<?php echo RUTA_URL;?>/css/icon.css" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  href="<?php echo RUTA_URL;?>/css/fonts.css" />
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/banner.css">
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/tabla.css">
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/estilos_ayuda.css">
<link rel="stylesheet" href="<?php echo RUTA_URL;?>/css/estiloserv.css" />
<link rel="stylesheet" href="<?php echo RUTA_URL;?>/css/formulario.css">
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/registro.css" />
<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/estilos.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 

</head>
<body>
	<?php 
if (isset($_SESSION["seguridad"])) {
	 if ($_SESSION["seguridad"]!=1) {
            redireccionar("/usuario");
        }
}else{
	 redireccionar("/usuario");
}

	 ?>