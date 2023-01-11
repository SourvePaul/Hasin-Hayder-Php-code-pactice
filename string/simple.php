<?php
$name = "source";

echo 'This is a $name \t';
echo "\n This is a $name ";


// 2 type string writting way
// Heredoc and Nowdoc

$Heredoc = <<<EOD
data1
this is collect of {$name} \n
more text
EOD;

echo $Heredoc;

$Nowdoc = <<<'EOD'
 data 2
this is collect of {$name} \t
some text  
EOD;

echo $Nowdoc;

echo "\n";
echo ord('A');     // ASCII Code
echo chr('98');     // ASCII Value


?>