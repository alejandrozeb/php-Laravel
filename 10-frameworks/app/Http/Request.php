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
    //llena los datosa proiedades
    public function setController(){
        $this->controller = empty($this->segments[1])
            ? 'home'
            : $this->segments[2];
    }

    public function setMethod(){
        $this->method = empty($this->segments[2])
            ?'index'
            : $this->segments[2];
    }
    // obtiene la informacion configurada
    public function getController(){
        //home , HomeController para que este en estandar
        $controller = ucfirst($this->controller);

        return "App\Http\Controllers\\{$controller}Controller";
    }

    public function getMethod(){
        return $this->method;
    }
    //metodo que ejecuta todo
    public function send(){
        $controller = $this->getController();
        $method =  $this->getMethod();

        $response = call_user_func([
            new $controller,
            $method
        ]);
        try {
            if($response instanceof Response){
                $response->send();
            }else{
                throw new \Exception("Error Processing Request");
            }
            //validamos
        } catch (\Exception $e) {
            //throw $th;
            echo "Details ($e->getMessage())";
        }
    }

 }