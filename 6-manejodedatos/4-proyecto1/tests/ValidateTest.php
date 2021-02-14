<?php
use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{
    public function test_email(){   /* deben comenzar con test y luego el metodo */
        $email = Validate::email('a@correo.com');
        $this->assertTrue($email);
        /* validamos un metodo */
    }

    public function test_url()
    {
        $url = Validate::url('https://platzi.com');
        $this->assertTrue($url);
    }
}