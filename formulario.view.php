	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Inicio - Farmoquing SAS</title>

		<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">

		<link rel="shortcut icon" type="image/x-icon" href="img/ICON.ico">

			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">	
			<link rel="stylesheet" href="css/hexagons.min.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/mainFoo.css">
		</head>
		<body>
		<span class="arriba"><i class="fa fa-angle-up"></i></span>	
			  <header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
				  				<ul>
									<li><a href="#"><i class=""></i></a></li>
									<li><a href="#"><i class=""></i></a></li>
									<li><a href="#"><i class=""></i></a></li>
				  				</ul>
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
				  				<a href="tel:+571 6157506">Pbx: (571) 6157506 - 6157319</a>
				  				<a href="mailto:info@farmoquing.co">info@farmoquing.co</a>				
				  			</div>
				  		</div>			  					
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logoFar.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Inicio</a></li>
				          <li><a href="index.php#ancla1">Nosotros</a></li>
				          <li class="menu-has-children"><a href="services.html">Servicios</a>
				          <ul>
				              <li><a href="services.html">Calificación - Validación</a></li>
				              <li><a href="services.html">Asesorías</a></li>
				              <li><a href="services.html">Capacitación</a></li>
				              <li><a href="services.html">Mantenimiento</a></li>
				              <li><a href="services.html">Diseño</a></li>
				            </ul>
				          </li>
				          <li><a href="index.php#ancla2">Productos</a></li>
				          <li class="menu-has-children"><a href="blog-home.html">Equipos</a>
				            <ul>
				              <li><a href="blog-home.html#ancla3">Cámaras Climatizadas FARFLOW®</a></li>
				              <li><a href="blog-home.html#ancla4">Cuartos Climatizados FARFLOW®</a></li>
				              <li><a href="blog-home.html#ancla5">Equipos de Flujo Laminar®</a></li>
				              <li><a href="blog-shome.html#ancla4">Cuartos Fríos de Refrigeración</a></li>
				            </ul>
				          </li>						          
				          <li><a href="noticias.php">Noticias</a></li>
			              <li><a href="formularioL.php" id="activo">Contacto</a></li>
			              <li><a href="https://www.facebook.com/farmoquing/" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/farmoquing/?hl=es-la" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://www.linkedin.com/company/farmoquing-sas/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>
			  <br>

				<div class=" pb-8 header-text text-center">
							<h1 class="mb-10" style="font-size: 50px; color: #0A0D4E">Nuestros Servicios</h1>
							<p>En Farmoquing SAS contamos con toda la trazabilidad y responsabilidad para dar respuesta oportuna a cualquier solicitud enviada. Te invitamos a diligenciar el siguiente formulario:</p>
				</div>

	<br>
	<form class="formulario.php" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
	<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
	<input type="text" class="form-control" id="compania" name="compania" placeholder="Compañia:" value="<?php if(!$enviado && isset($compania)) echo $compania ?>">

	<select name="pais">
		<option value="NULL">País:</option>
		<option value="Alemania">Alemania</option>
		<option value="Arabia">Arabia Saudita</option>
		<option value="Argentina">Argentina</option>
		<option value="Australia">Australia</option>
		<option value="Bolívia">Bolívia</option>
		<option value="Brasil">Brasil</option>
		<option value="Canadá">Canadá</option>
		<option value="Chile">Chile</option>
		<option value="China">China</option>
		<option value="Colombia">Colombia</option>
		<option value="Corea">Corea del Norte</option>
		<option value="Corea">Corea del Sur</option>
		<option value="Cuba">Cuba</option>
		<option value="Ecuador">Ecuador</option>
		<option value="Egipto">Egipto</option>
		<option value="Emiratos">Emiratos Árabes Unidos</option>
		<option value="España">España</option>
		<option value="EEUU">Estados Unidos</option>
		<option value="Francia">Francia</option>
		<option value="Grecia">Grecia</option>
		<option value="Haití">Haití</option>
		<option value="Holanda">Holanda</option>
		<option value="Inglaterra">Inglaterra</option>
		<option value="India">India</option>
		<option value="Israel">Israel</option>
		<option value="Italia">Italia</option>
		<option value="Japón">Japón</option>
		<option value="Nigeria">Nigeria</option>
		<option value="Panamá">Panamá</option>
		<option value="Paraguay">Paraguay</option>
		<option value="Perú">Perú</option>
		<option value="Rusia">Rusia</option>
		<option value="Sudafrica">Sudafrica</option>
		<option value="Uruguay">Uruguay</option>
		<option value="Venezuela">Venezuela</option>
		<option value="Otro">Otro</option>
	</select>
	<input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad:" value="<?php if(!$enviado && isset($ciudad)) echo $ciudad ?>">
	<input type="tel" name="telefono" id="numero" class="form-control" placeholder="Teléfono:">
	
	<select name="sector">
		<option value="NULL">Sector de la Industria</option>
		<option value="Farmaceutico">Farmacéutico</option>
		<option value="Cosmetico">Cosmético</option>
		<option value="Salud">Salud</option>
		<option value="Institucional">Institucional</option>
		<option value="Alimentos">Alimentos</option>
		<option value="Quimicos">Químicos</option>
		<option value="Otros">Otros</option>

	</select>
	<select name="area"> 
		<option value="NULL">Área de Trabajo</option>
		<option value="calidad">Calidad</option>
		<option value="Aseguramiento">Aseguramiento</option>
		<option value="Produccion">Producción</option>
		<option value="Ingenieria">Ingeniería</option>
		<option value="Otros">Otra</option>
	</select>

	<select name="proyecto">
		<option value="NULL">Tipo de Proyecto</option>
		<option value="Asesoria">Servício</option>
		<option value="Capacitacion">Asesorías</option>
		<option value="Diseño">Equipos</option>
		<option value="Calificacion">Otros</option>
	</select>
	
	<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Comentarios:" style="font-size: 14px"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
<label for="doc">Adjuntar un archivo:</label>
		<br>
		<input type="file" id="doc" name="doc">
<br>

	<?php if(!empty($errores)): ?>
		<div class="alert error">
			<?php echo $errores; ?>
		</div>
		<?php elseif ($enviado): ?>
		<div class="alert success">
			<p>Enviado Correctamente</p>
		</div>
		 
	<?php endif ?>
	<input type="submit" value="Enviar correo" name="submit" class="btn btn-primary">
</form>

<br>

<div class=" pb-8 header-text text-center">
							<h1 class="mb-10" style="font-size: 40px; color: #0A0D4E">Encuentranos En</h1>
				</div>

<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15905.294710163116!2d-74.0592277!3d4.7137251!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x299d3faa8480566e!2sFarmoquing+SAS!5e0!3m2!1ses!2sco!4v1562364159301!5m2!1ses!2sco" width="100%" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>

			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Acerca de nosotros</h6>
								<p>
									FARMOQUING SAS es una empresa dedicada a la prestación de servicios de validación, calificación, capacitación, diseño y asesorías en Buenas Prácticas de Manufactura vigentes.
								</p>
								<p class="footer-text">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Tocho Apps
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Síguenos</h6>
								<div class="footer-social d-flex align-items-center">
									<a href="https://www.facebook.com/farmoquing/"><i class="fa fa-facebook"></i></a>
									<a href="https://www.linkedin.com/company/farmoquing-sas/"><i class="fa fa-linkedin-square"></i></a>
									<a href="https://www.instagram.com/farmoquing/?hl=es-la"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/hexagons.min.js"></script>							
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
			<script src="js/arriba.js"></script>
		</body>
	</html>



