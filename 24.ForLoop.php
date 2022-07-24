<?php

$counter = 1;

for ( ; $counter <= 10 ; ){
    echo "Ini adalah for loop" . PHP_EOL;
    $counter++;
}

//Perulangan dengan Init statement

for ( $counter = 1;  $counter <= 10 ; ){
    echo "Ini adalah for loop" . PHP_EOL;
    $counter++;
}

//Perulangan dengan Post Statement (eksekusi akhir Perulangan)

for ( $counter = 10;  $counter >= 1 ; $counter-- ){
    echo "Ini adalah for loop" . PHP_EOL;

}

// Syntax alternative For Loop (menggunakan : )

for ( $counter = 1;  $counter <= 10 ; ) :
    echo "Ini adalah for loop" . PHP_EOL;
    $counter++;
endfor;
