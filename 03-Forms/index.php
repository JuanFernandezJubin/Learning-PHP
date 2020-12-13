<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Repaso de formularios en PHP y HTML</title>
    </head>
    <body>
        <h1>Formularios en PHP</h1>
        <!--Suelen llevar:
                action >> página a la que enviara la información
                method >> suele ser GET o POST
                enctype >> aplicationxwwwformurluncoded
                        >>multipart/form-data >> que permite enviar archivos desde el 
                                                 formulario al servidor.
        -->
        <form action="" method="POST" enctype="multipart/form-data"> 
            <!-- input >>>name >>el nombre del indice que luego voy a recoger en el servidor
                algunos atributos son:
                disable='disable'
                max/minlength='5'
                autofocus='autofocus' para marcarle el foco al iniciar la page
                pattern='[A-Z]+'Para expresiones regulares
                required='required'
                placeholder + otros clasicos
                value > se auto llena con texto real
            -->
            <label for="nombre">Nombre:</label> 
            <p><input type="text" name="nombre" /></p>
            
            <label for="apellido">Apellido:</label> 
            <p><input type="text" name="apellido"/></p>
            
            <label for="boton">Botón:</label> 
            <p><input type="button" name="boton" value="Clickeame"/></p>
            
            <label for="sexo">Sexo:</label> 
            <p>
                Femenino: <input type="checkbox" name="sexo" value='femenino'/>
                Masculino: <input type="checkbox" name="sexo" value='masculino' checked="checked"/>
            </p>
            
            <label for="color">Color:</label> 
            <p><input type="color" name="color"/></p>
            
            <label for="date">Date:</label> 
            <p><input type="date" name="date"/></p>
            
            <label for="correo">Email:</label> 
            <p><input type="email" name="correo"/></p>
            
            <!-- multple nos permite seleccionar varios archivos -->
            <label for="archivo">Arhivo:</label> 
            <p><input type="file" name="archivo" multiple="multiple"/></p>
            
            <label for="numero">Número:</label> 
            <p><input type="number" name="numero"/></p>
            
            <label for="pass">Contraseña:</label> 
            <p><input type="password" name="pass"/></p>
            
            <label for="radiob">Radio button:</label> 
            <p>
                Valor1: <input type="radio" name="radiob" value="valor1"/>
                Valor2: <input type="radio" name='radiob'value="valor2"/>
            </p>
            
            <label for="web">Página Web:</label> 
            <p><input type="url" name="web"/></p>
            
            <textarea>Texto mas largo</textarea><br/>
            
            Peliculas:
            <!-- Para que en el back reciban los datos usamos value -->
            <select name="peliculas">
                <option value="Matrix">Matrix</option>
                <option value="Interestellar">Interestellar</option>
                <option value="Duro de matar">Duro de matar</option>
            </select><br/>
            
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>