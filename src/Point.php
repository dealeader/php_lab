<?php

namespace App;

class Point {
    private int $x;
    private int $y;

    public function __construct(int $x=0, int $y=0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function axisTransfer(int $x, int $y): Point
    {
        return new Point($this->x + $x, $this->y + $y);
    }

    public function __toString()
    {
        return "X:" . (string)$this->x . " " . "Y: " . (string)$this->y . "<br>";
    }
}