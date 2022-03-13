<?php

/*
 * Array_Push: array_push(Array, Value1, Value2, Value3) // To Add Items In Array At End Of Array
 * Array_Unshift: array_unshift(Array, Value1, Value2, Value3) // To Add Items In Array At Start Of Array
 */

$langs = array(
    "Html",
    "Css",
    "PHP",
    "Js",
);

echo "<pre>";
print_r($langs); // The Main Array
echo "</pre>";

array_push($langs, "Python", "MySQL", "Ajax");

echo "<pre>";
print_r($langs); // The Main Array After Adding Some Elements
echo "</pre>";

array_unshift($langs, "Python", "MySQL", "Ajax");

echo "<pre>";
print_r($langs); // The Main Array After Adding Some Elements
echo "</pre>";