<?php


//one parameter

function printNumber($i) {
    if($i>=16){
        return;
    }
    echo $i."\n";
    $i++;
    printNumber($i);
}

//printNumber(0);


//multiple parameter with stepping

function allNumbers($startValue, $endValue, $stepping=1 ) {
    if($startValue > $endValue) {
        return;
    }

    echo $startValue."\n";
    $startValue+= $stepping;
    allNumbers($startValue, $endValue, $stepping);
}

allNumbers(16,42);