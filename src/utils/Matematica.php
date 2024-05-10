<?php

namespace src\utils;

use src\exceptions\DivisionByZeroException;

class Matematica
{
    public function soma(int|float $a, int|float $b): int|float
    {
        return $a + $b;
    }

    public function subtrair(int|float $a, int|float $b): int|float
    {
        return $a - $b;
    }

    public function multiplicar(int|float $a, int|float $b): int|float
    {
        return $a * $b;
    }

    public function dividir(int|float $a, int|float $b): int|float
    {
        if ($b == 0) {
            throw new DivisionByZeroException();
        }

        return $a / $b;
    }
}
