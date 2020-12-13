<?php
//Arrays
$peliculas = array('Batman','Superman','El secreto de sus ojos','Interestellar','Corazón valiente');
var_dump($peliculas);
echo '<br/>';
var_dump($peliculas[2]);//accediendo al índice
echo '<br/>';
//otra forma de definir(clásica)
$cantantes = ['2Pac','Bob M','Apache'];
echo $cantantes[0];
echo '<br/>';
//Recorriendo arrays
echo '<hr/><h1>CLASSIC FOR</h1><br/>';
for($i=0;$i < count($cantantes); $i++){ //me saca la cantidad de elementos
    echo '<h1>'.$cantantes[$i].'</h1><br/>';
}

//foreach(L)
echo '<hr/><h1>FOREACH</h1><br/>';
foreach ($cantantes as $cantante) {
    echo '<h1>'.$cantante.'</h1><br/>';
}

//Arrays Asociativos
echo '<hr/><h1>Array Asociativos</h1><br/>';
$persona = array(
    'nombre'=> 'Juan Ignacio',
    'apellido'=> 'Fernandez Jubin',
    'web' => 'www.blabla.com'
);
var_dump($persona);
echo '<br/>';
var_dump($persona['web']);
echo '<hr/>';

//Arrays multidimensionales
echo '<h1>Arrays Multidimensionales</h1>';
$contactos = array(
    array(
        'nombre'=> 'Antonio Robles',
        'email'=> 'arobles@arobles.com'
    ),
    array(
        'nombre'=> 'Juan Fernandez',
        'email'=> 'fernandez@google.com'
    ),
    array(
        'nombre'=> 'Maria Nieves',
        'email'=> 'neves@nieves.com'
    ),
);

var_dump($contactos);
echo '<br/>'.$contactos[1]['nombre'];//Ejemplo de acceso.
foreach ($contactos as $contact){
    echo '<br/>'.$contact['nombre'] .' ' .$contact['email'];
};
?>