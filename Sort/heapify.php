<?php

function heapify(&$array, $arrayLength, $i){
    $largest = $i;
    $left = 2 * $i + 1;
    $right = 2 * $i + 2;

    if($left < $arrayLength and $array[$left] > $array[$largest]) $largest = $left;

    if($right < $arrayLength and $array[$right] > $array[$largest]) $largest = $right;

    if($largest != $i){
        $swap = $array[$i];
        $array[$i] = $array[$largest];
        $array[$largest] = $swap;

        heapify($array, $arrayLength, $largest);
    }
}

function heapSort(&$arr){
    $arrayLength = count($arr);

    for($i = $arrayLength / 2  - 1; $i >= 0; $i--) heapify($arr, $arrayLength, $i);
}