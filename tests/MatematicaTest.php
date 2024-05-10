<?php

use PHPUnit\Framework\TestCase;
use src\exceptions\DivisionByZeroException;
use src\utils\Matematica;

class MatematicaTest extends TestCase
{
    public function test_soma_dois_numeros_com_sucesso()
    {
        $matematica = new Matematica();
        $resultado = $matematica->soma(2, 2);

        $this->assertIsNumeric($resultado);
        $this->assertEquals(4, $resultado);
    }

    public function test_soma_dois_numeros_com_erro()
    {
        $matematica = new Matematica();
        $resultado = $matematica->soma(2, 2);

        $this->assertNotEquals(5, $resultado);
    }

    public function test_subtrai_dois_numeros_com_sucesso()
    {
        $matematica = new Matematica();
        $resultado = $matematica->subtrair(2, 2);

        $this->assertEquals(0, $resultado);
    }

    public function test_subtrai_dois_numeros_com_erro()
    {
        $matematica = new Matematica();
        $resultado = $matematica->subtrair(2, 2);

        $this->assertNotEquals(1, $resultado);
    }

    public function test_multiplica_dois_numeros_com_sucesso()
    {
        $matematica = new Matematica();
        $resultado = $matematica->multiplicar(2, 2);

        $this->assertEquals(4, $resultado);
    }

    public function test_multiplica_dois_numeros_com_erro()
    {
        $matematica = new Matematica();
        $resultado = $matematica->multiplicar(2, 2);

        $this->assertNotEquals(5, $resultado);
    }

    public function test_divide_dois_numeros_com_sucesso()
    {
        $matematica = new Matematica();
        $resultado = $matematica->dividir(2, 2);

        $this->assertEquals(1, $resultado);
    }

    public function test_divisao_por_zero()
    {
        $this->expectException(DivisionByZeroException::class);
        $this->expectExceptionMessage("Division by zero!");

        $matematica = new Matematica();
        $matematica->dividir(2, 0);
    }

    public function test_divide_dois_numeros_com_erro()
    {
        $matematica = new Matematica();
        $resultado = $matematica->dividir(2, 2);

        $this->assertNotEquals(2, $resultado);
    }
}
