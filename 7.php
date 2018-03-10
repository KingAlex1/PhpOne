<?php

$str = "one two three four five six seven";

echo $str;
$numbers = explode(" ", $str);
echo "<br>";
foreach ($numbers as $key => $item) {
    echo "<br>";
    echo $key . " = " . $item;
}

echo "<br>";
echo "<br>";
$num = count($numbers);
$newStr = null;
while ($num >= 0) {
    $newStr = $newStr . $numbers[$num] . "|";
    $num--;

}
echo "<br>";
echo $newStr;

