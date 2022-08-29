<?php

namespace Adapter\lib;

class SquareAreaLib
{
    public function getSquareArea(int $diagonal)
    {
        return ($diagonal**2)/2;
    }
}