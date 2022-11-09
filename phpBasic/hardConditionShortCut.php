<?php
// search Leap Year 
//divide to %4
//divided to %100
//divided to %400

$year = 1972;

if($year %4 == 0 && $year %100 == 0 && $year %400 == 0 ) {
    echo "{$year} is a Leap Year Number";
} elseif($year %4 == 0 && $year %100 == 0) {
    echo "{$year} is't a Leap Year Number";
} elseif($year %4 == 0) {
    echo "{$year} is a Leap Year";
}else {
    echo "{$year} is't a Leap Year number. ";
}

echo "\n";
//other way

if($year %4 == 0 && ($year %100 != 0 || $year %400 == 0)) {
    echo "{$year} is a Leap Year"; 
}else {
    echo "{$year} is't a Leap Year";
}

echo "\n";

//nested if
$num = true;
$num2 = false;
$num3 = true;

if($num) {
    if($num2) {
        if($num3) {
            echo "Hello";
        }else{
            echo "No1";
        }
    }else{
        echo "No2";
    }
}else{
    echo "No3";
}

echo "\n";

//shortcut

if($num && $num2 && $num3) {
    echo "Hello";
}elseif($num && $num2) {
    echo "NO1";
}elseif($num){
    echo "No2";
}else {
    echo "No3";
}
