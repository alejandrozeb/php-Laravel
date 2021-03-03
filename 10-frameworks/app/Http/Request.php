<?php

namespace App\Http; //referencia a la carpeta
 class Request{
     protected $segments = [];
     protected $controller;
     protected $method;

     public function __construct(){
         //platzi.test/servicios/index
         $this->segments = explode('/', $_SERVER['REQUEST_URI']);
        
         $this->setController();
         $this->setMethod();
    }

    public function setController(){
        $this->controller = empty($this->segments[1])
            ? 'home'
            : $this->segments[2];
    }

 }