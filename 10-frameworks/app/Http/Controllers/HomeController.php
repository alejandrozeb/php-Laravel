<?php
namespace App\Http\Controllers;
use App\Http\Response;

class HomeController{
    public function index(){
        //return new \App\Http\Response('home');
        return new Response('home');
        /* funciona de las dos formas */
    }
}