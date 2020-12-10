<?php
    //Operadores aritméticos
    $numero1 = 55;
    $numero2 =33;
    echo '<h3>Operadores aritméticos</h3><br/>';
    echo 'Suma: ' .($numero1 + $numero2).'<br/>';
    echo 'Resta: ' .($numero1 - $numero2).'<br/>';
    echo 'División: ' .($numero1 / $numero2).'<br/>';
    echo 'Multiplicación: ' .($numero1 * $numero2).'<br/>';
    echo 'Módulo o Resto: ' .($numero1 % $numero2).'<br/>';
    
    //Operadores de incremento y decremento
    echo '<h3>Operadores de incremento y decremento</h3><br/>';
    $year = 2019;
    echo '<h1>'.$year.'</h1><br/>';
    ++$year;//Pre-Incremento
    echo '<h1>'.$year.'</h1><br/>';
    $year++;
    echo '<h1>'.$year.'</h1><br/>';
    --$year; //Pre-Decremento
    echo '<h1>'.$year.'</h1><br/>';
    $year--;
    echo '<h1>'.$year.'</h1><br/>';
    $year;
    echo '<h1>'.$year.'</h1><br/>';
    
    //Operadores de asignación
    echo '<h3>Operadores de asignación</h3><br/>';
    $edad = 31;
    echo $edad.' edad <br/>';
    echo ($edad+=5).' edad + 5<br/>';
    echo ($edad-=10).' edad - 10<br/>';
    echo ($edad*=10).' edad * 10<br/>';
    echo ($edad/=10).' edad / 10<br/>';

?>

