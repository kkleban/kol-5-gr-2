<?php

namespace JWasik\Tools;

class Kalkulator
{
    private $a;
    private $b;
    private $h;
    
    public function setA($a)
    {
        $this->a = $a;
        
        return $this;
    }
    
    public function getA()
    {
        return $this->a;
    }

    public function setB($b)
    {
        $this->b = $b;
        
        return $this;
    }
    
    public function getB()
    {
        return $this->b;
    }

    public function setH($h)
    {
        $this->h = $h;
        
        return $this;
    }
    
    public function getH()
    {
        return $this->h;
    }

    public function field()
    {
        return $this->a * $this->b * $this->h;
    }   
}
