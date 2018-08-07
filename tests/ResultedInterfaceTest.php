<?php

namespace tests\skobka\CommandPattern;

use PHPUnit\Framework\TestCase;
use skobka\CommandPattern\ResultedInterface;
use skobka\CommandPattern\Traits\ResultedTrait;

class ResultedInterfaceTest extends TestCase
{
    /**
     * @return void
     */
    public function testInterface(): void
    {
        $class = new class implements ResultedInterface
        {
            use ResultedTrait;

            public function __construct()
            {
                $this->result = 'foo bar baz';
            }
        };

        $this->assertSame('foo bar baz', $class->getResult());
    }
}
