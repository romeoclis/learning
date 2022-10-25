<?php

namespace Robert\Cars\Avto\Models;

use Robert\Cars\Engine\EngineInterface;
use Robert\Cars\Transmissions\TransmissionInterface;

abstract class AbstractModel implements ModelInterface
{
    private $engine;

    private $transmission;

    public function getEngine()
    {
        return $this->engine->getEngine();
    }

    public function setEngine(EngineInterface $engine)
    {
        $this->engine = $engine;
        return $this;
    }

    public function getTransmission()
    {
        return $this->transmission->getTransmission();
    }

    public function setTransmission(TransmissionInterface $transmission)
    {
        $this->transmission = $transmission;
        return $this;
    }
}