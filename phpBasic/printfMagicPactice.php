<?php

//Anything move first or last
$fName = "Faysal";
$lName = "Ahmed";
printf('His Name is %2$s %1$s', $lName, $fName);

//point after 2 number 
$num = 42.132;
printf("\n The number is %.2f", $num);
echo "\n";

$m = 234;
$n = 43;

printf("%04d",$m);
echo "\n";
printf("%04d",$n);

echo "\n";

//For point number
$m = 234.5467;
$n = 43.563;

printf("%06.1f",$m);
echo "\n";
printf("%06.1f",$n);