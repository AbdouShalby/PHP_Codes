<?php

/*
 * Sub String Count: substr_count(String, SubString, Start <- Optional, Length <- Optional) // Tell You How Many SubString In String
 * Sun String Compare: substr_compare(String1, String2, Start Position In String1, Length <- Optional, Case <- Optional By Default False)
 */

$str = "I Love PHP So Much Because PHP Is Cool And Easy That's Why PHP Is The Best";

$count = substr_count($str, "PHP");
echo $count . "<br>";


$str1 = "A abdou";
$str2 = "Abdou";

echo substr_compare($str1, $str2, 2, 5, true);