<?php

//Tenemos que iniciar la sesión en todas las paginas donde querramos usar nuestras variables
//de sesión.
session_start();

//no podremos acceder a las variables de otras paginas pero SI a las de la sesión
//echo $variable_normal; -->tira error

echo $_SESSION['variable_persistente'];//me la muestra perfectamente
