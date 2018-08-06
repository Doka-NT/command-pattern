<?php

namespace tests\skobka\CommandPattern;

use PHPUnit\Framework\TestCase;
use skobka\CommandPattern\ParametrizedCommand;

class ParametrizedCommandTest extends TestCase
{
    public static $args = [];

    /**
     * @return void
     */
    public function testInterface(): void
    {
        $class = new class implements ParametrizedCommand
        {
            public function execute(...$args): void
            {
                ParametrizedCommandTest::$args = $args;
            }
        };

        $class->execute('foo', 555);

        $this->assertSame(['foo', 555], self::$args);
    }
}
