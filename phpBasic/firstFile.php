<?php
// $name = "Saimun Hossen";
// var_dump($name);

// $result= true;
// var_dump($result);

// $mean = "Earth";
// echo 'We\'are living on {$mean}'."\n";
// echo "We're living on ".$mean. "\n";
// printf(" We're living on %s\n", $mean);
// printf("%s is living on %s", strtoupper($name), strrev($mean));
// // two time '' use kortea holea '\' use kortea hobea



// //Octal, Decimal, HexaDecimal Number System
// $n = 12;
// $o = 012;
// $h = 0x1B;
// printf("The number is %d %d and %d \n",$n, $o, $h);

// printf("The number of Binary is %d to %b \n", $n, $n);

// printf("The number of HexaDecimal is %d to %x \n", $h, $h);

// printf("The number of Octal is %d to %o \n", $o, $o);



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