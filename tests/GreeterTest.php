<?php

namespace JosergDev\Tests;

use JosergDev\Greeter;
use PHPUnit\Framework\TestCase;

final class GreeterTest extends TestCase
{
    /** @test */
    public function itShouldSayHelloWhenGreeting(): void
    {
        $example = new Greeter();

        self::assertEquals("Hello!", $example->greet());
    }
}
