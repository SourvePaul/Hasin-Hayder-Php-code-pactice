<?php

$n=6;
for($i=$n, $factorial=1; $i>1; $i--) {
    $factorial = $factorial * $i;
}

printf("Factorial of number %d is %d", $n, $factorial);
echo PHP_EOL;

$j =1;
for($n=1; $n<=20; $n++) {
    $result = 1;
    for($i=$n; $i>1; $i--) {
        $result*= $i;
        $j++;
    }
    echo "Factorial of {$n} is {$result} \n";
}
echo "Total {$j} numbers of Operation Done \n";

echo PHP_EOL;


$result=1;
$j=1;
for($n=1; $n<=20; $n++) {
    $result*=$n;
    $j++;
    echo "Factorial of {$n} is {$result} \n";
}
echo "Total {$j} numbers of Operation Done \n";