<?php

require_once "data/Person.php";

$person = new Person("ia", "Garut");
$person ->name = "ia";
$person ->address = "Garut";


var_dump($person);

echo "Nama : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Nur", null);
$person2->name = null;
$person2->address = "Jakarta";


var_dump($person2);
