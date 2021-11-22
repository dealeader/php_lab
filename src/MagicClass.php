<?php

namespace App;

class MagicClass {
    public function __construct()
    {
        echo "I'm " . __FUNCTION__ . "<br>";
    }

    public function __destruct()
    {
        echo "I'm " . __FUNCTION__ . "<br>";
    }

    public function __call($name, $arguments)
    {
        echo "I'm " . __FUNCTION__ . "<br>";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "I'm " . __FUNCTION__ . "<br>";
    }

    public function __get($name)
    {
        echo "I'm " . __FUNCTION__ . "<br>";
    } 

    public function __set($name, $value)
    {
        echo "I'm " . __FUNCTION__ . "<br>";
    }

    public function __isset($name)
    {
        echo "I'm " . __FUNCTION__ . "<br>";
    }

    public function __unset($name)
    {
        echo "I'm " . __FUNCTION__ . "<br>";
    }

    public function __sleep()
    {
        echo "I'm " . __FUNCTION__ . "<br>"; 
    }

    public function __wakeup()
    {
        echo "I'm " . __FUNCTION__ . "<br>"; 
    }

    public function __serialize(): array
    {
        echo "I'm " . __FUNCTION__ . "<br>";
        return array();
    }

    public function __unserialize(array $data): void
    {
        echo "I'm " . __FUNCTION__ . "<br>";
    }

    public function __toString()
    {
        return "I'm " . __FUNCTION__ . "<br>";
    }

    public function __invoke()
    {
        echo "I'm " . __FUNCTION__ . "<br>";
    }

    public static function __set_state($properties)
    {
        echo "I'm " . __FUNCTION__ . "<br>";
    }

    public function __clone()
    {
        echo "I'm " . __FUNCTION__ . "<br>";
    }

    public function __debugInfo()
    {
        echo "I'm " . __FUNCTION__ . "<br>";
    }
}