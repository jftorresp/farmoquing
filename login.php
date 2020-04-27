<?php

try{
	// connection to DB 
    }
    catch(PDOException $e){
        echo "Error" . $e->getMessage();
    }

if($_SERVER['REQUEST_METHOD']== 'POST')
{
    $user=$_POST['usuario'];
    $pass=$_POST['contraseña'];
    $verify = $conexion->prepare('
			SELECT user FROM admin WHERE user= :user AND pass= :pass
		');
    $verify ->execute(array(':user' => $user,
    							':pass' => $pass
    	));
    $result = $verify->fetch();

    if($result !== false)
    {
       
    	header('Location: subirNoticia.php');
        
    }
    else
    {
    	$errores .= "Información incorrecta";
    }
    echo '$result';
}
require 'login.view.php';
?>   
