<?php

/*
 * Array_Pop: array_pop(Array) // Delete The Last Element Of Array
 * Array_Shift array_shift(Array) // Delete The First Element Of Array
 */

$langs = array(
    "Html",
    "Css",
    "PHP",
    "Js"
);

echo "<pre>";
print_r($langs);
echo "</pre>";

$last_lang = array_pop($langs);

echo "<pre>";
print_r($langs);
echo "</pre>";

echo $last_lang;

$first_lang = array_shift($langs);

echo "<pre>";
print_r($langs);
echo "</pre>";
echo $first_lang;