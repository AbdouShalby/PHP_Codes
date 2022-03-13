<?php

/*
 * String To Lower: strtolower(String) // Make All String Lower Case
 * String To Upper: strtoupper(String) // Make All String Upper Case
 * Lower Case First: lcfirst(String) // Make First Letter In String Lower Case
 * Upper Case First: ucfirst(String) // Make First Letter In String Upper Case
 * Upper Case Words: ucwords(String) // Make First Letter For Every Word In String Upper Case
 */

$str = "hello i love PHP so much";
echo $str . "<br>";

$lower = strtolower($str);
echo $lower . "<br>";

$upper = strtoupper($str);
echo $upper . "<br>";

$lcfirst = lcfirst($str);
echo $lcfirst . "<br>";

$ucfirst = ucfirst($str);
echo $ucfirst . "<br>";

$ucwords = ucwords($str);
echo $ucwords . "<br>";