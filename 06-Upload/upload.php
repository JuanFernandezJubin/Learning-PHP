<?php

//Utilizamos $_FILES

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];
/*
  var_dump($archivo);
  die();
 */
if ($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/gif') {

    if (!is_dir('/images')) {
        mkdir('/images',0777);
    }

    //movemos el archivo "images" y le concatenamos el nombre que queremos que tenga ese fichero
    //                 nombre temporal , directorio final + nombre
    move_uploaded_file($archivo['tmp_name'], 'images/' . $nombre);
    header('Refresh: 5; URL=index.php');
    echo '<h1>Imagen subida correctamente</h1>';
} else {
    //Redirección despues de 5 segundos a index.php
    header('Refresh: 5; URL=index.php');
    echo '<h1>No aceptamos este tipo de imagen,por favor elija otra</h1>';
}
?>

