<?php
$fileName = "E:\\xamp\\htdocs\\Hasin Hayder code pactice\\files\\data\\f04.txt";
$students = array (
    array(
        'fname' => 'Sahmim',
        'lname' => 'hasan',
        'age' => 23,
        'class' => 12,
        'roll' => 21
    ),
    array(
        'fname' => 'Rabiul',
        'lname' => 'hasan',
        'age' => 19,
        'class' => 9,
        'roll' => 2
    ),
    array(
        'fname' => 'Shahin',
        'lname' => 'Islam',
        'age' => 15,
        'class' => 7,
        'roll' => 34
    ),
);

//data write model
// $encodeedData = json_encode($students);
// file_put_contents($fileName, $encodeedData, LOCK_EX);

//data read model
$data = file_get_contents($fileName);
$allStudents = json_decode($data, true); //object pass na kore a array pass korer jono "true" use kora hoycea
print_r($allStudents);

//echo $allStudents[0] -> fname;