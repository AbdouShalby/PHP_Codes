<?php

/*
 * Array Reverse: array_reverse(Array, Preserve <- By Default Is False) // Only Reverse Elements Inside Array Not Sorting / Preserve Is Optional If It Changed To True That Keep The Index Number After Reserved
 * Shuffle: shuffle(Array)
 */

$langs = array(
    "PHP",
    "Html",
    "Css",
    "Html5",
    "Css3",
    "Js"
);

echo "<pre>";
print_r($langs);
echo "</pre>";

$reversed = array_reverse($langs, true);

echo "<pre>";
print_r($reversed);
echo "</pre>";

shuffle($langs);

echo "<pre>";
print_r($langs); // To See The Result Make Refresh Many Times
echo "</pre>";