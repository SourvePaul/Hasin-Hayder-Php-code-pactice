<?php

$n=6;
for($i=$n, $factorial=1; $i>1; $i--) {
    $factorial = $factorial * $i;
}

printf("Factorial of number %d is %d", $n, $factorial);