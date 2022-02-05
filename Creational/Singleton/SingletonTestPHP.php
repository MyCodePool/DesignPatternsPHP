<?php

declare(strict_types=1);

namespace DesignPatternsPHP\Creational\Singleton;

class SingletonTestPHP
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

		 if ($firstCall == $secondCall) {
			echo 'firstCall and secondCall are equal.';
		} else {
			echo 'firstCall and secondCall are not equal.';
		}
    }
}