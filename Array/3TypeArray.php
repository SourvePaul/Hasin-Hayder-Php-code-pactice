<?php

$numbers = array(1, 2, 33, 4, 54, 65, 6, 7, 55, 66, 89 );

function square($n) {
    printf("Square of %d is %d \n", $n, $n*$n);
}

function cube($n) {
   return $n * $n * $n;
}

function even($n) {
    return $n%2 == 0;
}

// array_walk($numbers, 'square');

//$newArray = array_map('cube', $numbers);

$newArray = array_filter($numbers, 'even');

print_r($numbers);
print_r($newArray);