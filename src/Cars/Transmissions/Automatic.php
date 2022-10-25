<?php

namespace Robert\Cars\Transmissions;

class Automatic implements TransmissionInterface
{
    public function getTransmission(): string
    {
        return 'Automatic';
    }
}