<?php

/**
 * In strict mode, PHP accepts only values corresponding to the type declarations and
 * issue a TypeError exception if there's a mismatch  (PHP 7)
 * Further Informations: https://www.phptutorial.net/php-tutorial/php-strict_types/
 */
declare(strict_types=1);

namespace DesignPatternsPHP\Creational\Prototype;

abstract class BookPrototype
{
    protected $title;
    protected $topic;

    abstract function __clone();

    function getTitle()
    {
        return $this->title;
    }

    function setTitle($titleIn)
    {
        $this->title = $titleIn;
    }

    function getTopic()
    {
        return $this->topic;
    }
}