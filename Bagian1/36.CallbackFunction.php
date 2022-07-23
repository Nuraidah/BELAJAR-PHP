<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Ia", "strtoupper");
sayHello("Ia", "strtolower");
sayHello("Ia", function (string $name): string {
    return strtoupper($name);
});
sayHello("Ia", fn($name) => strtoupper($name));