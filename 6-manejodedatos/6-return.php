<?php
/* return, retorno de valores */

function greet()
{
    //return "Hola...";   //nos ayuda a retorna el resultado de la funcion
    return ['PDF', 'vista'];    //podemos retornar varios valores
}

//echo greet();

var_dump(greet());  //mostramos arrays con vardump con echo solo muestra el tipo de dato

exit(); //detine el sistema
//return  retorna el resultado

/* php no restringe pero debemos usar buenas paracticas */