<?php
$courses = ['javascript', 'php'];
$wishes = ['php', 'laravel', 'javascript', 'vuejs'];

//comparamos los array y mostramos los que no estan

var_dump(array_diff($wishes, $courses));
var_dump(array_diff($courses, $wishes));    //array vacio por que courses tiene todos los elemntos de wishes

$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];
var_dump(array_diff($arrayA, $arrayB));
var_dump(array_diff($arrayB, $arrayA));