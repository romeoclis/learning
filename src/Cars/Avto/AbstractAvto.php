<?php

namespace Robert\Cars\Avto;

use Robert\Cars\Avto\Models\ModelInterface;

abstract class AbstractAvto implements AvtoInterface
{
    public function __construct(private ModelInterface $model){}

    public function getModel()
    {
        return $this->model->getModel();
    }

    public function getEngine()
    {
        return $this->model->getEngine();
    }

    public function getTransmission()
    {
        return $this->model->getTransmission();
    }

    protected function getShortClassName(): string
    {
       return (new \ReflectionClass($this))->getShortName();
    }
}