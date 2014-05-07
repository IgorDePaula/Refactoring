<?php

include '../Triangulo.php';
class TrianguloTest extends PHPUnit_Framework_Testcase{
    
    public function testIsTriangulo()
    {
        $t = new Triangulo(2,3,4,5,8);
        $this->assertTrue(true,$t->isTriangulo());
    }
    public function testIsEscaleno()
    {
        $t = new Triangulo(2,3,4,5,8);
        $this->assertTrue(true,$t->isEscaleno());
    }
    
}
