<?php

$a=0;
$b=1;
$new=1;

for($i=0; $i<10; $i++) {
    echo $a." ";
    $b = $new;
    $new = $b + $a;
    $a = $b;
}