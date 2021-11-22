<?php

namespace App;

class Vector {
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function vectorLength()
    {
        printf("%.2f" . "<br>", sqrt($this->x ** 2 + $this->y ** 2)); 
    }

    public function isNullVector()
    {
        echo (($this->x == 0) and ($this->y == 0)) ? "Vector is nullable" . "<br>" : "Vector is not nullable" . "<br>";
    }

    public static function isPerpendicularVector(Vector $v1, Vector $v2) 
    {
        echo ($v1->x * $v2->x + $v1->y * $v2->y == 0) ? "Vectors are perpendicular" . "<br>" : "Vectors are not perpendicular" . "<br>";
    }
}