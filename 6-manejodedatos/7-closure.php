<?php
/* closure funciones anonimas, no requieren un nombre*/


$greet =  function ($name)
{ // se usa en una variable que requiere logica
    return "Hola, $name";
};

echo $greet('Alejandro');

/* Ejemplo */

function greet1(Closure $lang, $name){  //asignamos comouna funcion anonima con CLosure
    return $lang($name);
}

$es = function ($name)
{
    return "Hola, $name";
};

$en = function ($name)
{
    return "Hello, $name";
};
//funciones anonimas necesitamos el ; al final

echo greet1($es, 'Lynda');
echo greet1($en, 'Lynda');