<?php

$courses= [
    'frontend'=>'javascript', 
    'Framework' => 'laravel', 
    'Backend' => 'Php'
];

var_dump($courses);
echo "<br>";
foreach ($courses as $key => $value) {
    echo "$key : $value";
}
/* ingresamos a la llave y al valor */
echo "<br>";
foreach ($courses as $course) {
    echo "$course";
}
/* solo el valor */

/* nos permite caminar a traves del array */
function upper($course){ //($courses,$key) para usar el key
    echo strtoupper("$course <br>");
}
//enviamos un valor del array y la funcion del proceso en cada iteracion
array_walk($courses, 'upper');


//para encontrar un key o comprobar existencia
array_key_exists('frontend', $courses);
//para encontrar un valor
in_array('javascript', $courses);
//para mostrar todos los keys
array_keys($courses);
//para mostrar todos los valores
array_values($courses);
//