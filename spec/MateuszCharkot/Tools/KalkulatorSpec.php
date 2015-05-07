<?php

namespace spec\MateuszCharkot\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MateuszCharkot\Tools\Kalkulator');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(456)->getH()->shouldReturn(456);
    }
        function it_should_calculate_multiplication()
    {
    $this->setA(5)->setB(7)->setH(4)->multiplication()->shouldReturn(140);
    }
}


