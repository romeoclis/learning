<?php

namespace Robert\Cars;

use Robert\Cars\Avto\AvtoInterface;

class Avto implements MovableInterface
{
    private $speed = 0;

    private $currentSpeed;

    public function __construct(public AvtoInterface $carModel, public int $maxSpeed){}

    public function start()
    {
        foreach ($this->getCar() as $key => $value) {
            echo $key . ':' . $value . PHP_EOL;
        }

        $this->currentSpeed = 1;
        echo 'Start move' . PHP_EOL;
    }

    public function stop()
    {
        $this->currentSpeed = 0;
        return 'Stop move' . PHP_EOL;
    }

    public function up(int $unit)
    {
        $this->currentSpeed = $this->speed += $unit;

        if($this->currentSpeed > $this->maxSpeed){
            $this->currentSpeed = $this->maxSpeed;
        }

        if ($this->currentSpeed < $this->maxSpeed) {
            echo $this->currentSpeed . ' км/ч ' . PHP_EOL;
        }else {
            echo 'Достигнута максимальная скорость движения автомобиля:' . PHP_EOL;
        }
    }

    public function down(int $unit)
    {
        $this->currentSpeed -= $unit;

        if($this->currentSpeed < 0){
            $this->currentSpeed = 0;
        }

        if ($this->currentSpeed === 0 || $this->currentSpeed < 0) {
            echo 'Автомобиль остановился ' . $this->currentSpeed . ' км/ч';
        } elseif ($this->currentSpeed !== 0) {
            echo $this->currentSpeed . ' км/ч ' . PHP_EOL;
        }
    }

    public function getCar(): array
    {
        return [
            'Car' => $this->carModel->getCarName(),
            'Model' => $this->carModel->getModel(),
            'Engine' => $this->carModel->getEngine(),
            'Transmission' => $this->carModel->getTransmission()
        ];

    }
}