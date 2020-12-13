<?php
//variable global
$frase = 'Ni los genios son tan genios, ni los mediocres tan mediocres';

function imprimoGlobal(){
    //A diferencia de JS necesito marcarle la variable global a utilizar
    global  $frase;//scope global
    echo '<h1>'.$frase.'</h1><br/>';
    $year = 2020;//en scope local
    echo $year;
}

imprimoGlobal();


