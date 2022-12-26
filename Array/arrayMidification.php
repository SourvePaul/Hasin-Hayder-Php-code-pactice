<?php

$students = [
    "Rafi",
    "Zafi",
    123,
    "safik"
];

$students[2] = "kafi";

$n = count($students);

for($i=0; $i<$n; $i++) {
    echo $students[$i]."\n";
}

echo "\n";

$student = array_pop($students);

echo "\n";
echo $student."\n";
echo "\n";

$student = array_shift($students);
echo "\n";
echo $student."\n";
echo "\n";


$students[] = "jamal";
array_push($students, "kamal");
$n = count($students);
for($i=0; $i<$n; $i++) {
    echo $students[$i]."\n";
}

echo "\n";
array_unshift($students, "probir");
$n = count($students);
for($i=0; $i<$n; $i++) {
    echo $students[$i]."\n";
}