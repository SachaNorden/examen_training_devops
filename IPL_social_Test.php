<?php
use IPLsocial;
use PHPUnit\Framework\TestCase;

class IPLsocial_Test extends TestCase
{
    public function testpassword(){

        $passowrd1= new IPLsocial("abc123?");

        $actual1=$passowrd1->containNumReturnBoolean($passowrd1);

        $this->assertEquals(false,$passowrd1);
    }
}