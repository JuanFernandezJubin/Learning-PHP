<?php
//BUCLE WHILE
$salida = 4;
$inicio = 0;

while($inicio != $salida){
    echo '<p>entro</p>';
    echo '<br/>';
    $inicio++;
}

if(isset($_GET['numero'])){
    echo 'estoy preguntando si existe <br/>';
    //Casteo, cambio de tipo de variable
    $numero = (int)$_GET['numero'];
    $contador = 1;
    while($contador < 10){
        echo $numero .'x' .$contador .'=' .($numero*$contador) .'<br/>';
        $contador++;
    }
}

echo '<hr/>';

//DO WHILE
$edad = 18;
$contador2 = 1;
do {
    echo 'Tienes acceso al local privado' .$contador2 .'<br/>';
    $contador++;
}while($edad >= 18 && $contador <=10);


echo '<hr/>';

//FOR + break
$resultado = 0;
for ($i = 0; $i < 10; $i++) {
    if ($resultado > 30) {
        echo 'Pasamos 30';
        break;
    } else {
        echo $resultado . '<br/>';
        $resultado += $i;
    }
}
?>

