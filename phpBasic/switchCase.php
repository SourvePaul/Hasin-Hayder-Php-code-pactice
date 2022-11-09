<?php
$color = "red";

switch($color) {
    /*case 'red':
        echo "Red is a nice Color";
        break;
    case 'green':
        echo "Green is a nice Color";
        break;*/

    case 'red':
    case 'green':
        echo ucwords($color)." is a Nice Color";
        break;
    default:
        echo "This color is OK";
}

echo "\n";
//nested Switch Case

$n = -13;
$r = $n %2;
switch($r) {
    case 0:
        switch ($n) {
            case $n>0:
                echo "{$n} is a Positive Even Number";
                break;
            case $n<0:
                echo "{$n} is a Negative Even Number";
                break;
        }
        break;
        default:
        switch ($n) {
            case $n>0:
                echo "{$n} is a Positive Odd Number";
                break;
            case $n<0:
                echo "{$n} is a Negative Odd Number";
                break;
        }

}

//Other way
echo "\n";

switch(true) {
    case ( 0 == $r && $n>0):
        echo "{$n} is Positive Even Number.";
        break;
    case ( 1 == $r && $n>0):
        echo "{$n} is Positive Odd Number.";
        break;
    case ( 0 == $r && $n<0):
        echo "{$n} is Negative Even Number.";
        break;
    case ( -1 == $r && $n<0):
        echo "{$n} is Negative Odd Number.";
        break;
}

//funny tricks

echo "\n";

$new = "8Balls";
switch($new) {
    case (string) "9Balls":
        echo "Nice Balls";
        break;
    case (string) 8:
        echo "8 Balls have.";
        break;
    case (string) "8Balls":
        echo "Eight Balls.";
        break;
}