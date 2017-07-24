<?php

namespace Tests\AppBundle\Entity\Operation;

use AppBundle\Entity\Operation\Divide;
use PHPUnit\Framework\TestCase;

class DivideTest extends TestCase
{
    public function testDivide()
    {
        $divide = new Divide();
        $result = $divide->runCalculation(10, 2);

        $this->assertEquals(5, $result);
    }
}
