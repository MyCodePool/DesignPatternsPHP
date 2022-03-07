<?php

/**
 * In strict mode, PHP accepts only values corresponding to the type declarations and
 * issue a TypeError exception if there's a mismatch  (PHP 7)
 * Further Informations: https://www.phptutorial.net/php-tutorial/php-strict_types/
 */
declare(strict_types=1);

namespace DesignPatternsPHP\Creational\AbstractFactory;

class SamsMySQLBook extends AbstractMySQLBook
{
    private $author;
    private $title;

    function __construct()
    {
        $this->author = 'Paul Dubois';
        $this->title = 'MySQL, 3rd Edition';
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getTitle()
    {
        return $this->title;
    }
}