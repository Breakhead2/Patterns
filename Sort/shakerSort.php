<?php

function shakerSort(&$a){
    $n = count($a);
    $left = 0;
    $right = $n - 1;
    do {
        for($i = $left; $i < $right; $i++){
            if($a[$i] > $a[$i + 1]){
                list($a[$i], $a[$i + 1]) = array($a[$i + 1], $a[$i]);
            }
        }
        $right--;
        for($i = $right; $i > $left; $i--){
            if($a[$i] < $a[$i - 1]){
                list($a[$i], $a[$i - 1]) = array($a[$i - 1], $a[$i]);
            }
        }
        $left++;
    } while ($left <= $right);
}