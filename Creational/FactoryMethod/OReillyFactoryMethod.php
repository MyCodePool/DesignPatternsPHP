<?php

/**
 * In strict mode, PHP accepts only values corresponding to the type declarations and
 * issue a TypeError exception if there's a mismatch  (PHP 7)
 * Further Informations: https://www.phptutorial.net/php-tutorial/php-strict_types/
 */
declare(strict_types=1);

namespace DesignPatternsPHP\Creational\FactoryMethod;

class OReillyFactoryMethod extends AbstractFactoryMethod
{
    private $context = "OReilly";

    function makePHPBook($param)
    {
        $book = null;
        switch ($param) {
            case "us":
                $book = new OReillyPHPBook;
                break;
            case "other":
                $book = new SamsPHPBook;
                break;
            default:
                $book = new OReillyPHPBook;
                break;
        }
        return $book;
    }
}