<?php

/*
 * Array Random: array_rand(Array, Number)
 */

$array = array("Abdou", "Ibrahim", "Mohamed", "Mahmoud", "Ahmed");

echo "<pre>";
print_r($array);
echo "</pre>";

$randomKey = array_rand($array, 2);
echo $array[$randomKey[0]] . "<br>";
echo $array[$randomKey[1]] . "<br>";

echo "<pre>";
print_r($randomKey);
echo "</pre>";