<?php

function createName()
{
    $name = "ia"; //local scope
}

createName();
echo $name . PHP_EOL;