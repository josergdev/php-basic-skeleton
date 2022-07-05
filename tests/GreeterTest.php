<?php

namespace JosergDev\Tests;

use JosergDev\Greeter;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JosergDev\Greeter
 */
final class GreeterTest extends TestCase
{
    public function testItShouldSayHelloWhenGreeting(): void
    {
        $greeter = new Greeter();

        self::assertEquals("Hello!", $greeter->greet());
    }
}
