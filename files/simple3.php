<?php
$fileName = "E:\\xamp\\htdocs\\Hasin Hayder code pactice\\files\\data\\f01.txt";

$fp = fopen($fileName, "r+");
$line = fgets($fp);
echo $line;

fwrite($fp, "Uranus\n");
$line = fgets($fp);
echo $line;

fclose($fp);
?>