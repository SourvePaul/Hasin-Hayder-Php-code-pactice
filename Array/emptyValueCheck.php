<?php

$name='';

if(isset($name)) {
    echo "not isset empty";
}else{
    echo "isset empty";;
}

echo "\n";

//another way

if(empty($name)) {
    echo "not empty";
}else {
    echo "empty";
}

echo "\n";

//another way

if(isset($name) && (is_numeric($name) ||  $name!= '')) {
    echo "Name is set and is not empty";
}else {
    echo "Name is either than not set or it's empty";
}