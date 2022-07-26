<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Confict as Confict1;
use Data\One\Confict as Confict2;
use function Helper\helperMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new Confict1();
$conflict2 = new Conflict2();

help();

echo APP .PHP_EOL;