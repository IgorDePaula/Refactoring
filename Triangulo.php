<?php

include 'Geometric.php';

/**
 * Classe que definie um triangulo
 */
class Triangulo extends Geometric {

    /**
     * Constructor
     * @param Integer $lado1 Tamanho da altura do lado 1 da figura
     * @param Integer $lado2 Tamanho da altura do lado 2 da figura
     * @param Integer $lado3 Tamanho da altura do lado 3 da figura
     * @param Mixed $base Tamanho da base da figura
     * @param Mixed $altura Tamanho da altura da figura
     */
    public function __construct($lado1, $lado2, $lado3, $base, $altura) {
        $this->lado1 = (int) $lado1;
        $this->lado2 = (int) $lado2;
        $this->lado3 = (int) $lado3;
        $this->base = (int) $base;
        $this->altura = (int) $altura;
    }

     /**
      * {@inheritDoc}
      */
    public function calcArea() {
        return ($this->base * $this->altura) / 2;
    }

    /**
     * Verifica se o triangulo é escaleno
     * @return boolean
     */
    public function isEscaleno() {
        $result = false;
        if ($this->isTriangulo()) {
            if (($this->lado1 != $this->lado2) && ($this->lado2 != $this->lado3) && ($this->lado3 != $this->lado1)) {
                $result = true;
            }
        }
        return $result;
    }

    /**
     * Verifica se o triangulo é equilatero
     * @return boolean
     */
    public function isEquilatero() {
        $result = false;
        if ($this->isTriangulo()) {
            if (($this->lado1 == $this->lado2) && ($this->lado2 == $this->lado3) && ($this->lado1 == $this->lado3)) {
                $result = true;
            }
        }
        return $result;
    }

    /**
     * Verifica se o triangulo é isosceles
     * @return boolean
     */
    public function isIsosceles() {
        $result = false;
        if ($this->isTriangulo()) {
            if (($this->lado1 == $this->lado2) ) {
                $result = true;
            }
            if (($this->lado3== $this->lado2) ) {
                $result = true;
            }
            if (($this->lado1 == $this->lado3) ) {
                $result = true;
            }
        }
        return $result;
    }

    /**
     * Verifica se a figura é triangulo
     * @return boolean
     */
    public function isTriangulo() {
        $result = false;
        if ($this->lado1 <= ($this->lado2 + $this->lado3) || $this->lado2 <= ($this->lado2 + $this->lado3) || $this->lado3 <= ($this->lado1 + $this->lado2)) {
            $result = true;
        }
        return $result;
    }

}
