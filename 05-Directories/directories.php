<?php

//Creando directorios
if (is_dir('mi_carpeta')) {
    echo 'ya existe la carpeta';
} else {
// nombre carmeta , permisos.(0777 todos los permisos)
    mkdir('mi_carpeta', 0777) or die('Error al crear la carpeta');
}

//Borrando directorios
rmdir('mi_carpeta');

//Recorriendo directorios
if($gestor = opendir('./mi_carpeta')){
    while(($archivo = readdir($gestor))!==false){
        echo $archivo.'<br/>';
    }
}
