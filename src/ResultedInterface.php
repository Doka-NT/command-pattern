<?php


namespace skobka\CommandPattern;


interface ResultedInterface
{
    /**
     * Command execution result
     *
     * @return mixed
     */
    public function getResult();
}
