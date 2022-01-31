<?php

/**
 * In strict mode, PHP accepts only values corresponding to the type declarations and 
 * issue a TypeError exception if there's a mismatch  (PHP 7)
 * Further Informations: https://www.phptutorial.net/php-tutorial/php-strict_types/
 */
declare(strict_types=1);

namespace DesignPatternsPHP\Creational\Singleton;

use Exception;

final class Singleton
{
	/**
	 * Nullable types (PHP 7)
	 * Which defines ?int as either int or null.
	 * Type declarations for parameters and return values can now be marked as nullable 
	 * by prefixing the type name with a question mark.
	 * Further Informations: https://www.php.net/manual/en/migration71.new-features.php
	 **/
    private static ?Singleton $instance = null;

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance(): Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static(); # https://stackoverflow.com/questions/5197300/new-self-vs-new-static/5197655
        }

        return static::$instance;
    }

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct()
    {
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton");
    }
}