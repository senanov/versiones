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

<style type="text/css">
	
	.portafolio{
	width: 90%;
	max-width: 1000px;
	margin: auto;
}

.portafolio h1{
	text-align: center;
	font-size: 38px;
	margin: 15px 0px 40px;
}

.portafolio-container{
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: justify;
	-webkit-justify-content: space-between;
	-ms-flex-pack: justify;
	justify-content: space-between;
}

.portafolio-item{
	width: 30%;
	position: relative;
	overflow: hidden;
}

.portafolio-img{
	-webkit-transition: all 0.5s;
	transition: all 0.5s;
}

.portafolio-text{
	position: absolute;
	bottom: 0;
	padding: 20px;

	background: rgba(0,0,0,0.7);
	color: #fff;
	width: 85%;
	text-align: center;
	-webkit-transform: translateY(100%);

	-ms-transform: translateY(100%);

	transform: translateY(100%);

	-webkit-transition: all 0.5s ease-out;

	transition: all 0.5s ease-out;
}

.portafolio-text p{
	text-align: justify;
}

.portafolio-item:hover .portafolio-text{
	-webkit-transform: translateY(0%);
	-ms-transform: translateY(0%);
	transform: translateY(0%);
}

/*.portafolio-item:hover .portafolio-img{
	-webkit-transform: scale(1.15);
	-ms-transform: scale(1.15);
	transform: scale(1.15);
}*/

.fa-download{
	color: white;
}
</style>
<br><br><br>
<section class="portafolio">
		<h1>Descarga el Formatos de Acta</h1>
		<div class="portafolio-container">
			<section class="portafolio-item">
				<a href="<?php echo RUTA_URL;?>/novedad/descargarFormato?file=1"><img src="<?php echo RUTA_URL;?>/img/formatos/aplazamiento.png" class="portafolio-img">
				<section class="portafolio-text">
					<i class="fas fa-download fa-7x"></i></a>					
				</section>
			</section>
			<section class="portafolio-item">
				<a href="<?php echo RUTA_URL;?>/novedad/descargarFormato?file=3"><img src="<?php echo RUTA_URL; ?>/img/formatos/cambio jornada.png" class="portafolio-img">
				<section class="portafolio-text">
					<i class="fas fa-download fa-7x"></i></a>
				</section>
			</section>
			<section class="portafolio-item">
				<a href="<?php echo RUTA_URL;?>/novedad/descargarFormato?file=4"><img src="<?php echo RUTA_URL; ?>/img/formatos/desercion.png" class="portafolio-img">
				<section class="portafolio-text">
					<i class="fas fa-download fa-7x"></i></a>
				</section>
			</section>
		</div>
	</section>
<!-- segunda -->
<br><br><br>
	<section class="portafolio">		
		<div class="portafolio-container">
			<section class="portafolio-item">
				<a href="<?php echo RUTA_URL;?>/novedad/descargarFormato?file=2"><img src="<?php echo RUTA_URL; ?>/img/formatos/reintegro.png" class="portafolio-img">
				<section class="portafolio-text">
					<i class="fas fa-download fa-7x"></i></a>
				</section>
			</section>
			<section class="portafolio-item">
				<a href="<?php echo RUTA_URL;?>/novedad/descargarFormato?file=5"><img src="<?php echo RUTA_URL; ?>/img/formatos/retiro.png" class="portafolio-img">
				<section class="portafolio-text">
					<i class="fas fa-download fa-7x"></i></a>
				</section>
			</section>
			<section class="portafolio-item">
				<a href="<?php echo RUTA_URL;?>/novedad/descargarFormato?file=6"><img src="<?php echo RUTA_URL; ?>/img/formatos/traslado.png" class="portafolio-img">
				<section class="portafolio-text">
					<i class="fas fa-download fa-7x"></i></a>
				</section>
			</section>
		</div>
	</section>
<?php
require_once "../app/views/inc/footer.php";
?>