<?php

/* Son partes de las funciones, van dentro de parentesis en forma de variables o constantes*/

/* sintaxis de una fuuncion con un parametro de entrada */
function greet($name)
{
    return "Hola, $name";
}

/* forma de uso */
echo greet("alejandro");

/* con referencias */

$course = 'PHP';
function path($course)
{
    $course = 'Laravel';
    echo $course;
}

path($course);  //Imprime Laravel
echo $course;   //Imprime PHP
/* $courseno cambio de valor globalmente si no localmente en la funcion */


$course = 'PHP';
function path1(&$course)//cambia el valor globalmente
{
    $course = 'Laravel';
    echo $course;
}

path1($course);  //Imprime Laravel
echo $course;

/* la referencia de $couser apunta a la variable de la funcion */

//Prederterminado

function greet1($name = 'Alejandro')    //define $name con un valor por defecto
{
    return "Hola, $name";
}
echo greet1();
echo greet1('Azbob');   //cambia el valor de Alejandro por Azbob


