<?php

$counter = 1;

while ($counter >= 10){
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;
}

//Syntax Alternative While Loop

$counter = 1;
while ($counter >= 10):
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;
endwhile;