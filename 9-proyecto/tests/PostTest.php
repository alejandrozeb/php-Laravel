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

