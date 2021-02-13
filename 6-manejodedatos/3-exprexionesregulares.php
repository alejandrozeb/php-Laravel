<?php
/*  expresiones regulares
    /: contenedor inicio y final
    ^: Inicio
    $: Final
    -: Rango
    []: Patron
    {}: Condicion
  */

 $password = '123456';
/* limita {6,9} el numero de caracteres, [0-9] el rango de caracteres que se aceptan */

 var_dump((bool)preg_match('/^[0-9]{6,9}$/',$password));

 /* podemos usar expresiones regulares ya establecidas */