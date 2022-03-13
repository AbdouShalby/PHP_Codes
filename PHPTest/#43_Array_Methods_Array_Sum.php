<?php

/*
 * Array Sum: array_sum(Array); // Calculate All Values Inside Array
 */

$array = array(20, 4.25, 30, "Ibrahim", 10, 40, 100, "Abdou", 25.5);
$array2 = array(
    "One"   => "Abdou",
    "Two"   => 10,
    "Three" => 20,
    "Four"  => 6.75
);

$sum = array_sum($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo $sum;

$sum2 = array_sum($array2);

echo "<pre>";
print_r($array2);
echo "</pre>";

echo $sum2;