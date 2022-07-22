<?php

function sayHello($firstName,  $lastName = "")
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello("Fatimah");
sayHello("Summayah");
sayHello("Fatimah", "Summayah");

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);

//variable-length argument list

function sumAll(...$values)
{
  $total = 0;
  foreach ($values as $value){
      $total += $value;
  }
  echo "Total" . implode(",", $values) . " = $total" . PHP_EOL;
}
sumAll(1, 2, 3, 4, 5);