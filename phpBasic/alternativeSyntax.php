<?php

$n = 12;

if($n %2 == 0) {
    echo "{$n} is a Even Number";
}else{
    echo "{$n} is a Odd Number";
}

echo "\n";
//Alternative if else

if($n %2 == 0):
    echo "Even Number is {$n}";
    echo PHP_EOL;
    echo "Some Taxt";
else:
    echo "Odd Number is {$n}";
    echo PHP_EOL;
    echo "Some Text with number";
endif;