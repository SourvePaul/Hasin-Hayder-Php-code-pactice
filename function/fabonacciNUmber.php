<?php

function fabonacci($old, $new, $start, $end) {

    if($start > $end) {
        return;
    }

$start++;

echo $old." ";
$_temp = $old + $new;
$old = $new;
$new = $_temp;

fabonacci($old, $new, $start, $end);

}
fabonacci(0,1,1,10);