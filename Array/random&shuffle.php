<?php

$numbers = range(40, 72);
$random = mt_rand(0,32);

print_r($random);

echo "\n";

$luck = $numbers[$random];
if($luck%2 == 0) {
    echo "Tail";
}else {
    echo "Head";
}

echo "\n";

shuffle($numbers);
print_r($numbers);

echo "\n";

$randomNumber = $numbers[3];
echo $randomNumber;