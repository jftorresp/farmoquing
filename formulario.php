<?php
$errores='';
$enviado='';
if(isset($_POST['submit']))
{
	$nombre= $_POST['nombre'];
	$correo= $_POST['correo'];
	$asunto= $_POST['asunto'];
	$pais=   $_POST['pais'];
	$ciudad= $_POST['ciudad'];
	$telefono= $_POST['telefono'];
	$compania= $_POST['compania'];
	$sector=$_POST['sector']; 
	$area=$_POST['area']; 	
	$proyecto=$_POST['proyecto']; 
	$informacion= $_POST['option'];
	$mensaje= $_POST['mensaje'];

		if(!empty($nombre))
		{
			$nombre= trim($nombre);
			$nombre=filter_var($nombre, FILTER_SANITIZE_STRING);

		}
		else
		{
			$errores.= 'Por favor ingresa un nombre <br />';
		}


		if(!empty($correo))
		{
			$correo=filter_var($correo, FILTER_SANITIZE_EMAIL);

			if(!filter_var($correo, FILTER_VALIDATE_EMAIL))
			{
				$errores .= 'Por favor ingresa un correo valido <br />';
			}
		}
		else
		{
			$errores.= 'Por favor ingresa un correo <br />';
		}
		if(!empty($asunto))
		{
			$asunto= trim($asunto);
			$asunto=filter_var($asunto, FILTER_SANITIZE_STRING);

		}
		else
		{
			$errores.= 'Por favor ingresa un asunto <br />';
		}

		if($pais== 'NULL')
		{
 			$errores.= 'Por favor ingresa un pais <br />';

		}

		
		if(!empty($ciudad))
		{
			$ciudad= trim($ciudad);
			$ciudad=filter_var($ciudad, FILTER_SANITIZE_STRING);

		}
		else
		{
			$errores.= 'Por favor ingresa una ciudad <br />';
		}

		if(!empty($compania)){
			$compania= trim($compania);
			$compania=filter_var($compania, FILTER_SANITIZE_STRING);

		}
		else
		{
			$errores.= 'Por favor ingresa una compañia <br />';
		}

		if(!empty($telefono))
		{
		
			
			$telefono=trim($telefono);
			$telefono= filter_var($telefono,FILTER_SANITIZE_NUMBER_INT);
			
		}
		else
		{
			$errores.= 'Por favor ingresa un numero <br />';

		}

		if($sector=='NULL')
		{
 			$errores.= 'Por favor ingresa un sector de la industria <br />';			
		}

		if($area == 'NULL')
		{
			$errores.= 'Por favor ingresa un area de trabajo <br />';
		}

		if($proyecto == 'NULL')
		{
			$errores.= 'Por favor ingresa el tipo de proyecto <br />';
		}

		if($informacion == 'Productos')
		{
			$informacion= "Productos y Servicios";
		}
		elseif ($informacion == 'Propuesta') {
						$informacion= "Propuesta comercial";
		}
		elseif ($informacion == 'visita') 
		{
						$informacion= "Visita";
		}

		if(!empty($mensaje))
		{
			$mensaje= htmlspecialchars($mensaje);
			$mensaje= trim($mensaje);
			$mensaje= stripslashes($mensaje);

		}
		else
		{
			$errores .= 'Por favor ingresa el comentarios o preguntas <br />';
		}
		if(!$errores)
		{
			$enviar_a= 'info@farmoquing.co';
			$mensaje_p = "De: $nombre \n";
			$mensaje_p .= "Correo: $correo \n";
			$mensaje_p .= "Pais: $pais \n";
			$mensaje_p .= "Ciudad: $ciudad \n";
			$mensaje_p .= "Numero de telefono: $telefono \n";
			$mensaje_p .= "Nombre de la compania: $compania \n";
			$mensaje_p .= "Sector de la industria: $sector \n";
			$mensaje_p .= "Area de trabajo: $area \n";
			$mensaje_p .= "Tipo de proyecto: $proyecto \n";
			$mensaje_p .= "Desea recibir: $informacion \n";
			$mensaje_p .= "Comentarios: " . $mensaje;

			mail($enviar_a, $asunto, $mensaje_p);
			$enviado= 'true';
			if($enviado== true)
			{
				mail($correo, "Farmoquing", "Su correo ha sido enviado satisfactoriamente, nos pondremos en contacto con usted.");
			}

		}

}


require 'vistas/formulario.view.php';
?>