<?php

$number1 = array(11, 2, 43, 5, 3, 67);
$number2 = array(1, 4, 43, 69, 9, 67, 45);

$fruits1 = array('apple','guava', "v"=>'lemon', 'nuts');
$fruits2 = array('lemon', 'banana', 'guava', 'mango', 'nuts');

$common = array_intersect($number1, $number2);
print_r($common);

echo "\n";

$common1 = array_intersect_assoc($fruits1, $fruits2);
print_r($common1);

echo "\n";

$different = array_diff($number1, $number2);
print_r($different);

echo "\n";

$different1 = array_diff_assoc($fruits1, $fruits2);
print_r($different1);