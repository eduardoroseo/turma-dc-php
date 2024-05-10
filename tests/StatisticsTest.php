<?php

use PHPUnit\Framework\TestCase;
use src\utils\StatisticsCalculator;

class StatisticsTest extends TestCase
{
    // Apenas para exemplo
    public function test_test()
    {
        $teste = new StatisticsCalculator([
            10,
            9,
            1
        ]);

        $result = $teste->min();
    }
}
