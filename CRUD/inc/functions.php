<?php

define('DB_NAME','E:\\xamp\\htdocs\\Hasin Hayder code pactice\\crud\\data\\db.txt');
function seed()
{
    $data = array(
        array(
            'id' => 1,
            'fname' => 'Rabiul',
            'lname' => 'Islam',
            'roll' => 7,
        ),
        array(
            'id' => 2,
            'fname' => 'Saimun',
            'lname' => 'Hossen',
            'roll' => 11,
        ),
        array(
            'id' => 3,
            'fname' => 'Nikil',
            'lname' => 'Condra',
            'roll' => 10,
        ),
        array(
            'id' => 4,
            'fname' => 'Hasan',
            'lname' => 'Islam',
            'roll' => 8,
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
        <!--  echo $student['fname'] .' '. $student['lname']; -->
        <td><?php printf('%s', $student['roll']); ?></td>
        <!--  echo $student['roll']; -->
        <td>
            <?php printf('<a href="index.php?task=edit&id=%s"> Edit </a> | <a class="delete" href="index.php?task=delete&id=%s"> Delete </a>', $student['id'], $student['id'] ); ?>

        </td>
    </tr>
    <?php
    }

    ?>

</table>
<?php

}

function addStudent( $fname, $lname, $roll ) {
    $found = false;
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach($students as $_student) {
        if($_student['roll'] == $roll) {
            $found = true;
            break;
        }
    }
    if(!$found) { 
    $newID = getNewId($students);           //count($students) + 1
    $student = array(
        'id' => $newID,
        'fname' => $fname,
        'lname' => $lname,
        'roll' => $roll,
    );
    array_push($students, $student);
    $serializedData = serialize($students);
    file_put_contents(DB_NAME, $serializedData, LOCK_EX);
    return true;
    }
    return false;
}

function getStudent($id) {
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach($students as $student) {
        if($student['id'] == $id) {
            return $student;
        }
    }
    return false;
}

function updateStudent($id, $fname, $lname, $roll ) {
    $found = false;
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    foreach($students as $_student) {
        if($_student['roll'] == $roll && $_student['id'] != $id) {
            $found = true;
            break;
        }
    }
    if( !$found) { 
    $students[$id-1]['fname'] = $fname;
    $students[$id-1]['lname'] = $lname;
    $students[$id-1]['roll'] = $roll;
    $serializedData = serialize($students);
    file_put_contents(DB_NAME, $serializedData, LOCK_EX);
    return true;
    }
    return false;
}

function deleteStudent($id) {
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
    //unset($student[$id-1]);
    foreach($students as $offset => $student) {
        if($student['id'] == $id) {
            unset($students[$offset]);
        }
    }
    $serializedData = serialize($students);
    file_put_contents(DB_NAME, $serializedData, LOCK_EX);
}

function getNewId($students) {
    $maxId = max(array_column($students, 'id'));
    return $maxId + 1;
}