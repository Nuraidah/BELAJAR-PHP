<?php


require_once "data/Person.php";

$Ia = new Person("ia", "Garut");
$Ia->name = "Ia";
$Ia->sayHallo("Summayah");

$Nur = new Person("Nur", "Cirebon");
$Nur->name = "Nur";
$Nur->sayHallo(null);

$Ia->info();
$Nur->info();