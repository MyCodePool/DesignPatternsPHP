<?php

/**
 * In strict mode, PHP accepts only values corresponding to the type declarations and
 * issue a TypeError exception if there's a mismatch  (PHP 7)
 * Further Informations: https://www.phptutorial.net/php-tutorial/php-strict_types/
 */
declare(strict_types=1);

namespace DesignPatternsPHP\Creational\FactoryMethod;

class SamsFactoryMethod extends AbstractFactoryMethod
{
    private $context = "Sams";

    function makePHPBook($param)
    {
        $book = null;
        switch ($param) {
            case "us":
                $book = new SamsPHPBook;
                break;
            case "other":
                $book = new OReillyPHPBook;
                break;
            case "otherother":
                $book = new VisualQuickstartPHPBook;
                break;
            default:
                $book = new SamsPHPBook;
                break;
        }
        return $book;
    }
}