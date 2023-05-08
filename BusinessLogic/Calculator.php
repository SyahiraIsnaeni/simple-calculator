<?php

abstract class Calculator{

    private array $number = array();

    public function sizeNumber(): int{
        return sizeof($this->number);
    }

    public function getAllNumber(): array
    {
        return $this->number;
    }

    public function getNumber($index)
    {
        return $this->number[$index];
    }

    public function setNumber($number): void
    {
        $this->number[] = $number;
    }

    public function clear(): void{
        unset($this->number);
    }

}