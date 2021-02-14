<?php

require __DIR__.'./vendor/autoload.php';

var_dump(App\Validate::email('a@correo.com'));
var_dump(App\Validate::email('https\\platzi.com'));