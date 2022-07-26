<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Nur";
$manager->sayHello("Fatimah");

$vp = new VicePresident();
$vp->name = "Nur";
$vp->sayHello("Fatimah");