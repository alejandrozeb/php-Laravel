<?php
/* arrays o vectores, perimte guardar datos ordenados de 0 a n */
/* insttancia de un array (creacion del tipo de dato) */
$courses= [
    'javascript', 
    'laravel', 
    'php', 
    10=> 'Django',//asignamos la posicion en el array
    'vuejs'
];
echo "<pre>";
var_dump($courses);

/*  un array tanbien es un elemento que no se identifica de forma diirecta */

/* arraysimple es auel que no se le asigna un key, solo tiene valores */