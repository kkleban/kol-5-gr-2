<?php

namespace spec\furtakm\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProstopadloscianSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('furtakm\Tools\Prostopadloscian');
    }
    
    function it_should_have_setter_and_getter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(456)->getB()->shouldReturn(456);
        $this->setH(345)->getH()->shouldReturn(345);
    }
    
    function v_prostopadloscian()
    {
        $this->setA(2)->setB(3)->setH(4)->objetoscprost()->shouldReturn(24);
    }
}
