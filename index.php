<?php

require 'vendor/autoload.php';
use App\MagicClass;

$magic = new MagicClass();

$magic->test(); #__call
MagicClass::test(); #__callStatic

$magic->x; #__get
$magic->x = 1; #__set
isset($magic->x); //__isset
empty($magic->x); //__isset
unset($magic->x); //__unset
$test = serialize($magic); //__serialize
unserialize($test); //__unserialize
var_export($magic, false); //__set_state
echo "<br>";

$magic(); // __invoke
echo $magic; //__toString

var_dump($magic); //__debugInfo
$copy = clone $magic; //__clone

use App\Point;
use App\Vector;

echo "<h1> Point tests </h1>" . "<br>";

$T1 = new Point();
echo $T1;

$T1 = $T1->axisTransfer(1, 1);
echo $T1;

$V1 = new Vector(4, 3);
$V2 = new Vector(0, 0);
$V3 = new Vector(-3, 4);

echo "<h1> Vectors Lengths </h1>" . "<br>";
echo $V1->vectorLength() . "<br>";
echo $V2->vectorLength() . "<br>";
echo $V3->vectorLength() . "<br>";
echo var_dump($V2->isNullVector()) . "<br>";

echo "<h1> Perpendicular </h1>" . "<br>";
echo var_dump($V1->isPerpendicularVector($V3));

$T1 = $T1->axisTransfer(4, 3);

echo "<h1> End of MagicClass </h1>" . "<br>";


