<!DOCTYPE html>

<html>

<head>

	<title>Iniciar Sesión</title>

	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="css/main3.css">

	<link rel="shortcut icon" type="image/x-icon" href="imagenes/tuerca.ico">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">

</head>



<body>



	<br>



	<h1 align="center">Iniciar Sesión</h1>

	<br>



	<div class="wrap">

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">

	<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario:">

	<input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña:" value="">

	<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>



	<?php if(!empty($errores)): ?>

		<div class="alert error">

			<?php echo $errores; ?>

		</div>

		



	<?php endif ?>

	</form>


</body>

</html>