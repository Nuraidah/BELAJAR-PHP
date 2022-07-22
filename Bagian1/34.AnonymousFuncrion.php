<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Summayah");
$sayHello("Budi");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye ("summayah", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string{
    return strtoupper($name);
};

sayGoodBye("Summayah", $filterFunction);

$firstName = "Eko";
$lastName = "Kurniawan";

$sayHelloEko = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloEko;

$firstName = "Budi";
$lastName = "Nugraha";
$sayHelloEko();
