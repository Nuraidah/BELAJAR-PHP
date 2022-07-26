<?php

//Reference terhadap variable
$name = "Ia";

$otherName = &$name;

$otherName = "Nuraidah";

echo $name . PHP_EOL;


//Reference terhadap varameter
function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

//Reference return value
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;