<?php

declare(strict_types=1);

namespace DesignPatternsPHP\Creational\Builder\ExampleA;


class BuilderSamsung implements Builder
{

    private $product;
    private $options;

    public function __construct(array $options)
    {
        $this->options = $options;
        $this->product = new SmartphoneSamsung();
    }

    public function addCPU()
    {
        $this->product->cpu = $this->options['cpu'];
    }

    public function addGPU()
    {
        $this->product->gpu = $this->options['gpu'];
    }

    public function addRAM()
    {
        $this->product->ram = $this->options['ram'];
    }

    public function addSensors()
    {
        $this->product->sensors = $this->options['sensors'];
    }

    public function addCamera()
    {
        $this->product->camera = $this->options['camera'];
    }

    public function addCase()
    {
        $this->product->case = $this->options['case'];
    }

    public function getProduct()
    {
        return $this->product;
    }
}