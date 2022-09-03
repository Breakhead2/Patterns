<?php

function quickSort(&$arr, $low, $high){
    $i = $low;
    $j = $high;
    $middle = $arr[($low + $high) / 2];

    do {
        while($arr[$i] < $middle){
            ++$i;
        }
        while($arr[$j] > $middle){
            --$j;
        }

        if($i <= $j){
            $t = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $t;

            $i++;
            $j--;
        }
    }while ($i <= $j);

    if($low < $j){
        quickSort($arr, $low, $j);
    }

    if($i < $high){
        quickSort($arr, $i, $high);
    }

}
