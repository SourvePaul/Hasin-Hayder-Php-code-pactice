<?php

$person = array('fName'=>'Hello','lName'=>'World');

//call by value
//or deep copy

$newPerson = $person;
$newPerson['lName'] = 'Pluto';

print_r($person);
print_r($newPerson);

//copy by reference
//or
//shallow copy
$newPerson = &$person;
$newPerson['lName'] = 'Changed';

print_r($person);
print_r($newPerson);