<?php


function binarySearch(&$array, $element){
    $left = 0;
    $right = count($array) - 1;
    static $find = null;

    while($left <= $right){
        $middle = floor(($left + $right) / 2);

        if($array[$middle] == $element){
            $find = $middle;
            $array = array_slice($array, $array[$middle], 1);
            binarySearch($array, $element);
        }

        elseif($array[$middle] > $element){
            $right = $middle - 1;
        }
        elseif ($array[$middle] < $element){
            $left = $middle + 1;
        }
    }
    return $find;
}