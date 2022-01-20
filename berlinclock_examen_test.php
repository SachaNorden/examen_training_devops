<?php
use berlinclock_examen;
use PHPUnit\Framework\TestCase;

class berlinclock_examen_test extends TestCase
{
    public function testpassword(){

        $passowrd1= new berlinclock_examen("abc123?");

        $actual1=$passowrd1->containNum($passowrd1);

        $this->assertEquals(false,$passowrd1);
    }
}