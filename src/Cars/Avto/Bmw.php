<?php

namespace Robert\Cars\Avto\Bmw;

use Robert\Cars\Avto\AbstractAvto;

class Bmw extends AbstractAvto
{
    public function getCarName()
    {
        return $this->getShortClassName();
    }
}