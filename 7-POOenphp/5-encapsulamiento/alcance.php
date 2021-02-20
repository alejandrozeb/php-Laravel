<?php

class User{
    //public 
    //protected 
    //private
    /* se pueden crear contantes, variables, metodos y funciones */
    public const PAGINATE = 25;
    //las contantes se escriben en mayusculas

    public $username; // es publico pueden acceder a esta variable otras clases

    protected $username2; //solo pueden acceder las clases que hereden de esta

    private $username3; //ninguna clase pude acceder a esta variable

    public function print(){
        var_dump(__DIR__);//devuelve la ruta del archivo
    }
};

$user = new User;
$user->print();
