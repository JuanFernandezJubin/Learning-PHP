<?php

//Open Files
//fopen(archivo, modo:"r"(lectura)"w"(escritura)"x"(ejecución)"a+" o aplus,nos permite leer y escribir)
$archivo = fopen('archivotexto.txt', 'a+');

//Read File
while (!feof($archivo)) {
    $contenido = fgets($archivo); //Lee por linea,por esto lo metemos dentro de un while
    echo $contenido.'<br/>';
}

//Write file
fwrite($archivo, 'soy un texto metido desde php');

//Close File
fclose($archivo);

//                          OTRAS CARACTERISTICAS
//Copiar un archivo
//copy('archivotexto.txt', 'archivocopiado.txt') or die('Error al copiar');

//Renombrar
//rename('archivocopiado.txt,'archivorenombrado.txt);

//Eliminar un archivo
//unlink('archivorenombrado.txt')or die('Error al eliminar');

//Existe?
if(file_exists('archivotexto.txt')){
    echo 'Existe';
}else{
    echo 'No existe';
}



?>
