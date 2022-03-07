<?php

writeln('START TESTING FACTORY METHOD PATTERN');
writeln('');

writeln('testing OReillyFactoryMethod');
$factoryMethodInstance = new OReillyFactoryMethod;
testFactoryMethod($factoryMethodInstance);
writeln('');

writeln('testing SamsFactoryMethod');
$factoryMethodInstance = new SamsFactoryMethod;
testFactoryMethod($factoryMethodInstance);
writeln('');

writeln('END TESTING FACTORY METHOD PATTERN');
writeln('');

function testFactoryMethod($factoryMethodInstance)
{
    $phpUs = $factoryMethodInstance->makePHPBook("us");
    writeln('us php Author: ' . $phpUs->getAuthor());
    writeln('us php Title: ' . $phpUs->getTitle());

    $phpUs = $factoryMethodInstance->makePHPBook("other");
    writeln('other php Author: ' . $phpUs->getAuthor());
    writeln('other php Title: ' . $phpUs->getTitle());

    $phpUs = $factoryMethodInstance->makePHPBook("otherother");
    writeln('otherother php Author: ' . $phpUs->getAuthor());
    writeln('otherother php Title: ' . $phpUs->getTitle());
}

function writeln($line_in)
{
    echo $line_in . "<br/>";
}