<?php


namespace skobka\CommandPattern\Traits;


trait ResultedTrait
{
    private $result;

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
}
