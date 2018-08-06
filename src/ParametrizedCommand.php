<?php


namespace skobka\CommandPattern;


interface ParametrizedCommand extends CommandInterface
{
    /**
     * @inheritdoc
     *
     * Execute command with arguments
     *
     * @param mixed ...$args
     */
    public function execute(...$args): void;
}
