<?php
//Funciones
function muestraNombre(){
    //Malas prácticas pero sirven de ejemplo
    echo 'Juan Ignacio <br/>';
    echo 'Jose <br/>';
    echo 'Antonela <br/>';
    echo 'María <br/>';
    
}

function muestroUnNombre($parametro){
    echo 'Mi nombre es '.$parametro .'<br/>';
}

function multiplicar($x , $y){
    echo $x .' x ' .$y .' = '.($x * $y);
}

function probandoReturn($nombre){
    return 'El nombre es '.$nombre .'<br/>';
}

muestraNombre();
muestroUnNombre('Jose María');
$nombre = 'Roberto';
muestroUnNombre($nombre);
multiplicar(5 , 4);

echo '<br/>'; 

echo probandoReturn('Maria');
$miNombreEs = probandoReturn('Mario');
echo $miNombreEs;

//Funciones pre-definidas de PHP
echo isset($nombre);//devuelve 1 /true o nada /false

?>