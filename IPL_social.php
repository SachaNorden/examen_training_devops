<?php

class IPLsocial
{

    private $password;

    public function __construct()
    {
        $this->password=$this->password;
    }
    public function minCharactersReturnBoolean($string)
    {
        return(strlen($string)<8);
    }

    public function containNumReturnBoolean($string)
    {
        return (preg_match('/[0-9]/',$string));
    }
    public function specialCharactersReturnBoolean($string)
    {
        return (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$string));
    }

}