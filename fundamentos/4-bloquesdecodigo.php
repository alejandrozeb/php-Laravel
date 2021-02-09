<?php
//condicional
if (condition) {
    # code... se cumple
}elseif (condition) {
    # code... se cumple
}else{
    # code... no se cumple ninguna 
}

/* permite controlar el flujo del programa */

switch ($login) {
    case true:
        # code...
        break;
    case true:
        # code...
        break;
    default:
        # code...
        break;
}

/* es un if aninado y mas organizado */
//consulta,usuarios
foreach ($datos as $row) {
    # code...
}
//es un ciclo que recorre todo datos
$a=1;
while ($a <= 10) {
    # code...
}
///lo usamos cuando quereos que la condicion se ejecute una vez    
do {
    # code...
} while ($a <= 10);

//for
/* todas las estructuras tienen una condicion que debe ser cumplidad para parar,salir*/
for ($i=0; $i < 10 ; $i++) { 
    # code...

};