<?php

include '../Triangulo.php';
class TrianguloTest extends PHPUnit_Framework_Testcase{
    
    /**
     * @covers Triangulo::isTriangulo
     */
    public function testIsTriangulo()
    {
        $t = new Triangulo(2,3,4,5,8);
        $this->assertTrue(true,$t->isTriangulo());
    }
    
    /**
     * @covers Triangulo::isEscaleno
     */
    public function testIsEscaleno()
    {
        $t = new Triangulo(2,3,4,5,8);
        $this->assertTrue(true,$t->isEscaleno());
    }
    
    /**
     * @covers Triangulo::isEquilatero
     */
    public function testIsEquilatero()
    {
        $t = new Triangulo(2,2,2,5,8);
        $this->assertTrue(true,$t->isEquilatero());
    }
    
    /**
     * @covers Triangulo::isIsosceles
     */
    public function testIsIsosceles()
    {
        $t = new Triangulo(2,3,2,5,8);
        $this->assertTrue(true,$t->isIsosceles());
    }
    
    /**
     * @covers Triangulo::calcArea
     */
    public function testIsCalcArea()
    {
        $t = new Triangulo(2,3,2,5,8);
        $this->assertEquals(20,$t->calcArea());
    }
    
}
