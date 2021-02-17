<?php

$frontend = ['javascript'];
$backend = ['php', 'laravel'];
//uniendo dos arrays
var_dump($frontend + $backend);
//sumamos los arrays para unir pero los keys iguales se reemplazan 

$frontend = [
   'frontend' => 'javascript'
];
$backend = [
   'backend' => 'php', 
    'framework' => 'laravel'
];
var_dump($frontend + $backend);
//para evitar ese efecto añadimos keys pero no es los mas optimo

$frontend = ['javascript'];
$backend = ['php', 'laravel'];
var_dump(array_merge($frontend,$backend));
//para keys numericos usamos merge 

$frontend = [
    'a' => 'javascript'
 ];
 $backend = [
    'a' => 'php', 
    'b' => 'laravel'
 ];

 var_dump(array_merge_recursive($frontend,$backend));
 //para arrays con keys establecidos, agrupa por key en un array grande

 $courses = ['javascript', 'php', 'laravel'];
 $categories = ['front', 'back', 'framework'];
 var_dump(array_combine($categories, $courses));
 //combina lso arras, en el orden de los arrays 0,0 1,1 2,2 ...
 