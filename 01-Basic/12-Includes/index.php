<?php
include 'includes/cabecera.php';
//si tengo dos includes iguales esto me va a repetir 2 veces el mismo include
//para esto existe el "include_once" el cual si hay repetidos solo me lo incluye una vez.
//tambien existe el "require y require_once" a diferencia del include(que sigue cargando la página
//aunque haya un error en el archivo a incluir, el require no sigue cargando la página.
?>
        <hr/>
        <!-- Contenido -->
        <div>
            <h2>Esta es la página de inicio</h2>
            <p>Texto de prueba de la página de inicio</p>
        </div>
        <hr/>
<?php 
include 'includes/footer.php';
?>

