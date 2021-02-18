<?php

class User{
    public $type;
}

class Admin{
    public function greet(){
        return "Hola Administrador";
    }
}

$user = new User;
$user->type = new Admin;    //creamos un objeto llamado admin 
echo $user->type->greet();  //usamos el metodo de admin