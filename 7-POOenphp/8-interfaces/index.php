<?php

interface Person {  //database,get,delete,store
    public function getName();
}

class Admin implements Person{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

$admin = new Admin('Admin');
echo $admin->getName();

/* por que crear un interface si no podriamos llegar a necesitarlo */

/* Una interce es un contratos 
en el core de php todos las intercaes se guardan en una carpeta llamada contrato, y la clase eta obligada a implementar.
tambien se podria decir que en una interface se declara toda la logica para que sea desarrollada en clases.

*/

