<?php

include "modules/getArray.php";
include "Sort/bubbleSort.php";
include "Sort/shakerSort.php";
include "Sort/quickSort.php";
include "Sort/heapify.php";
include "Search/binarySearch.php";

$array = getArray();
$start = microtime(true);
bubbleSort($array);
echo "Сортировка пузырьковая: ". ( microtime(true) - $start) . PHP_EOL;

$array = getArray();
$start = microtime(true);
shakerSort($array);
echo "Сортировка шейкерная: ". ( microtime(true) - $start) . PHP_EOL;

$array = getArray();
$start = microtime(true);
quickSort($array, 0, count($array) - 1);
echo "Сортировка быстрая кастомная: ". ( microtime(true) - $start) . PHP_EOL;

$array = getArray();
$start = microtime(true);
heapSort($array);
echo "Сортировка пирамидальная: ". ( microtime(true) - $start) . PHP_EOL;


//удаление элемента массива
$array = [1, 2, 3, 4, 5, 6, 6, 5, 6];
$element = binarySearch($array, 6);

