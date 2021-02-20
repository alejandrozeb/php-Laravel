<?php

interface Search{
    public function all();
};

class User implements Search{
    public function all(){
        return "Obteniendo a los Users,XML";
    }
}

class Post implements Search{
    public function all(){
        return "Obteniendo a los Posts,JSON";
    }
}

$user = new User();
echo $user->all();

echo "<br>";
$post = new Post();
echo $post->all();

/* Las interfaces son lo que enviamos, programamos en base a estas teniendo ya configurado nuesros metodos */
/* Ademas podemos agregar patrones de diseños que requieren de estos */