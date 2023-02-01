<?php

define('DB_NAME', '\\E:\\xamp\\htdocs\Hasin Hayder code pactice\\CRUD\\data\\db.txt');
//  /e/xamp/htdocs/Hasin Hayder code pactice/CRUD

function seed() {
    $data = array(
        array(
            'fname' => 'Rakib',
            'lname' => 'Ahmed',
            'roll' => '12'
        ),
        array(
            'fname' => 'Shamim',
            'lname' => 'Ahmed',
            'roll' => '11'
        ),
        array(
            'fname' => 'Shahin',
            'lname' => 'Ahmed',
            'roll' => '9'
        ),
        array(
            'fname' => 'Nhikil',
            'lname' => 'Sarkar',
            'roll' => '22'
        ),
        array(
            'fname' => 'Reza',
            'lname' => 'Rozario',
            'roll' => '15'
        ),
        array(
            'fname' => 'Shumon',
            'lname' => 'Das',
            'roll' => '12'
        ),
        array(
            'fname' => 'Ripon',
            'lname' => 'Ahmed',
            'roll' => '25'
        ),
        array(
            'fname' => 'Kamal',
            'lname' => 'Ahmed',
            'roll' => '19'
        ),
    );

    $serializeData = serialize($data);
    file_put_contents(DB_NAME, $serializeData, LOCK_EX);

}



?>