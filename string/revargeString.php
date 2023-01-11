<?php

$string = "Hello World";

$length = strlen($string);  //strlen($string)-1;
for($i=1; $i<=$length; $i++) {
    echo $string[$i * -1];
}

echo PHP_EOL;

$length1 = strlen($string)-1;
for($i=$length1; $i>=0; $i--) {
    echo $string[$i];
}

echo PHP_EOL;

echo strrev($string);


echo PHP_EOL;

$value = "Hello world, How are you?";

$parts = explode(" ", $value);
print_r($parts);

echo PHP_EOL;

$original = implode(" ",$parts);        //implode() or join() are same
echo $original;
echo "</br>";

print_r(str_split($value));
echo "</br>";

$parts2 = array_count_values(str_split($value));;
print_r($parts2);

echo "</br>";

//Tokenize string iterator object 
//directly don't use count()

$parts3 = strtok($value, " ,");
while($parts3 !== false) {
    echo $parts3."</br>";
    $parts3 = strtok(" ,");
}

echo "</br>";

//regular expresion use korea

$parts4 = preg_split("/ |,/", $value);
print_r($parts4);
?>