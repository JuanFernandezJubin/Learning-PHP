<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Imprimir por pantalla</title>
    </head>
    <body>
        <!-- esto es un atajo en php para usar echo directamente -->
        <?='Bienvenido:'?>
        <h1>Imprimir por pantalla php</h1>
        <!-- etiqueta de apertura y cierre -->
        <?php
            //comentarios en php
            echo '<h2>Lista de videojuegos:</h2>';
            echo '<ul>'
                    .'<li>GTA</li>'
                    .'<li>FIFA</li>'
                    .'<li>DESOLATE</li>'
                    .'</ul>';
            echo '<p>Esta es toda' . 'una ' . 'lista de juegos</p>'
        ?>
    </body>
</html>


