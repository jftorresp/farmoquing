<?php 

try{
    $conexion= new PDO('mysql:host=localhost;dbname=Farmoquing', 'root', '');
    }
    catch(PDOException $e){
        echo "Error" . $e->getMessage();
    }

if (!$conexion) {
	die();
}
$fecha= date("d.m.y");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {

		$carpeta_destino = 'Noticias/';
		$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);


		

		$statement = $conexion->prepare('
			INSERT INTO noticia (id, imagen, titulo, fecha, cuerpo, link)
			 VALUES (null,:imagen, :titulo, :fecha, :cuerpo, :link)
		');

		$statement->execute(array(
			':imagen' => $archivo_subido,
			':titulo' => $_POST['titulo'],
			':fecha' => $fecha,
			':cuerpo' => $_POST['cuerpo'],
			':link' => $_POST['link']
		));
		
		header('Location: noticias.php');
	}

 else {
		$error = "El archivo no es una imagen o el archivo es muy pesado";
	}

require 'subirNoticia.view.php';
?>