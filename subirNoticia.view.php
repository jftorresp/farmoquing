<!DOCTYPE html>

<html>

<head>

	<title>Crear Oferta</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, user-scalable=no,

	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">



	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	 <link rel="stylesheet" href="css/subirrr.css">  

	 <link href="css/bootstrap.min.css" rel="stylesheet"> 

	 <link href="css/material.min.css" rel="stylesheet">

    <link href="css/ripples.min.css" rel="stylesheet">

    <link href="css/responsive.css" rel="stylesheet">

    <link href="css/animate.min.css" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="img/icono.ico">

	

</head>



<body>



<br>

<br>

<br>

<br>

<br>

<br>

	<div class="contenedor">



		<div class="ofer">

		<h3 id="text">Subir una noticia</h3>

		</div>

		<br>

		<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="subir">

			<label for="titulo">Titulo</label>

			<input type="text" id="titulo" name="titulo">


            <br>
			<label for="foto">Seleccione la foto:</label>
    
			<input type="file" id="foto" name="foto">



            <br>
			<label for="texto">Cuerpo:</label>

			<input type="text-area" id="cuerpo" name="cuerpo" placeholder="Cuerpo:" >

<label for="texto">Link:</label>

      <input type="text-area" id="link" name="link" placeholder="Link:" >

			<?php if (isset($error)): ?>

				<p class="error"><?php echo $error; ?></p>

			<?php endif ?>

            <br>
            <br>
            <br>
			<i class="submit-btn fa fa-arrow-right" onclick="subir.submit()"></i>



		</form>

	</div>



	<div class="content-wrap">

    	<header class="hero-area" id="home">

      

      <div class="container">

         

          

          <div class="col-md-12">



            <div class="navbar navbar-inverse sticky-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">

              <div class="container">

                <div class="navbar-header">

                  <!--<a class="logo-left " href="index.html"><i class="mdi-image-timelapse"></i>UWork</a> -->

                  <a href="index.php" class="logo-left"><img src="img/logo2.png" alt="" width="40%"></a>

                </div>

                

              </div>

            </div>            

        </div>  

      </div>

    	</header>

    </div>



	<script src="js/jquery-2.1.4.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/ripples.min.js"></script>

    <script src="js/jquery.mmenu.min.all.js"></script> 

    <script src="js/count-to.js"></script>   

    <script src="js/jquery.inview.min.js"></script>     

    <script src="js/main.js"></script>

    <script src="js/classie.js"></script>

    <script src="js/jquery.nav.js"></script>      

</body>

</html>