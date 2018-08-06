<?php

namespace tests\skobka\CommandPattern;

use PHPUnit\Framework\TestCase;
use skobka\CommandPattern\CommandInterface;

class CommandInterfaceTest extends TestCase
{
    public static $isExecuted;

    protected function setUp()
    {
        parent::setUp();
        self::$isExecuted = false;
    }

    /**
     * @return void
     */
    public function testInterface(): void
    {
        $class = new class implements CommandInterface
        {
            public function execute(): void
            {
                CommandInterfaceTest::$isExecuted = true;
            }
        };

        $class->execute();
        $this->assertTrue(self::$isExecuted);
    }
}
