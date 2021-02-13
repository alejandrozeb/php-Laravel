<?php
use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{
    public function test_mail(){
        $email = Validate::email('a@correo.com');
        $this->assertTrue($email);
    }
}