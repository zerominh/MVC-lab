<?php
/**
 * Created by PhpStorm.
 * User: vanminh
 * Date: 30/10/2018
 * Time: 09:34
 */

class SumModel
{
    private $x, $y, $sum;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function solve() {
        $this->sum = $this->x + $this->y;
    }
    public function getSum() {
        return $this->sum;
    }
}