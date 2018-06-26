
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Senanov</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
<link rel="icon" href="views/img/logo.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  href="views/css/fonts.css" />
<link rel="stylesheet" type="text/css" href="views/css/estilos.css" />
<link rel="stylesheet" type="text/css" href="views/css/registro.css" />
<link rel="stylesheet" type="text/css" href="views/css/banner.css">
<link rel="stylesheet"  href="views/css/icon.css" /> 
<link rel="stylesheet" type="text/css" href="views/css/estilos_ayuda.css">
<link rel="stylesheet" href="views/css/estiloserv.css" />


</head>

<body>

<!-- banner -->
  <?php include "modulos/banner.php";?>
  
<!-- Menu -->

<?php include "modulos/menu.php"; ?>


<?php include("modulos/social.php"); ?> 



<?php

// include "views/modulos/slider.php";
$mvc = new MvcController();
$mvc -> enlacesPaginasController();


 ?>






<?php include "modulos/footer.php"; ?>

    <script src="views/js/jquery-3.3.1.min.js"> </script>
    <script src="views/js/bootstrap.min.js"> </script>
    <script src="views/js/menu.js"></script>

  
</body>
</html>