<?php

abstract class Base{
    protected $name;

    private function getClassName(){
        return get_called_class();  //lama el nombre de la clase
    }

    public function login(){
        return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
    }
}

class Admin extends Base{
    public function __construct($name){
        $this->name = $name;
    }
}

class User extends Base{
    public function __construct($name){
        $this->name = $name;
    }
}

class Guest extends Base{
    protected $name = 'invitado';
}

$guest = new Guest();
echo $guest->login();
echo "<br>";

$user = new User('Alejandro');
echo $user->login();

echo "<br>";
$admin = new Admin('Zeballos');
echo $admin->login();

/* el elemento base es polimorficoo porque depedende de las  demas clases */