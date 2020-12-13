<?php

session_start();

//de esta manera cierro la sesión,ahora si volvemos a pagina1.php no podre acceder a la variable $_session
session_destroy();


