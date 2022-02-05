<?php

declare(strict_types=1);

namespace DesignPatternsPHP\Creational\Builder\ExampleA;


$creator = new SmartPhoneCreator();

$samsungBuilder = new SamsungPhoneBuilder([
    'cpu' => 'Snapdragon 820',
    'gpu' => 'Adreno 530',
    'ram' => 4,
    'sensors' => ['UV', 'Barometer', 'Altimeter', 'GPS', 'GLONASS'],
    'camera' => 12,
    'case' => 'Silver Metalic Case'
]);
$appleBuilder = new ApplePhoneBuilder([
    'cpu' => 'A10',
    'gpu' => 'Apple',
    'ram' => 3,
    'sensors' => ['UV', 'Barometer', 'Altimeter', 'GPS', 'GLONASS'],
    'camera' => 12,
    'case' => 'Black Matt Case'
]);
$htcBuilder = new HTCPhoneBuilder([
    'cpu' => 'Snapdragon 810',
    'gpu' => 'Adreno 520',
    'ram' => 4,
    'sensors' => ['UV', 'Barometer', 'Altimeter', 'GPS'],
    'camera' => 8,
    'case' => 'Blue Matt Case'
]);

$note7 = $creator->buildPhone($samsungBuilder);
$iphone7Plus = $creator->buildPhone($appleBuilder);
$htc = $creator->buildPhone($htcBuilder);

echo $note7."</br>";
echo $iphone7Plus."</br>";
echo $htc;