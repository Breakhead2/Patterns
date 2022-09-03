<?php

function getArray(): array
{
    return _randArray(1000);
}

function _randArray($elements): array
{
    $array = [];
    $n = 0;
    while($n < $elements){
        $item = rand(0, 10);
        $array[] = $item;
        $n++;
    }
    return $array;
}