<?php
//Debugear
$nombre = 'Juan';
var_dump($nombre);

//Fechas
echo date('d-m-Y');
echo '<br/>';
echo time();

//Matemáticas
echo sqrt(10); //Raiz cuadrada
echo '<br/>';
echo rand(10,40);     //Random entre 10 y 40
echo '<br/>';
echo  pi();//Numero PI
echo '<br/>';
echo round(7.879215,2);//Redondeo 8 o le indico la precisión,numero de decimales 2do arg
echo '<br/>';

//Mas funciones
echo gettype($nombre);
echo '<br/>';
//is_
if(is_bool($nombre)){
    echo 'es booleano';
}else {
    echo 'no es booleano';
}
echo '<br/>';
if(isset($marcoPolo)){
    echo 'Existe';
}else{
    echo 'No existe';
}
echo '<br/>';
$frase = '    contenido     ';
echo trim($frase);//limpiamos la variable de espacios en los costados
echo '<br/>';

//Eliminar variables o índices de arrays
$year = 2020;
unset($year);//elimina el nombre tanto como su contenido del código

//Comprobar variable vacía
$texto = '';
if (empty($texto)){
    echo 'la variable esta vacía';
}else {
    echo 'la variable tiene contenido';
}
echo '<br/>';

//Strings
$texto = 'abcdef';
echo strlen($texto);
$frase = 'La vida es bella';
echo strpos($frase, 'vida');//haystack , needle
echo '<br/>';
$frase = str_replace('vida', 'moto', $frase);
echo $frase;
echo '<br/>';
echo strtolower($frase);
echo '<br/>';
echo strtoupper($frase);
echo '<br/>';
?>