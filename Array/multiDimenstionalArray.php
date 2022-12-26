<?php

$foods = [
    'vegatables' => explode(', ','potatos, carrots, capsicam'),
    'drinks' => explode(', ','Milk, Water'),
    'fruits' => explode(', ', 'Mango, Banana, Licchi')
];

print_r($foods);

array_push($foods['drinks'], 'Orange Juice');

print_r($foods);

echo $foods['vegatables'][0];

echo "\n";

$sample = [
    'test' => [
        'test-again' => [
            'a',
            'b',
            'c',
            'd'
        ]
    ],
];

echo $sample['test']['test-again'][2];