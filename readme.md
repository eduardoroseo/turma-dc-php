# PHPUnit

- [PHPUnit](https://phpunit.de/)

PHPUnit é um framework de teste unitário para a linguagem de programação PHP. Ele é uma ferramenta que ajuda a identificar erros e bugs em códigos PHP. Ele é um dos frameworks de teste mais populares para PHP e é usado por muitos desenvolvedores em todo o mundo.

## Mas antes de tudo, que diacho é um teste unitário?

Teste unitário é uma forma de testar o código (óbvio ...).
Ele é uma técnica de teste de software que testa unidades individuais ou componentes de um projeto.
O objetivo do teste unitário é verificar se o código de um programa funciona corretamente.

## Quais são as vantagens dos testes unitários?

- **Identificar bugs mais cedo**: Os testes unitários ajudam a identificar bugs e erros no código mais cedo no ciclo de desenvolvimento.
- **Melhorar a qualidade do código**: Os testes unitários ajudam a melhorar a qualidade do código, pois garantem que o código funcione corretamente.
- **Facilitar a manutenção do código**: Os testes unitários facilitam a manutenção do código, pois ajudam a identificar problemas no código.
- **Facilitar a refatoração do código**: Os testes unitários facilitam a refatoração do código, pois garantem que o código continue funcionando corretamente após a refatoração.
- **Documentar o código**: Os testes unitários ajudam a documentar o código, pois descrevem como o código deve se comportar em diferentes situações.

## Que tipos de situações eu preciso pensar na hora de montar os cenários?

- **Cenários de sucesso**: Testar o código em situações normais.
- **Cenários de falha**: Testar o código em situações anormais.
- **Cenários de validações**: Testar o código em situações de validações. Por exemplo, testar o código com valores mínimos e máximos.
- **Cenários de exceção**: Testar o código em situações excepcionais. Por exemplo, haveno uma exceção lançada pelo código.

## E como eu faço um teste unitário?

Para fazer um teste unitário, você precisa seguir os seguintes passos:

1. **Escrever o código de teste**: Escreva o código de teste que verifica se o código funciona corretamente.
2. **Executar o teste**: Execute o teste para verificar se o código funciona corretamente.
3. **Verificar o resultado do teste**: Verifique o resultado do teste para ver se o código funciona corretamente.

## Porque o povo fala que tem que escrever primeiro o teste unitário e depois o código?

O TDD (Test Driven Development) é uma técnica de desenvolvimento de software que consiste em escrever o teste antes de escrever o código. O objetivo do TDD é garantir que o código funcione corretamente e que seja fácil de manter. O TDD ajuda a identificar bugs e erros no código mais cedo no ciclo de desenvolvimento.

Vamos ver TDD hoje?

Hoje não vamos ver TDD, mas vamos ver como escrever testes unitários com PHPUnit :D.

## Como escrever testes unitários com PHPUnit?

Para escrever testes unitários com PHPUnit, você precisa seguir os seguintes passos:

1. **Criar uma classe de teste**: Crie uma classe de teste que estende a classe `PHPUnit\Framework\TestCase`.
2. **Criar um método de teste**: Crie um método de teste que verifica se o código funciona corretamente.
3. **Executar o teste**: Execute o teste para verificar se o código funciona corretamente.
4. **Verificar o resultado do teste**: Verifique o resultado do teste para ver se o código funciona corretamente.

Vamos ver um exemplo de teste unitário com PHPUnit?

```php
<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
}
```

Neste exemplo, criamos uma classe de teste `CalculatorTest` que estende a classe `PHPUnit\Framework\TestCase`. Em seguida, criamos um método de teste `testAdd` que verifica se o método `add` da classe `Calculator` funciona corretamente. No método de teste, criamos uma instância da classe `Calculator`, chamamos o método `add` com os argumentos `1` e `2` e verificamos se o resultado é `3` usando o método `assertEquals`.

## É só isso?

É nada!! Mas vamos para prática e entender um pouco mais sobre o PHPUnit.

## Instalação

Para instalar o PHPUnit, você precisa ter o Composer instalado. Para instalar o PHPUnit, você pode executar o seguinte comando:

```bash
composer require --dev phpunit/phpunit
```

## Executando testes

Para executar os testes com o PHPUnit, você pode executar o seguinte comando:

```bash
./vendor/bin/phpunit
```

## O que são os métodos de assert?

Os métodos de assert são métodos que você pode usar para verificar se o código funciona corretamente. Alguns dos métodos de assert mais comuns são:

- `assertEquals`: Verifica se dois valores são iguais.
- `assertTrue`: Verifica se um valor é verdadeiro.
- `assertFalse`: Verifica se um valor é falso.
- `assertNull`: Verifica se um valor é nulo.
- `assertNotNull`: Verifica se um valor não é nulo.
- `assertArrayHasKey`: Verifica se um array tem uma chave específica.
- `assertContains`: Verifica se um array contém um valor específico.
  .....

E mais um ruma..
Para mais detalhes sobre os métodos de assert, consulte a [documentação do PHPUnit](https://docs.phpunit.de/en/11.1/assertions.html).

## O phpunit.xml file

O arquivo `phpunit.xml` é um arquivo de configuração do PHPUnit que você pode usar para configurar o PHPUnit.
Você pode usar o arquivo `phpunit.xml` para configurar o PHPUnit para executar os testes em um diretório específico, para configurar o PHPUnit para usar um arquivo de bootstrap (start).

### Exemplo de arquivo `phpunit.xml`

```xml
<phpunit bootstrap="vendor/autoload.php">
    <testsuites>
        <testsuite name="Minha Suite">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```

Neste exemplo, configuramos o PHPUnit para usar o arquivo de bootstrap `vendor/autoload.php` e para executar os testes no diretório `tests`.
Para mais detalhes sobre o arquivo `phpunit.xml`, consulte a [documentação do PHPUnit](https://docs.phpunit.de/en/11.1/configuration.html).

## Exercícios

1. Cria um teste unitário para a classe `Math` que verifica se o método `add` funciona corretamente.
2. Cria um teste unitário para a classe `Math` que verifica se o método `sub` funciona corretamente.
3. Cria um teste unitário para a classe `Math` que verifica se o método `mul` funciona corretamente.
4. Cria um teste unitário para a classe `Math` que verifica se o método `div` funciona corretamente.
   4.1. Verifique se o método `div` lança uma exceção quando o divisor é zero.
5. Crie um novo método na classe `Math` chamado `pow` que recebe dois argumentos e retorna o resultado da potência dos dois argumentos.
6. Cria um teste unitário para a classe `Math` que verifica se o método `pow` funciona corretamente.
7. Testar a função de média (mean) da class `StatisticsCalculator` para um conjunto normal de entradas e para uma lista vazia.
8. Testar as funções min e max da classe `StatisticsCalculator` para verificar os valores mínimo e máximo corretos.
9. Testar a adição de números à lista (addNumber) da classe `StatisticsCalculator` e como isso afeta os cálculos.
10. Crie 2 novas classes testáveis de sua preferência e crie no mínimo 5 testes unitários para cada uma delas.
