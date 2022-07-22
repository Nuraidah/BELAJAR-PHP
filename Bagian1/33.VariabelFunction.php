<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

function sampleFunction(string $name): string {
    return "Sample $name";
}

sayHello("Nur", "sampleFunction");
sayHello("Nur", "strtovpper");
sayHello("Nur", "strtovpper");