<?php

function bubbleSort($array): array {
    for($i = 0; $i < count($array); $i++){
        for ($j = $i + 1; $j < count($array); $j++){
            if($array[$i] > $array[$j]){
                $t = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $t;
            }
        }
    }
    return $array;
}