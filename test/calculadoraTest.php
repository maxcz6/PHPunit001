<?php
# ejecutar vendor/bin/phpunit test
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
    // -> empieza la semana 8 
    //ejercicio 1
    public function testEsPar() {
        $calculadora = new Calculadora();
        $this->assertTrue($calculadora->esPar(4));
        $this->assertFalse($calculadora->esPar(5));
        $this->assertTrue($calculadora->esPar(0));
    }
    //ejercicio 2
    public function testEsPositivo() {
        $calculadora = new Calculadora();
        $this->assertTrue($calculadora->esPositivo(10));
        $this->assertFalse($calculadora->esPositivo(-5));
        $this->assertFalse($calculadora->esPositivo(0));
    }
    //ejercicio 3
    public function testEsNegativo() {
        $calculadora = new Calculadora();
        $this->assertTrue($calculadora->esNegativo(-10));
        $this->assertFalse($calculadora->esNegativo(5));
        $this->assertFalse($calculadora->esNegativo(0));
    }
    //ejercicio 4
    public function testEsCero() {
        $calculadora = new Calculadora();
        $this->assertTrue($calculadora->esCero(0));
        $this->assertFalse($calculadora->esCero(5));
        $this->assertFalse($calculadora->esCero(-5));
    }

}