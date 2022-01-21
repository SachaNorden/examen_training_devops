<?php
use IPLsocial;
use PHPUnit\Framework\TestCase;

class IPLsocial_Test extends TestCase
{
    public function testpassword(){

        $passowrd1= new IPLsocial("abc123?");
        $passowrd2= new IPLsocial("abc");
        $passowrd3= new IPLsocial("abc123?gfrgvr?");
        $passowrd4= new IPLsocial("abc123?");

        $actual1=$passowrd1->verificationMin8CharacterANDSpecialCharANDOneNumberReturnBoolean($passowrd1);
        $actual2=$passowrd2->verificationMin8CharacterANDSpecialCharANDOneNumberReturnBoolean($passowrd2);
        $actual3=$passowrd3->verificationMin8CharacterANDSpecialCharANDOneNumberReturnBoolean($passowrd3);
        $actual4=$passowrd4->verificationMin8CharacterANDSpecialCharANDOneNumberReturnBoolean($passowrd4);

        $this->assertEquals(false,$actual1);
        $this->assertEquals(false,$actual2);
        $this->assertEquals(true,$actual3);
        $this->assertEquals(false,$actual4);
    }
}