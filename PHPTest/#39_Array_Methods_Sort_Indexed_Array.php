<?php

/*
 * Sort: sort(Array, Sorting Type) // Work Only With Indexed Array
 * RSort: rsort(Array, Sorting Type) // Work Only With Indexed Array In Reverse
 */

$langs = array(
    "Html",
    "10", // String Not Number
    "Css",
    25,
    "PHP",
    20,
    "Js",
    15
);

echo "<pre>";
print_r($langs);
echo "</pre>";

sort($langs, SORT_STRING);

echo "<pre>";
print_r($langs);
echo "</pre>";

rsort($langs, SORT_REGULAR);

echo "<pre>";
print_r($langs);
echo "</pre>";