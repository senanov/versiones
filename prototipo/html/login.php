<!doctype html>
<html lang="en">
  <head>
  <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="../css/estilos.css" />
    
  </head>

  <body>
    <div class="container">

    <div class="d-flex justify-content-between  fila row">

    <div class="letra columna col-sm-12 col-md-6 col-lg-4 " >
    <h1>SOBRE SENANOV....</h1>

    <p>El  registro de novedades en el SENA en general, es de vital importancia para el  normal funcionamiento interno de la entidad SENA, 
    actualmente estos datos son  ingresados a la plataforma excel,  lo que no es un problema, 
    pero si es limitada en algunos aspectos necesarios  para realizar el registro de estos datos.</p>

    </div>
    <div class="columna col-sm-12 col-md-6 col-lg-4">
   <img src="img/Registro.jpg" />

    </div>
    <div class="columna col-sm-12 col-md-12 col-lg-3">
     <center><img src="img/sena.png" width="136" height="132"/></center>

                  <!--formulario login -->

  <form  method="POST" action="html/evaluar.php">
    <p>
      <label for="textfield"></label>
    Usuario</p>
    <p>
      <label for="usuario"></label>
      <input type="text" name="usuario" id="usuario" placeholder="Usuario" />
    </p>
    <p>contraseña</p>
    <p>
      <label for="contra"></label>
      <input type="password" name="contra" id="contra" placeholder="Contraseña" />
    </p>
    
    <p>
      <input type="submit" name="button" id="button" value="Ingresar " />
    </p>
  </form>
    </div>


    </div>


    </div>


    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.3.1.min.js"> </script>
    <script src="../js/bootstrap.min.js"> </script>



  </body>
</html>