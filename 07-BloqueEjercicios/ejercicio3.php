<?php
/*
  Ejercicio 3
  Calculadora con formulario, 2 input, y 4 botones. + - * /
 */

if (isset($_POST['n1']) && isset($_POST['n2'])) {
    $resultado = false;
    if (isset($_POST['sumar'])) $resultado = ($_POST['n1'] + $_POST['n2']);
    if (isset($_POST['restar'])) $resultado = ($_POST['n1'] - $_POST['n2']);
    if (isset($_POST['multiplicar'])) $resultado = ($_POST['n1'] * $_POST['n2']);
    if (isset($_POST['dividir'])) $resultado = ($_POST['n1'] / $_POST['n2']);
}

//var_dump($_POST);
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Calculadora PHP</title>
    </head>
    <body>
        <h1>Calculadora PHP</h1>
        <form action="" method="POST">
            <label for="n1">Numero 1</label><br/>
            <input type="number" name="n1"><br/>

            <label for="n2">Numero 2</label><br/>
            <input type="number" name="n2"><br/>

            <input type="submit" value="+" name="sumar" />
            <input type="submit" value="-" name="restar" />
            <input type="submit" value="*" name="multiplicar" />
            <input type="submit" value="/" name="dividir" />
        </form>

        <?php
        if ($resultado) {
            echo "<h2>$resultado</h2>";
        }
        ?>
    </body>
</html>
