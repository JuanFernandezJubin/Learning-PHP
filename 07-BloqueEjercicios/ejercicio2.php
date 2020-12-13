<?php

/* 
 Ejercicio 2
 * 1. Una función
 * 2. La función debe validar un email con filter_var
 * 3. Utilizar esta funcion y recoger una variable por get y validarla
 * 4. Mostrar el resultado
 */

function validateEmail($email){
    $status = 'No válido';
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        $status = 'Válido';
    }
    
    return $status;
}

if(isset($_GET['email'])){
    $response = validateEmail($_GET['email']);
    echo '<h1>'.$response.'</h1>';
}else{
    echo 'No hay email a validar';
}
