<?php

$numbers = array(1, 2 , 33, 'a' => 54, 2, 6);

if(in_array(6, $numbers)) {
    echo '6 is found';
}

echo "\n";

$position = array_search(2, $numbers);

echo $position;

echo "\n";

if(key_exists('a', $numbers)) {
    echo 'a key is exits in this array';
}
