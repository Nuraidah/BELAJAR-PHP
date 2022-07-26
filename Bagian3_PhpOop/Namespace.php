<?php

namespace {
    require_once "data/Conflict.php";
    require_once "data/Helper.php";

    $conflict1 = new Data\One\Confict();
    $conflict2 = new Data\Two\Conflict();

    echo Helper\APPLICATION . PHP_EOL;

    Helper\helper();

}