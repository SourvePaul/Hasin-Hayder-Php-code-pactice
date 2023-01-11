<?php

$content = "Hello World, What's happen in now?";

$search = stripos($content, "happen");  //strpos is case-sensative  
                                        //strripos is start to search last point
echo $search;

echo "</br>";

$offset = $search;
if($offset !== false) {
    echo "\n Word was found\n";
}else {
    echo "\nWord was not found\n";
}

?>