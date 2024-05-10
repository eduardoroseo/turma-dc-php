<?php

namespace src\utils;

use src\exceptions\InvalidArgumentException;

class StatisticsCalculator
{
    private $numbers;

    public function __construct(array $numbers = [])
    {
        $this->numbers = $numbers;
    }

    public function addNumber($number)
    {
        $this->numbers[] = $number;
    }

    public function mean()
    {
        if (empty($this->numbers)) {
            throw new InvalidArgumentException("Array cannot be empty");
        }
        return array_sum($this->numbers) / count($this->numbers);
    }

    public function min()
    {
        if (empty($this->numbers)) {
            throw new InvalidArgumentException("Array cannot be empty");
        }
        return min($this->numbers);
    }

    public function max()
    {
        if (empty($this->numbers)) {
            throw new InvalidArgumentException("Array cannot be empty");
        }
        return max($this->numbers);
    }
}
