<?php

namespace skobka\CommandPattern;

interface CommandInterface
{
    /**
     * Execute command
     */
    public function execute(): void;
}
