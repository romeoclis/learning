<?php

namespace Robert\Cars\Avto\Audi;

use Robert\Cars\Avto\AbstractAvto;

class Audi extends AbstractAvto
{
    public function getCarName()
    {
        return $this->getShortClassName();
    }
}