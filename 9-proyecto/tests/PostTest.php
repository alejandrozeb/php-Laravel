<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;

class PostTest extends TestCase{
    public function test_add_comment_to_post(){
        $post = new Post();
        $comment = new Comment();

        $post->addComment($comment);    //agregamos in comentario al post

        //php unit
        $this->assertEquals(1, $post->countComments()); //comprueba que se creo un post
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);//pregunta si en realidad se creo un post con una instancia de comment
    }
}

/* si pasamos otro tipo de dato no pasamos por el test
Tambien confirmamos un elemento y añadir doble seguro en el test y en los metodos
este es el ciclo natural de los test

creo la prueba, creo codigo para pasar esa prueba y luego puedo alterar el codigo sin alterar el resultado de esa prueba*/