<?php


$foods = [
    'vegatables' => 'potatos', 'carrots','capsicam',
    'drinks' => 'milk', 'water',
    'fruits' => 'mango', 'banana', 'apple'
];

//new insert data
$foods['drinks'] = $foods['drinks'].", orange";


foreach($foods as $key => $value) {
    echo $key ."=". $value."\n"; 
}

echo "\n";

//for loop use kortea holea

$keys = array_keys($foods);
for($i=0; $i<count($keys); $i++) {
    $key = $keys[$i];
    echo $foods[$key]."\n";
}

echo "\n";

$values = array_values($foods);
for($i=0; $i<count($values); $i++) {
    $value = $values[$i];
    echo $value."\n";
}