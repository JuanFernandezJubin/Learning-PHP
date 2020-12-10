<?php


//Para mostrar el valor de las coockies debo usar $_COOKIE es un array asosiativo

if(isset($_COOKIE['miCookie'])){
    echo '<h1>'.$_COOKIE['miCookie'].'</h1>';
}else{
    echo '<h1>No existe la cookie</h1>';
}

if(isset($_COOKIE['oneYear'])){
    echo '<h1>'.$_COOKIE['oneYear'].'</h1>';
}else{
    echo '<h1>No existe la cookie</h1>';
}

?>
<a href="crearCookies.php">crear cookies</a>
<a href="borrarCookies.php">borrar cookies</a>

