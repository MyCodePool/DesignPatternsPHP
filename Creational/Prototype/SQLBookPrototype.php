<?php

/**
 * In strict mode, PHP accepts only values corresponding to the type declarations and
 * issue a TypeError exception if there's a mismatch  (PHP 7)
 * Further Informations: https://www.phptutorial.net/php-tutorial/php-strict_types/
 */
declare(strict_types=1);

namespace DesignPatternsPHP\Creational\Prototype;

class SQLBookPrototype extends BookPrototype
{
    function __construct()
    {
        $this->topic = 'SQL';
    }

    function __clone()
    {
    }
}