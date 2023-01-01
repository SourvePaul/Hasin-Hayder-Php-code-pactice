<?php

$numbers = array (3, 2,4, 5, 6, 7, 66, 31, 44);

function sum($oldValue, $newValue) {
    if($newValue%2 == 0) {
        return $oldValue + $newValue;
    }
    return $oldValue;
}

$sum = array_reduce($numbers, 'sum');

echo $sum;