<?php
$fileName = "E:\\xamp\\htdocs\\Hasin Hayder code pactice\\files\\data\\f02.txt";

file_put_contents($fileName, "\nMars\n", FILE_APPEND | LOCK_EX);


?>