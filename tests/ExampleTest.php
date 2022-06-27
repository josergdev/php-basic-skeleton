<?php

declare(strict_types=1);

namespace JosergDev\Tests;

use JosergDev\Example;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    /** @test */
    public function itShouldSayHelloWhenGreeting(): void
    {
        $codelyber = new Example();

        self::assertEquals("Hello!", $codelyber->greet());
    }
}
