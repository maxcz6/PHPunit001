<?php

use PHPUnit\Framework\TestCase;
use App\Calculadora;


class CalculadoraTest extends TestCase {
    public function testSumar() {
        $calculadora = new Calculadora();
        $resultado = $calculadora->sumar(2, 3);
        $this->assertEquals(5, $resultado);
    }

        public function testSumar1() {
        $calculadora = new Calculadora();
        $resultado = $calculadora->sumar(2, 3);
        $this->assertEquals(5, $resultado);
    }
}