<?php
    //Constantes
    define('nombre','Juan Ignacio Fernandez');
    define('web','www.juan.com');
    
    //las constantes de muestran sin el $
    echo nombre .'</br>';
    echo web .'</br>';
    
    //Constantes pre-definidas:
    
    //Version de php con la que estoy trabajando
    echo PHP_VERSION.'</br>';
    //Sistema operativo en el que estoy trabajando
    echo PHP_OS.'</br>';
    //Line
    echo __LINE__ .'</br>';
    //Ruta del archivo
    echo __FILE__.'</br>';
    
    function holaMundo(){
        //Muestra en que funcion me encuentro
        echo __FUNCTION__;
    };
    
    holaMundo();
?>
