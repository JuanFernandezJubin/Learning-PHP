<?php
//Variables superglobales

//Variables de servidor
//Server IP como estoy en local host me mostrará ::1
echo '<h1>'.$_SERVER['SERVER_ADDR'].'</h1><br/>';
//El dominio
echo '<h1>'.$_SERVER['SERVER_NAME'].'</h1><br/>';
//Software del servidor
echo '<h1>'.$_SERVER['SERVER_SOFTWARE'].'</h1><br/>';
//Navegador web del cliente
echo '<h1>'.$_SERVER['HTTP_USER_AGENT'].'</h1><br/>';
//Dirección IP del cliente
echo '<h1>'.$_SERVER['REMOTE_ADDR'].'</h1><br/>';

?>