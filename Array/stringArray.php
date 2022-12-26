<?php

// $foods = [
//     'vegatables' => 'potatos', 'carrots','capsicam'
// ];

$vegatables = explode(', ','potatos, carrots, capsicam');
var_dump($vegatables);

echo "\n";
echo $vegatables[0];
echo "\n";

$vegatableString = join(', ', $vegatables);
echo $vegatableString."\n";

