<?php

// $name = "Earth";

// function globalVariable() {

//     //global $name;
//     echo $GLOBALS['name'];      //global scope
// }
// globalVariable();


//local scope

// function localVariable() {
//     $name = "Path";     //local scope

//     echo $name;
// }
// localVariable();


//static scope

function staticVariable() {
    static $i;      //static scope
    $i = $i ?? 0;
    $i++;

    echo $i."\n";
}

staticVariable();
staticVariable();
staticVariable();
