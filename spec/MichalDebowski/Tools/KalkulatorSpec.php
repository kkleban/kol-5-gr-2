<?php

namespace spec\MichalDebowski\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KalkulatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MichalDebowski\Tools\Kalkulator');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(456)->getH()->shouldReturn(456);
    }
    
    function prosto()
    {
    $this->setA(4)->setB(5)->setH(3)->prosto()->shouldReturn(60);
    }
}
