<?php

/**
 * In strict mode, PHP accepts only values corresponding to the type declarations and
 * issue a TypeError exception if there's a mismatch  (PHP 7)
 * Further Informations: https://www.phptutorial.net/php-tutorial/php-strict_types/
 */
declare(strict_types=1);

namespace DesignPatternsPHP\Creational\AbstractFactory;

class SamsBookFactory extends AbstractBookFactory
{
    private $context = "Sams";

    function makePHPBook()
    {
        return new SamsPHPBook;
    }

    function makeMySQLBook()
    {
        return new SamsMySQLBook;
    }
}