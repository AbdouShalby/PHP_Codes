<?php

/*
 * Array Fill: array_fill(Index, Number, Value) // Index To Start // Number To Add // Value To Fill <- 3 Are Required
 */

$array = array_fill(2, 10, array_fill(5, 10, array_fill(10, 10, "Abdou")));

echo "<pre>";
print_r($array);
echo "</pre>";