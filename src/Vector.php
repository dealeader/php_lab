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

    public function vectorLength(): float
    {
        return sqrt($this->x ** 2 + $this->y ** 2); 
    }

    public function isNullVector(): bool
    {
        return ($this->x == 0) && ($this->y == 0);
    }

    public function isPerpendicularVector( Vector $v) 
    {
        return ($this->x * $v->x + $this->y * $v->y == 0);
    }
}