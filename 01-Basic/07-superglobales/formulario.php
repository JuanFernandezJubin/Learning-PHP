<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>title</title>
    </head>
    <body>
        <h1>Formulario en PHP by GET</h1>
        <form method="GET" action="recibir.php">
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" />
            </p>
            <p>
                <label for="apellido">Apellido: </label>
                <input type="text" name="apellido" />
            </p>
            
            <input type="submit" value="enviar" />
        </form>
        <br/>
        <h1>Formulario en PHP by POST</h1>
        <form method="POST" action="recibir.php">
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" />
            </p>
            <p>
                <label for="apellido">Apellido: </label>
                <input type="text" name="apellido" />
            </p>
            
            <input type="submit" value="enviar" />
        </form>
        
    </body>
</html>
