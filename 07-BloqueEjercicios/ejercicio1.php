<?php

//Crear una sesión que aumente su valor en uno o disminuya en uno en funcion
//al parametro GET counter ,si está en 1 o 0

session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

if (isset($_GET['counter'])) {
    switch ($_GET['counter']) {
        case '1':
            $_SESSION['numero']++;
            break;
        case '0':
            $_SESSION['numero']--;
            break;
        case 'salir':
            $_SESSION['numero'] = 0;
            break;
    }
}


?>
<h3>counter : <?=$_SESSION['numero']?></h3>
<a href="ejercicio1.php?counter=1">+ Counter</a>
<a href="ejercicio1.php?counter=0">- Counter</a>
<a href="ejercicio1.php?counter=salir">restart</a>

