<?php

$student = array(
    'fName' => 'Samba',
    'lName' => 'rafa',
    'Age' => 23
);

print_r($student);

printf("%s %s \n", $student['fName'], $student['lName']);

$serialized = serialize($student);
echo $serialized;

echo "\n";

$newStudent = unserialize($serialized);
print_r($newStudent);

echo "\n";

$jsonFormat = json_encode($student);
echo $jsonFormat;

echo "\n";

$newJsonFormat = json_decode($jsonFormat, true); //true use na korlea object a show korea
print_r($newJsonFormat);