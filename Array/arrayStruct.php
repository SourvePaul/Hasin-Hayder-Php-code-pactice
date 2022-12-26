<?php

$stuct = array('apple', 'banana', 'guava', 'orange', 'lemon');

$arrayStruct = array_slice($stuct, -2,3);

$newStuct = array("jackfruits", "watermilan");
$arrayModifier = array_splice($stuct, 1, -1, $newStuct);

//print_r($arrayStruct);

print_r($arrayModifier);
print_r($stuct);