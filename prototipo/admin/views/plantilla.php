<!DOCTYPE html>
<html>
<head>

<title>Senanov</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="views/css/estilos.css"/>
<link rel="stylesheet" type="text/css" href="views/css/banner.css">
<link rel="stylesheet" href="views/css/formulario.css">

</head>

<body>

<?php
include "views/modulos/banner.php";
include "views/modulos/menu.php";

$enlaces = new Admin();
$enlaces -> enlacesController();

include "views/modulos/footer.php";
?>






<script src="views/js/jquery-3.3.1.min.js"> </script>
<script src="views/js/bootstrap.min.js"> </script>

</body>
</html>