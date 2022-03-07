<?php

/**
 * In strict mode, PHP accepts only values corresponding to the type declarations and
 * issue a TypeError exception if there's a mismatch  (PHP 7)
 * Further Informations: https://www.phptutorial.net/php-tutorial/php-strict_types/
 */
declare(strict_types=1);

namespace DesignPatternsPHP\Creational\FactoryMethod;

class VisualQuickstartPHPBook extends AbstractPHPBook {
    private $author;
    private $title;
    function __construct() {
        $this->author = 'Larry Ullman';
        $this->title  = 'PHP for the World Wide Web';
    }
    function getAuthor() {return $this->author;}
    function getTitle() {return $this->title;}
}