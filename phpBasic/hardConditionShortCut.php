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