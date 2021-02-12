<?php

echo ' un texto de una linea varias lineas';
/* solo se imprime en una linea */

echo ' un texto de una linea varias lineas
comilla simple \' backslash \\ continuar con mas texto $variable';

/* /' usamo para mostras las comillas  */
echo "<br>";    /* salto de linea */
$name = 'Italo';
echo "Mi nombre es $name";
echo "<br>";
echo 'Mi nombre es'.$name;

/* estructuras */

$courses= [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];
echo "<br>";
echo $courses['backend'][0];    //forma de ingresar a un array
echo "<br>";
echo "{$courses['backend'][0]}"; //mostrando en una cadena con {}

echo "<br>";

/* mostrar una clase */

class User{
    public $name = 'italo';
}
$user = new User;

echo $user->name;   //forma de mostrar un atributo de una clase
echo "<br>";
echo "$user->name quiere aprender {$courses['backend'][0]}";

/* variables variables */

$courses1=['backend' => 'PHP'];

$teacher = 'italo';
$italo = 'profesor de php';
echo $$teacher;
echo "<br>";
echo "$teacher es ${$teacher}";
echo "<br>";


function getTeacher()
{
    return 'teacher';
}

$teacher = 'italo';

echo "${getTeacher()} enseña PHP";