<?php
$fileName = "E:\\xamp\\htdocs\\Hasin Hayder code pactice\\files\\data\\f03.txt";
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

//write er model

// $fp = fopen($fileName,"w");
// foreach($students as $student) {
//     $data = sprintf("%s %s %s %s %s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
//      fputcsv($fp, $data)  //comma-separated-value
//     fwrite($fp, $data);
// }
// fclose($fp);


//read er model

// $fp = fopen($fileName, "r");
// while($data = fgets($fp)) {
//     $student = explode(" ,", $data);
//     printf("Full_Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
// }
// fclose($fp);

//append er model
// $student =  array(
//     'fname' => 'kamal',
//     'lname' => 'Islam',
//     'age' => 14,
//     'class' => 7,
//     'roll' => 14
// );

// $fp = fopen($fileName, "a");
// fputcsv($fp, $student);
// fclose($fp);


//unset korer model

// $data = file($fileName);
// unset($data[1]);
// print_r($data);

// $fp = fopen($fileName, "w");
// foreach($data as $line) {
//     fwrite($fp, $line);
// }
// fclose($fp);


//serialiize model

// $data = serialize($students);
// file_put_contents($fileName, $data, FILE_APPEND | LOCK_EX);

$dataFromFile = file_get_contents($fileName);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);

// unset($allStudents[1]);
// $data = serialize($allStudents, $data);
// file_put_contents($fileName, $data, FILE_APPEND | LOCK_EX);

?>