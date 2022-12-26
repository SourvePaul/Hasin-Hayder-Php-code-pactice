<?php

$students = array(
    "rahim",
    "karim",
    123,
    "fakir"
);

echo var_dump($students);
echo "\n";

$n = count($students);

for($i=0; $i<$n; $i++) {
    echo $students[$i]."\n";
}

echo "\n";

//reverse korlea
for($i=$n-1; $i>=0; $i--) {
    echo $students[$i]."\n";
}