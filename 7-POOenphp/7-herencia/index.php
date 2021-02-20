<?php

class User{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    final public function getName2(){//evitamos que reescriba o sobrescriba el metodo en una clase heredada con final
        return $this->name;
    }
}
//una clase tambien puede ser final, para poder evitar herencia, restringimos la herencia

//una clase abstracta no se puede instanciar

class Admin extends User{
    //...

    public function getName(){
        return "Soy $this->name";
    }
}//obtiene las propiedades y metodos de User


$user = new User('Alejandro');
echo $user->getName();

echo "<br>";
$admin = new Admin('Alejandro');
echo $admin->getName();