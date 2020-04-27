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
			<link rel="stylesheet" href="css/not.css">
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
				          <li><a href="noticias.php" id="activo">Noticias</a></li>
			              <li><a href="formularioL.php">Contacto</a></li>
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

<div class=" pb-8 header-text text-center">
							<h1 class="mb-10 text-center" style="font-size: 50px; color: #0A0D4E">Noticias</h1>
							</div>
<?php $contador=0 ;?>

<?php foreach($noticias as $noticia):?>
	<div class="post">
			<article>
				<h2 class="titulo"><?php echo $noticia['titulo'];?></h2>
				<p class="fecha"><?php echo $noticia['fecha'];?></p>
				<div class="thumb">
					<a href="http://valtria.com/wp-content/uploads/2016/03/Los-nuevos-cambios-en-ISO-14644-1.pdf">
						<img src=<?php echo $noticia['imagen'];?>>
					</a>
				</div>
				<p class="extracto"><?php echo $noticia['cuerpo'];?></p>
				<a href=<?php echo $noticia['link'];?> class="continuar">Continuar Leyendo</a>
			</article>
		</div>

		<br>
		<br>
<?php endforeach;?>




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
