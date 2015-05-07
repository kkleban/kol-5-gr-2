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
    
    function it_should_calculate_field()
    {
        $this->setA(2)->setB(3)->setH(2)->field()->shouldReturn(12);
    }
    
    public function field()
    {
        return $this->a * $this->b * $this->h;
    }   
}
