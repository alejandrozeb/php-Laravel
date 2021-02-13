<?php
$data = 'Estudio PHP';
echo $data{1};
echo $data[0];
/* los String se pueden navegar con un array o corchetes especificando la posicion de la letra  */
echo "<br>";
$post="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex obcaecati ipsa quis rem iure fugit non laudantium amet consequuntur beatae magnam aspernatur repellat alias, provident minima suscipit, accusantium nam laborum?";

$extract = substr($post,0,200);

echo "$extract ... [ver más]";

/* podemos mostrar la cantidad de caracteres que quereramos especificando el rango(incio,final) */

$data2='javascript, php, laravel';  //campo tags
$tags=explode(', ', $data2);    //array
echo "<pre>";
var_dump($tags);

/* podemos cortar un String por ,   */

$courses = ['javascript','php','laravel'];
echo implode(', ', $courses);
/* crea un elemento String con la separacion de ,  */

$courses1= "      cursos de php";

echo "<pre>";
echo "quiero aprender $courses1";
echo "<br>";
echo "quiero aprender ".trim($courses1);
echo "<br>";
echo "quiero aprender ".rtrim($courses1);   //derecha
echo "<br>";
echo "quiero aprender ".ltrim($courses1);   //izquierda


/* elimina los espacios de los string ademas podemos especificar si los espacios de derecho o izquierda por separado */