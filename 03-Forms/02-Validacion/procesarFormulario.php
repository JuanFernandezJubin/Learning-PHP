<?php
//Para testear este segundo filtro,pasa por params error=tipoDeError
$error = 'faltan_valores';
//Segundo filtro de validaciones
if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    $error = 'ok';
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int)$_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //Validando en back - preg_match para regex
    if (!is_string($nombre) || preg_match('/[0-9]+/', $nombre)) {
        $error = 'nombre';
    }
    if (!is_string($apellidos) || preg_match('/[0-9]+/', $apellidos)) {
        $error = 'apellidos';
    }
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'edad';
    }
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email';
    }
    if (empty($pass) || strlen($pass) < 5) {
        $error = 'password';
    }
} else {
    header("Location:index.php?error=$error");
}

if ($error != 'ok') {
    header("Location:index.php?error=$error");
}
?>

<!DOCTYPE HTML>
<html lang='es'>
    <head>
        <meta charset="utf-8"/>
        <title>Validación de formularios</title>
    </head>
    <body>
        <!--if ternario-->
        <?php if ($error == 'ok') : ?>
            <h1>Datos del usuario: </h1>
            <p><?= $nombre ?></p>
            <p><?= $apellidos ?></p>
            <p><?= $edad ?></p>
            <p><?= $email ?></p>
        <?php endif; ?>
    </body>
</html>
