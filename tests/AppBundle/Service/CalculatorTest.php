<?php

namespace Tests\AppBundle\Service;

use AppBundle\Service\Calculator;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculatorTest extends WebTestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(5,5);

        # OK
        $this->assertEquals(10, $result);

        # Failure
        $this->assertEquals(11, $result);

    }
}