<?php

/*
 * Str_Split: str_split(String, Length <- Optional And Default Value Is 1) // Make A String Split And Convert It To Array
 * Chunk_Split: chunk_split(String, Length <- Optional And Default Value Is 76, End <- Optional And Default Value Is \r\n) // Make A String Split
 */

$str = "Hello I Love PHP";

echo $str . "<br>";

$arr = str_split($str, 5);

echo "<pre>";
print_r($arr);
echo "</pre>";



echo $str . "<br>";

$arr2 = chunk_split($str, 1, "-");

echo $arr2;
