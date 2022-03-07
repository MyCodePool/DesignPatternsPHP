<?php

/**
 * In strict mode, PHP accepts only values corresponding to the type declarations and
 * issue a TypeError exception if there's a mismatch  (PHP 7)
 * Further Informations: https://www.phptutorial.net/php-tutorial/php-strict_types/
 */
declare(strict_types=1);

namespace DesignPatternsPHP\Creational\Prototype;

writeln('BEGIN TESTING PROTOTYPE PATTERN');
writeln('');

$phpProto = new PHPBookPrototype();
$sqlProto = new SQLBookPrototype();

$book1 = clone $sqlProto;
$book1->setTitle('SQL For Cats');
writeln('Book 1 topic: ' . $book1->getTopic());
writeln('Book 1 title: ' . $book1->getTitle());
writeln('');

$book2 = clone $phpProto;
$book2->setTitle('OReilly Learning PHP 5');
writeln('Book 2 topic: ' . $book2->getTopic());
writeln('Book 2 title: ' . $book2->getTitle());
writeln('');

$book3 = clone $sqlProto;
$book3->setTitle('OReilly Learning SQL');
writeln('Book 3 topic: ' . $book3->getTopic());
writeln('Book 3 title: ' . $book3->getTitle());
writeln('');

writeln('END TESTING PROTOTYPE PATTERN');

function writeln($line_in)
{
    echo $line_in . "<br/>";
}