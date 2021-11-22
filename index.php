<?php

require 'vendor/autoload.php';
use App\MagicClass;

$magic = new MagicClass();

$magic->__call(0,0);
$magic->__callStatic(0,0);
$magic->__get(0);
$magic->__set(0,0);
$magic->__isset(0);
$magic->__unset(0);
$magic->__sleep();
$magic->__wakeup();
$magic->__serialize();
$magic->__unserialize(array());
$magic->__toString();
$magic->__invoke();
$magic->__set_state(0);
$magic->__clone();
$magic->__debugInfo();

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
$V1->vectorLength();
$V2->vectorLength();
$V3->vectorLength();
$V2->isNullVector();

echo "<h1> Perpendicular </h1>" . "<br>";
Vector::isPerpendicularVector($V1, $V3);

$T1 = $T1->axisTransfer(4, 3);


