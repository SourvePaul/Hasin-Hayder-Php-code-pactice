<?php

$x=5;
$y=6;

$result = $x<=>$y;

if($result == 1) {
    echo "{$x} is greater than {$y}";
}
elseif($result == 0) {
    echo "{$x} is equal to {$y}";
}
elseif($result == -1) {
    echo "{$x} is lower than {$y}";
}