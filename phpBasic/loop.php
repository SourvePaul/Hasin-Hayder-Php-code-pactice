<?php

for( $i=1; $i<=10; $i++){
    echo $i;
    echo PHP_EOL;
}

$i=0;
while($i<9){
    $i++;
    echo $i.PHP_EOL;
}

$i=11;
do{
    $i++;
    echo $i.PHP_EOL;
}while($i<20);