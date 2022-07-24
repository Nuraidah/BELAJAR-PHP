<?php

for ($counter = 1; $counter <= 100; $counter++){
    if($counter % 2 == 0){
        continue;
    }
    echo "Counter : $counter" . PHP_EOL;
}

//Menghentikan perulangan saat ini dan melanjutkan
// ke perulangan selanjutnya