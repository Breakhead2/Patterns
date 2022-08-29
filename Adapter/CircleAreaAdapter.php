<?php

namespace Adapter;

use Adapter\interfaces\ICircle;
use Adapter\lib\CircleAreaLib;

class CircleAreaAdapter implements ICircle
{
    protected $circleAreaLib;

    public function __construct()
    {
        $this->circleAreaLib = new CircleAreaLib();
    }

    function circleArea(int $circumference)
    {
        $diagonal = round($circumference / M_PI);
       return $this->circleAreaLib->getCircleArea($diagonal);
    }


}