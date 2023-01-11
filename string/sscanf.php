<?php

$context = "Abul Hossen 0123456789 adc@gmail.com";

$parts = sscanf($context,"%s %s %11d %s");
print_r($parts);

echo "<br/>";

sscanf($context,"%s %s %11d %s", $fname, $lname, $Mnumber, $mail);
echo $fname;
echo "<br/>";
echo $mail;

echo "<br/>";

$hexcolor = "#FF2F44";
sscanf($hexcolor, "#%2x%2x%2x", $red, $green, $blue);
echo $blue;
?>