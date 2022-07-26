<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Confict;
use function Helper\helperMe;
use const Helper\APPLICATION;

$conflict1 = new Confict();
$conflict2 = new Data\Two\Conflict();

helpMe();

echo APPLICATION .PHP_EOL;