<?php

function increment()
{
    static $counter = 1; //static scope
    echo "Conter = $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();
increment();
increment();