<?php

namespace App\Classes;

class ExampleSingleton
{
    private static ?ExampleSingleton $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): ExampleSingleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function doSomething(): void
    {
        echo 'I am doing something';
    }
}