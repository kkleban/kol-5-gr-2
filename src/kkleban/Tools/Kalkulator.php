<?php

namespace kkleban\Tools;

class Kalkulator
{
      private $a;
    private $b;
    private $c;

    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    public function setB($b)
    {
        $this->b = $b;

        return $this;
    }
     public function setC($c)
    {
        $this->c = $c;

        return $this;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }
     public function getC()
    {
        return $this->c;
    }
    public function obj()
{
    return $this->a * $this->b * $this->c;
}
    function it_should_calculate_obj()
{
    $this->setA(3)->setB(4)->setC(5)->obj()->shouldReturn(60);
}
}
