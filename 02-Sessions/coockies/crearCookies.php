<?php

/* 
Como sabemos las cookies se almacenan den el cliente por ende son inseguras y no recomendables
Tienen el fin de guardar datos o rastrear el comportamiento de "por ejemplo" el usuario.
 */

//Crear Cookies
//setcookie("nombre","valor que solo puede ser texto",caducidad,ruta,dominio)

//Cookie básica
setcookie('miCookie', 'valor de mi cookie');

//Cookie con expiración                              inicio*segundos*minutos*horas*días
setcookie('oneYear', 'valor de mi cookie de 365 días', time() + (60 * 60 * 24 * 365));

header('Location:verCookies.php');
?>

