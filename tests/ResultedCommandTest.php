<?php

namespace tests\skobka\CommandPattern;

use PHPUnit\Framework\TestCase;
use skobka\CommandPattern\ResultedCommand;
use skobka\CommandPattern\Traits\ResultedTrait;

class ResultedCommandTest extends TestCase
{
    /**
     * @return void
     */
    public function testInterface(): void
    {
        $class = new class implements ResultedCommand
        {
            use ResultedTrait;

            public function execute(): void
            {
                $this->result = 'foo bar';
            }
        };

        $class->execute();

        $this->assertSame('foo bar', $class->getResult());
    }
}
