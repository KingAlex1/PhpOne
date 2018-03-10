<?php

$bmw["model"] = "X5";
$bmw["speed"] = 120;
$bmw["doors"] = 5;
$bmw["year"] = 2015;

$toyota["model"] = "camry";
$toyota["speed"] = 110;
$toyota["doors"] = 5;
$toyota["year"] = 2017;

$opel["model"] = "astra";
$opel["speed"] = 100;
$opel["doors"] = 3;
$opel["year"] = 2010;

$car["bmw"] = $bmw;
$car["toyota"] = $toyota;
$car["opel"] = $opel;

foreach ($car as $key => $item) {
    echo "<br>";
    echo "<br>";
    echo "CAR" . " " . $key;
    echo "<br>";
    foreach ($item as $i) {
        echo $i . " ";
    }
}
