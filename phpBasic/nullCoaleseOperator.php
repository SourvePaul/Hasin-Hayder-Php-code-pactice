<?php

$default_lat = 23.9;

$user_lat=12.4;

//using ternary operator

$lat = isset($user_lat) ? $user_lat : $default_lat;

//using null coalese operator

$lat = $user_lat ?? $default_lat;

echo $lat;

//using condition

if(isset($user_lat)) {
    $lat = $user_lat;
}else{
    $lat = $default_lat;
}