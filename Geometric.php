<?php

/**
 * Classe que define uma figura geometrica
 */
abstract class Geometric {

    /**
     * Constantes de definicao da figura
     */
    const NAO_DEFINIDO = 0;
    const ESCALENO = 1;
    const EQUILATERO = 2;
    const ISOSCELES = 3;
    
    /**
     * Definicao da variavel de resultado
     * @var Array  
     */
    protected $type = array(
        0 => 'Figura nao definida',
        1 => 'Escaleno',
        2 => 'Equilatero',
        3 => 'Isosceles'
    );
    
    /**
     * Resultado final do processamento
     * @var String 
     */
    protected $result = null;
    
    /**
     * Lado 1 da figura
     * @var Integer 
     */
    protected $lado1 = 0;
    
    /**
     * Lado 2 da figura
     * @var Integer 
     */
    protected $lado2 = 0;
    
    /**
     * Lado 3 da figura
     * @var Integer 
     */
    protected $lado3 = 0;
    
    /**
     * Base da figura
     * @var Integer 
     */
    protected $base = 0;
    
    /**
     * Altura da figura
     * @var Integer 
     */
    protected $altura = 0;

    /**
     * Retorna o tipo da figura
     * @return String Resultado do processamento
     */
    abstract public function getType();

    /**
     * Retorna a area da figura
     * @return Mixed Area da figura
     */
    abstract public function calcArea();
}
