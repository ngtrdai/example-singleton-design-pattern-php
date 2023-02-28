<?php

require_once 'vendor/autoload.php';

use App\Classes\ExampleSingleton;

class Main
{
    public function __construct()
    {
        $exampleSingleton = ExampleSingleton::getInstance();
        $exampleSingleton->doSomething();
    }
}

new Main();

