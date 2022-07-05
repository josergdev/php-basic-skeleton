<?php

namespace JosergDev\Tests;

use JosergDev\Greeter;
use PHPUnit\Framework\TestCase;

/**
 * @covers \JosergDev\Greeter
 */
final class GreeterTest extends TestCase
{
    /** @test */
    public function itShouldSayHelloWhenGreeting(): void
    {
        $example = new Greeter();

        self::assertEquals("Hello!", $example->greet());
    }
}
