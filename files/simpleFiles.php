<?php
$filesLocation = "E:\\xamp\\htdocs\\Hasin Hayder code pactice\\files\\data\\f01.txt";

echo getcwd();

// $file = fopen($filesLocation, 'r');
// $line = fgets($file, 7);
// echo $line;

$fp = fopen($filesLocation, 'r');
while($line = fgets($fp)) {
    echo $line;
}

rewind($fp);

while($line = fgets($fp)) {
    echo $line;
}

fclose($file);
