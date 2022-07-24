<?php

$names = ["Ia", "Nur", "Aidah"];

for ($i = 0; $i < count($names); $i++){
    echo "Data ke $i = $names[$i]" . PHP_EOL;

}

//For Each Loop

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

//For Each dengan key

$person = [
    "first_name" => "Ia",
    "midle_name" => "Nur",
    "last_name" => "Aidah"
];

foreach ($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}