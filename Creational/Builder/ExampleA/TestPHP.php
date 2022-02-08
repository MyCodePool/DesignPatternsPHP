<?php

declare(strict_types=1);

namespace DesignPatternsPHP\Creational\Builder\ExampleA;


$director = new Director();

$builderSamsung = new BuilderSamsung([
    'cpu' => 'Snapdragon 820',
    'gpu' => 'Adreno 530',
    'ram' => 4,
    'sensors' => ['UV', 'Barometer', 'Altimeter', 'GPS', 'GLONASS'],
    'camera' => 12,
    'case' => 'Silver Metalic Case'
]);
$builderApple = new BuilderApple([
    'cpu' => 'A10',
    'gpu' => 'Apple',
    'ram' => 3,
    'sensors' => ['UV', 'Barometer', 'Altimeter', 'GPS', 'GLONASS'],
    'camera' => 12,
    'case' => 'Black Matt Case'
]);
$builderHtc = new BuilderHTC([
    'cpu' => 'Snapdragon 810',
    'gpu' => 'Adreno 520',
    'ram' => 4,
    'sensors' => ['UV', 'Barometer', 'Altimeter', 'GPS'],
    'camera' => 8,
    'case' => 'Blue Matt Case'
]);

$note7 = $director->buildPhone($builderSamsung);
$iphone7Plus = $director->buildPhone($builderApple);
$htc = $director->buildPhone($builderHtc);

echo $note7."</br>";
echo $iphone7Plus."</br>";
echo $htc;
