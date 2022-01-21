<?php

class IPLsocial
{

    private $password;

    public function __construct()
    {
        $this->password=$this->password;
    }

    public function verificationMin8CharacterANDSpecialCharANDOneNumberReturnBoolean($string){
        if(strlen($string)<8)return false;
        if(!preg_match('/[0-9]/',$string))return false;
        if(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$string))return false;
    }

}