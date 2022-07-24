<?php

$name = "Ia"; //global scope

function sayHallo()
{
    global $name; // global keyword
    echo $name . PHP_EOL;

    echo $GLOBALS["name"] . PHP_EOL;

}

sayHello();