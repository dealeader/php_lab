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