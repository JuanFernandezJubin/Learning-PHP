<?php
//Almacenando y persistiendo datos del usuario mientras navega en nuestra web 
//hasta que cierre la sesión o cierre el navegador
//Los navegadores modernos (algunos) persisten la sesión por eso necesitamos cerrarla.

//Iniciar sesión
session_start();

//Variable normal
$variable_normal = 'Hola soy una cadena de texto';

//variable de sesión
$_SESSION['variable_persistente']='Hola soy una variable de sesión';
echo $variable_normal.'<br/>';
echo $_SESSION['variable_persistente'];
?>

