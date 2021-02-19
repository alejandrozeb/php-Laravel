<?php

class Person{
    public function greet(){
        return "HOla $this->name";
    }
}

class User{
    public $type;
}

class Admin extends Person{
    public $name = 'Administrador';
}

$user = new User;   //creamos un User
$user->type = new Admin;    //Creamos un admin que tambien tiene los atributos y metodos de Person
echo $user->type->greet();  //Admin ahora tiene greet y su propio atributo name