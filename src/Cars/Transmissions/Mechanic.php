<?php

namespace Robert\Cars\Transmissions;

class Mechanic implements TransmissionInterface
{
    public function getTransmission(): string
    {
        return 'Mechanic';
    }
}