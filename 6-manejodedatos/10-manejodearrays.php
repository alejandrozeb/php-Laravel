<?php
 
$courses = [
    10 =>'php', 
    100 => 'javascript', 
    1000 => 'laravel'];
//ordenado
sort($courses);
var_dump($courses);
//orden descendente
rsort($courses);
var_dump($courses);
//orden de key
ksort($courses);
var_dump($courses);
//descendente
krsort($courses);
var_dump($courses);

//para cortar un array, con el segundo argumento indicamos que elemento se va a cortar 
var_dump(array_slice($courses,1));

//toma pedazos en grupos, con el segundo argumento indicamos de que tamaño seran los grupos o bloques 
var_dump(array_chunk($courses,2));

$courses = ['php', 'javascript', 'laravel'];
//elimina el primer elemento del array y lo devuelve como valor
var_dump(array_shift($courses));
var_dump($courses);


$courses = ['php', 'javascript', 'laravel'];
//elimina el ultimo elemento y lo devuelve
var_dump(array_pop($courses));
var_dump($courses);

$courses = ['php', 'javascript', 'laravel'];
//agregar un elemento al incio del array
array_unshift($courses,'Python');
var_dump($courses);

$courses = ['php', 'javascript', 'laravel'];
//agregar un elemento al final del array
array_push($courses,'Python');
var_dump($courses);

$courses = [
    'backend' => 'php', 
    'frontend' => 'javascript'
];
//cambia los valores por keys y los keys por valores, devuelve un nuevo array no modifica el original
var_dump(array_flip($courses));