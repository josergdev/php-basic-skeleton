<?php

namespace JosergDev\Tests;

use JosergDev\StringCalculator;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JosergDev\StringCalculator
 */
class StringCalculatorTests extends TestCase
{
    private $stringCalculator;

    protected function setUp(): void
    {
        $this->stringCalculator = new StringCalculator();
    }

    public function testItShouldReturnZeroWhenInputIsEmpty(): void
    {
        $this->assertEquals(0, $this->stringCalculator->add(""));
    }

    public function testItShouldSumSeparatedNumbersByComma(): void
    {
        $this->assertEquals(4, $this->stringCalculator->add("4"));
        $this->assertEquals(3, $this->stringCalculator->add("1,2"));
    }
}
