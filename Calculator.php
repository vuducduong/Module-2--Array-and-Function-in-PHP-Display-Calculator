<?php

class Calculator
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }


    public function getX()
    {
        return $this->x;
    }


    public function getY()
    {
        return $this->y;
    }


    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function total()
    {
        return $this->x + $this->y;
    }

    public function difference()
    {
        return $this->x - $this->y;
    }

    public function product()
    {
        return $this->x * $this->y;
    }

    public function calculate($operator)
    {

        if (!is_numeric($this->x) || !is_numeric($this->y)) {
            throw new MyException();
        }

        switch ($operator) {
            case 'plus':
                $result = $this->x + $this->y;
                break;
            case 'minus':
                $result = $this->x - $this->y;
                break;
            case 'multiply':
                $result = $this->x * $this->y;
                break;
            case 'divisor':
                if ($this->y == 0) {
                    throw new Exception("Can't division by zero");
                }
                $result = $this->x / $this->y;
        }

        return $result;
    }
}