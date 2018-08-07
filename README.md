# PHP Command Pattern
[![Build Status](https://travis-ci.com/Doka-NT/command-pattern.svg?branch=master)](https://travis-ci.com/Doka-NT/command-pattern)
[![Maintainability](https://api.codeclimate.com/v1/badges/0a346d82cefb9bea7282/maintainability)](https://codeclimate.com/github/Doka-NT/command-pattern/maintainability)
[![codecov](https://codecov.io/gh/Doka-NT/command-pattern/branch/master/graph/badge.svg)](https://codecov.io/gh/Doka-NT/command-pattern)


Here is set of interfaces and helper implementations for Command design pattern.

## What's included
- CommandInterface
- ResultInterface
- ParametrizedCommand
- ParametrizedResultedCommand

## How to use
Just make your class implements one of available interfaces:

```php
<?php

use skobka\CommandPattern\CommandInterface;

class MyCoolCommand implements CommandInterface {
    /**
     * @inheritdoc  
     */
    public function execute() : void
    {
        // write your actions here
    }
}

class CommandFactory {
    public static function create(): CommandInterface
    {
        return new MyCoolCommand();
    }
}

$command = CommandFactory::create();
$command->execute();
``` 

## Roadmap

- Undo/Redo commands
- Generic result command
- Typed parameters
- Symfony Dependency Injection examples
