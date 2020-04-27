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
function obtener_noticia_por_id($conexion, $id)
{
    $resultado = $conexion->query("SELECT * FROM noticia WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}
function limpiarDatos($datos){
    // Eliminamos los espacios en blanco al inicio y final de la cadena
    $datos = trim($datos);

    // Quitamos las barras / escapandolas con comillas
    $datos = stripslashes($datos);

    // Convertimos caracteres especiales en entidades HTML (&, "", '', <, >)
    $datos = htmlspecialchars($datos);
    return $datos;
}
function id_articulo($id){
    return (int)limpiarDatos($id);
}

$noticias_por_pagina = 20;

$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $noticias_por_pagina - $noticias_por_pagina : 0;
$sentencia = $conexion->prepare("SELECT * FROM noticia LIMIT $noticias_por_pagina");

$sentencia->execute();
$noticias = $sentencia->fetchAll();

$id_articulo = id_articulo(0);

$noticia = obtener_noticia_por_id($conexion, $id_articulo);
$noticia = $noticia[0];
require 'noticias.view.php';
?>