<?php

$first = [
    "first_name" => "Nuraidah"
];

$last = [
    "first_name" => "Fatimah",
    "last_name" => "Azzahra"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Ia",
    "last_name" => "Nuraidah"
];

$b = [
    "first_name" => "Nuraidah",
    "last_name" => "Ia"

];

var_dump($a == $b);