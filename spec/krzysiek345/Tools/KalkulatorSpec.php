<?php

namespace spec\krzysiek345\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('krzysiek345\Tools\Kalkulator');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(2)->getA()->shouldReturn(2);
        $this->setB(3)->getB()->shouldReturn(3);
        $this->setC(4)->getC()->shouldReturn(4);
    }
    
    function it_should_calculate_pro()
    {
        $this->setA(2)->setB(3)->setC(4)->pro()->shouldReturn(24);
    }
}