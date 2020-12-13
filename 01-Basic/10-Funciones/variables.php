<?php
//Funciones Variables

function saludo(){
    return 'Hola!';
}
function buenasTardes(){
    return 'Buenas Tardes';
}
function buenasNoches(){
    return 'Buenas Noches';
}

$horario = 'buenasNoches';
$horario(); //Imprime lo que hay dentro de nuestra funcion buenasNoches
$tardes = 'Tardes';
$myFunction = 'buenas'.$tardes();//cosita interesante
echo myFunction();

?>