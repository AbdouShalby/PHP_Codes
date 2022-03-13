<?php

/*
 * Compare Functions
 *
 * String Compare: strcmp(String1, String2)
 * Result Options :
 * 0 -> Two String Are Equals
 * > 0 -> First String Is Larger Than Second
 * < 0 -> First String Is Less Than Second
 *
 * String Number Compare: strncmp(String1, String2, Compare Length <- How Many Indexes In Compare)
 * 0 -> Two String Are Equals
 * > 0 -> First String Is Larger Than Second
 * < 0 -> First String Is Less Than Second
 *
 * String Reverse: strrev(String)
 */

$str1 = "PHP";
$str2 = "PHP";
echo strcmp($str1, $str2) . "<br>";

$str3 = "PHP PHP";
$str4 = "PHP";
echo strcmp($str3, $str4) . "<br>";

$str5 = "PHP";
$str6 = "PHP PHP PHP";
echo strcmp($str5, $str6) . "<br>";

$str7 = "PHP";
$str8 = "PHP PHP PHP";
echo strncmp($str7, $str8, 6) . "<br>";

$str7 = "PHP PHP PHP";
$str8 = "PHP";
echo strncmp($str7, $str8, 6) . "<br>";

$name = "Abdou";
echo $name. "<br>";
echo strrev($name) . "<br>";