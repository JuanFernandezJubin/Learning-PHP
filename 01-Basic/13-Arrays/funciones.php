<?php
//Funciones para arrays
echo '<h1>Funciones para Arrays</h1>';
//Ordenando
echo '<h1>Sorting</h1><hr/>';
$cantantes = ['2Pac','Bob M','Apache','Drake'];
var_dump($cantantes);
echo '<hr/>';
asort($cantantes);//orden alfabético
var_dump($cantantes);
echo '<hr/>';
arsort($cantantes);//orden alfabético inverso
var_dump($cantantes);
echo '<hr/>';
sort($cantantes);//orden alfabético tambien sirve para números
var_dump($cantantes);
echo '<hr/>';
$numeros = [3,6,7,1,2,4];
var_dump($numeros);
echo '<hr/>';
sort($numeros);
var_dump($numeros);
echo '<hr/>';

//Manipulando
//formas de push
echo '<h1>Manipulate</h1><hr/>';
$cantantes[]='BB King';//forma 1
array_push($cantantes,'M. Jackson');
var_dump($cantantes);
echo '<hr/>';
//formas de eliminar
echo '<h1>Delete</h1><hr/>';
array_pop($cantantes);//clásico para quitar el ultimo
var_dump($cantantes);
echo '<hr/>';
unset($cantantes[2]);//quito el del índice seleccionado
var_dump($cantantes);
echo '<hr/>';
//sacar elemeno aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];
echo '<hr/>';
//Reverse

var_dump(array_reverse($cantantes));

//Search
echo '<h1>Search</h1><hr/>';
$resultado = array_search('Drake', $cantantes);
echo $resultado;
echo '<hr/>';
//Contando
echo '<h1>Count</h1><hr/>';
$resultado = count($cantantes);
echo $resultado;
echo '<hr/>';
$resultado = sizeof($cantantes);//igual que count
echo $resultado;
echo '<hr/>';
?>