<?php

if(! function_exists('upper')){
    function upper($value){
        return Text\Format::upperText($value);
    }
}

// usa la clase format pero no lo sabe el helper
/* Text\Format  mediante este namespace configurado en composer.json podemos acceder a la clase Format*/

if(! function_exists('lower')){
    function lower($value){
        return Text\Format::lowerText($value);
    }
}


/* con el if validamos si la funcion ya esta cargada, en caso la funciona ya este cargada no lo hara de nuevo */
