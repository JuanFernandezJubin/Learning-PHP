<!DOCTYPE HTML>
<html lang='es'>
    <head>
        <meta charset="utf-8"/>
        <title>Validación de formularios</title>
    </head>
    <body>
        <h1>Validar formularios en PHP</h1>
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                
                switch ($error){
                    case 'faltan_valores':
                        echo '<strong style="color:red">Faltan datos en los campos del formulario</strong>';
                        break;
                    case 'nombre':
                        echo '<strong style="color:red">Error en nombre</strong>';
                        break;
                    case 'apellidos':
                        echo '<strong style="color:red">Error en apellidos</strong>';
                        break;
                    case 'email':
                        echo '<strong style="color:red">Error en email</strong>';
                        break;
                    case 'edad':
                        echo '<strong style="color:red">Error en edad</strong>';
                        break;
                    case 'pass':
                        echo '<strong style="color:red">Error en contraseña</strong>';
                        break;
                }
            }
        ?>
        <!--Primer filtro de validaciones-->
        <form method="POST" action="procesarFormulario.php">
            <label for="nombre">Nombre:</label><br/>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z ]+"/><br/>
            
            <label for="apellidos">Apellidos:</label><br/>
            <input type="text" name="apellidos" required="required" pattern="[A-Za-z ]+"/><br/>
            
            <label for="edad">Edad:</label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"/><br/>
            
            <label for="email">Email:</label><br/>
            <input type="email" name="email" required="required" /><br/>
            
            <label for="pass">Contraseña:</label><br/>
            <input type="password" name="pass" required="required"/><br/>
            
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>