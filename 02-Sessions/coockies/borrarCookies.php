<?php

//Borrando cookies
if($_COOKIE['miCookie']){
    unset($_COOKIE['miCookie']);//unset para borrar
    //tener en cuenta que necesitamos tambien CADUCAR la misma
    setcookie('miCookie','',time()-100);//al restarle lo que sea la caduca
}

//Redireccionamos

header('Location:verCookies.php');

