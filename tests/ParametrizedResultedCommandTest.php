<?php

namespace tests\skobka\CommandPattern;

use PHPUnit\Framework\TestCase;
use skobka\CommandPattern\ParametrizedResultedCommand;
use skobka\CommandPattern\Traits\ResultedTrait;

class ParametrizedResultedCommandTest extends TestCase
{
    /**
     * @return void
     */
    public function testInterface(): void
    {
        $class = new class implements ParametrizedResultedCommand
        {
            use ResultedTrait;

            public function execute(...$args): void
            {
                $this->result = $args;
            }
        };

        $args = ['foo', 'bar'];

        $class->execute(...$args);

        $this->assertSame($args, $class->getResult());
    }
}
