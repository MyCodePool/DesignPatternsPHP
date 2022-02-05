<?php

declare(strict_types=1);

namespace DesignPatternsPHP\Creational\Builder;

class Director
{
    public function build(Builder $builder)
    {
        $builder->addCPU();
        $builder->addGPU();
        $builder->addRAM();
        $builder->addSensors();
        $builder->addCamera();
        $builder->addCase();

        return $builder->getProduct();
    }
}