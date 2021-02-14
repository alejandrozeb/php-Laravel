<?php
namespace App;

class Validate{
    public static function email($value){//en el test lleva el mismo nombre
        return (bool) filter_var($value,FILTER_VALIDATE_EMAIL);
    }

    public static function url($value){//en el test lleva el mismo nombre
        return (bool) filter_var($value,FILTER_VALIDATE_URL);
    }
}