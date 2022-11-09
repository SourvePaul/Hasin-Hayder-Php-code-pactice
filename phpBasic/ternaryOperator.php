<?php

//Even or Odd Number
$num =12;

if($num %2 == 0) {
    echo "{$num} is a Even Number";
}else {
    echo "{$num} is a Odd Number";
}

//Ternary Opertor use
echo "\n";

$result = ($num %2 == 0) ? "Even Number" : (($num %2 != 0) ? "Odd Number" : "Not a Integer Number");
echo $result;