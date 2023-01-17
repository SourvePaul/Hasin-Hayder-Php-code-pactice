<?php

$fileName = "E:\\xamp\\htdocs\\Hasin Hayder code pactice\\files\\data\\f01.txt";

echo getcwd();

$fp = fopen($fileName, "w");
fwrite($fp, "Mercury\n");

fclose($fp);
?>