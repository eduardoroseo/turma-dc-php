<?php

use PHPUnit\Framework\TestCase;
use src\utils\StatisticsCalculator;

class StatisticsTest extends TestCase
{

    public function test_calcula_media_com_sucesso()
    {
        $statistics = new StatisticsCalculator([1, 2, 3, 4, 5]);
        $resultado = $statistics->mean();

        $this->assertIsNumeric($resultado);
        $this->assertEquals(3, $resultado);
    }

    public function test_calcula_media_com_erro()
    {
        $statistics = new StatisticsCalculator([1, 2, 3, 4, 5]);
        $resultado = $statistics->mean();

        $this->assertNotEquals(4, $resultado);
    }

    public function test_calcula_minimo_com_sucesso()
    {
        $statistics = new StatisticsCalculator([1, 2, 3, 4, 5]);
        $resultado = $statistics->min();

        $this->assertEquals(1, $resultado);
    }

    public function test_calcula_minimo_com_erro()
    {
        $statistics = new StatisticsCalculator([1, 2, 3, 4, 5]);
        $resultado = $statistics->min();

        $this->assertNotEquals(2, $resultado);
    }

    public function test_calcula_maximo_com_sucesso()
    {
        $statistics = new StatisticsCalculator([1, 2, 3, 4, 5]);
        $resultado = $statistics->max();

        $this->assertEquals(5, $resultado);
    }

    public function test_calcula_maximo_com_erro()
    {
        $statistics = new StatisticsCalculator([1, 2, 3, 4, 5]);
        $resultado = $statistics->max();

        $this->assertNotEquals(4, $resultado);
    }
}
