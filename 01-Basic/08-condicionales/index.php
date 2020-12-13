<?php
//Condicionales
$color = 'rojo';

if($color == 'rojo'){
    echo 'El color es rojo';
}else {
    echo 'El color no es rojo';
}
//Operadores de comparacion:
//Los clásicos: == ,===, !== , < , <== , > ,>== ,

echo '<hr />';

//ELSEIF

$dia = 1;

if($dia == 1){
    echo 'LUNES';
}elseif($dia == 2){
    echo 'MARTES';
}else{
    echo 'NO ES LUNES NI MARTES';
}

echo '<hr />';

// OR ||      AND &&      NOT !         
$edad1 = 18;
$edad2 = 64;
$edadOficial = 20;

if($edadOficial >= $edad1 && $edadOficial <= $edad2){
    echo 'esta en edad de trabajar';
}else{
    echo 'no esta en edad de trabajar';
}

echo '<hr />';

//SWITCH

$dia = 4;
switch ($dia){
    case 1:
        echo 'LUNES';
        break;
    case 2:
        echo 'MARTES';
        break;
    case 3:
        echo 'MIERCOLES';
        break;
    case 4:
        echo 'JUEVES';
        break;
    case 5:
        echo 'VIERNES';
        break;
    default:
        echo 'FIN DE SEMANA';
       
}

echo '<hr />';

//GOTO
goto marca;
echo '<h3>Instrucción 1</h3>';
echo '<h3>Instrucción 2</h3>';
echo '<h3>Instrucción 3</h3>';
echo '<h3>Instrucción 4</h3>';

//se marca con :
marca:
    echo'<h3>me he saltado 4 intrucciones</h3>';

 ?>


