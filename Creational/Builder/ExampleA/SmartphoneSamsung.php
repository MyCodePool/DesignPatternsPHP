<?php

declare(strict_types=1);

namespace DesignPatternsPHP\Creational\Builder\ExampleA;


class SmartphoneSamsung extends SmartPhone
{
    public function __toString()
    {
        return '<h1>Your Samsung Phone is Ready with the following Specs.</h1>' . '<pre>' . var_export($this, true) . '</pre>';
    }
}