<?php
//include '2-greet.php';  //llamamos al archivo, si no existe nos devuele un error pero continua con el programa
//require ('2-greet.php'); // si no exite el archivo tenemos fatal error que detiene un archivo
require_once '2-greet.php';//solo lo trae una vez y evita el error si se repite
require_once '2-greet.php';
echo greet('Alejandro', 'Losing my mind');//usamos la funcion