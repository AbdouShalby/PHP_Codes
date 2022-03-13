<?php

/*
 * Array Unique: array_unique(Array, Sorting Type) // Remove Frequent Elements From Array With There Index
 */

$array = array("Abdou", "Yousef", "Abdou", "Ahmed", "Ahmed", "Abdou");

$unique = array_unique($array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<pre>";
print_r($unique);
echo "</pre>";