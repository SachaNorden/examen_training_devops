<?php

class berlinclock_examen
{

    private $password;

    public function __construct()
    {
        $this->password=$this->password;
    }
    public function minCharacters($string)
    {
        return(strlen($string)<8);
    }

    public function majLetter($string)
    {
        return (preg_match('/[A-Z]/',$string));
    }
    public function minLetter($string)
    {
        return (preg_match('/[a-z]/',$string));
    }

    public function containNum($string)
    {
        return (preg_match('~[0-9]+~',$string));
    }
    public function specialCharacters($string)
    {
        return (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$string));
    }

}