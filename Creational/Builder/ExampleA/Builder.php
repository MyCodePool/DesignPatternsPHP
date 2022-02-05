<?php

declare(strict_types=1);

namespace DesignPatternsPHP\Creational\Builder;


interface SmartPhoneBuilder
{
    public function addCPU();
    public function addGPU();
    public function addRAM();
    public function addSensors();
    public function addCamera();
    public function addCase();
    public function getProduct();
}