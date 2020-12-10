<?php

/*
  PHP es un lenguaje debilmente tipado por ende no hace falta marcarle que tipo de variable es antes
  de definirlo
  Tipos de datos
  en php
  Enteros (int/integer) = 99
  Coma flotante / decimales (float / double) = 23.2
  Cadena de caracteres / Strings = 'texto'
  Boleano ( bool ) = true o false / 0 o 1
  nulo (null) 
  arrays o vectores = (coleccion de datos)
  objetos 
 */

    $numero = 100;
    $cadena = 'hola';
    $verdadero = true;
    $array1[] = 'primer posicion';
    $array1[] = 'segunda posicion';
    //Para obtener un tipo de datos usamos gettype()
    echo gettype($verdadero);
    echo '</br>';
    //Debugear
    //Me muestra el tipo de dato ,el lenght y el contenido
    var_dump($array1);
    echo '</br>';
    //Solo con comillas dobles me permite intercalar vars directamente
    echo "mostrando una variable $cadena";
    //Esta forma es mas optima !! php tarda mas interpretando las comillas dobles
    echo 'mostrando una variable'.$cadena;
?>