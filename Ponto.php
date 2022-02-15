<?php

namespace Eletiva_web;

class Ponto
{
    private int $x;
    private int $y;
    public static int $contador;

    /**
     * @param int $x
     * @param int $y
     */
    public function __construct(int $x, int $y)
    {
        $this->setX($x);
        $this->setY($y);

    }

    public static function retornaContador(){
        return self::$contador;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    public function calculaDistancia(Ponto $p){
        return sqrt(
            pow($p->x - $this->x, 2) + pow($p->y - $this->y, 2)
        );
    }

    public function calculaDistanciaXY(int $x, int $y){
        return sqrt(
            pow($x - $this->x, 2) + pow($y - $this->y, 2)
        );
    }

    public function calculaDistanciaValores(int $x1, int $x2, int $y1, int $y2){
        return sqrt(
            pow($x2 - $x1, 2) + pow($y2 - $y1, 2)
        );
    }

    /**
     * @param int $x
     */
    public function setX(int $x): void
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @param int $y
     */
    public function setY(int $y): void
    {
        $this->y = $y;
    }

}
