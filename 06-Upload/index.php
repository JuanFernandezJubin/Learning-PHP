<!DOCTYPE HTML >
<html>
    <head>
        <meta charset="utf-8"/>
        <title>title</title>
    </head>
    <body>
        <h1>Subida de archivos en PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo"/>
            <input type="submit" value="Enviar"/>
        </form>
        <h1>Listado de imágenes</h1>
        <?php
         $gestor = opendir('./images');
         if($gestor){
             //Recorriendo ficheros del directorio
             while (($image = readdir($gestor))!== false){
                 //Al leer el directorio lee los . y .. cuidado aca
                 if($image != '.' && $image !='..'){
                     echo "<img src='images/$image' width='200px'/><br/>"; 
                 }
             }
         }
        ?>
    </body>
</html>

