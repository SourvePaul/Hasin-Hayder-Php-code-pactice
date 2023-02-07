<?php

define('DB_NAME','E:\\xamp\\htdocs\\Hasin Hayder code pactice\\crud\\data\\db.txt');
function seed()
{
    $data = array(
        array(
            'id' => 1,
            'fname' => 'Rabiul',
            'lname' => 'Islam',
            'roll' => '7',
        ),
        array(
            'id' => 2,
            'fname' => 'Saimun',
            'lname' => 'Hossen',
            'roll' => '11',
        ),
        array(
            'id' => 3,
            'fname' => 'Nikil',
            'lname' => 'Condra',
            'roll' => '10',
        ),
        array(
            'id' => 4,
            'fname' => 'Hasan',
            'lname' => 'Islam',
            'roll' => '8',
        ),
    );

    $serializedData = serialize($data);
    file_put_contents(DB_NAME, $serializedData, LOCK_EX);
}

function generateReport() {
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);

    ?>
<table>
    <tr>
        <th>Name: </th>
        <th>Roll: </th>
        <th width="25%">Action</th>
    </tr>

    <?php
    foreach ($students as $student) {
        ?>
    <tr>
        <td><?php printf('%s %s', $student['fname'], $student['lname']); ?></td>
        <td><?php printf('%s', $student['roll']); ?></td>
        <td><?php printf('<a href="#"> Edit </a> | <a href="#"> Delete </a>'); ?></td>
    </tr>
    <?php
    }

    ?>

</table>
<?php

}