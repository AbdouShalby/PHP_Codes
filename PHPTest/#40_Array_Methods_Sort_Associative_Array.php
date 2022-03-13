<?php

/*
 * ASort: asort(Array, Sorting Type) // Work Only With Associative Array To Soring Value Not Key
 * ARSort: arsort(Array, Sorting Type) // Work Only With Associative Array To Soring Value Not Key In Reverse
 * KSort: ksort(Array, Sorting Type) // Work Only With Associative Array To Soring Value Not Key
 * kRSort: krsort(Array, Sorting Type) // Work Only With Associative Array To Soring Value Not Key In Reverse
 */

$langs = array(
    "Html"  => 80,
    "Html5" => 70,
    "Css"   => 45,
    "Css3"  => 90,
    "Js"    => 95,
    "PHP"   => 30
);

echo "<pre>";
print_r($langs);
echo "</pre>";

asort($langs, SORT_REGULAR);

echo "<pre>";
print_r($langs);
echo "</pre>";

arsort($langs, SORT_REGULAR);

echo "<pre>";
print_r($langs);
echo "</pre>";

ksort($langs, SORT_REGULAR);

echo "<pre>";
print_r($langs);
echo "</pre>";

krsort($langs, SORT_REGULAR);

echo "<pre>";
print_r($langs);
echo "</pre>";