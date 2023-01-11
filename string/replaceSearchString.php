<?php
$contents = "Quick brown fox jumps over the Lazy Dogs";

$replaceString = str_replace(array('brown','fox'),array('red','cat'), $contents, $count);
echo $replaceString;
echo "<br/>";
echo "Total Replacement: {$count}";

echo "<br/>";

//string Trim()

$values = " Hello \n";
$removeSpace = trim($values,' \n');
echo $removeSpace;
echo "Data";

echo "<br/>";

$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur facere corporis, veritatis nam, ab doloribus numquam quos eius et voluptatem, consequatur accusamus? Cum, veniam expedita? Soluta, ipsa non! Nemo, eos?";

echo wordwrap($string, 26,"<br/>",true);

?>