<?php

namespace spec\Mmajewski1313\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProstopadloscianSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Mmajewski1313\Tools\Prostopadloscian');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setA(123)->getA()->shouldReturn(123);
        $this->setB(987)->getB()->shouldReturn(987);
        $this->setH(567)->getH()->shouldReturn(567);

}

function pole()
    {
        $this->setA(2)->setB(3)->setH(4)->objetoscprost()->shouldReturn(24);
    }
}

