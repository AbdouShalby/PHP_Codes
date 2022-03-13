<?php

/*
 * Str_Repeat: str_repeat(String, Repeat) Repeat String Like You Need
 * Str_Shuffle: str_shuffle(String) Shuffle String Letters
 * Str_Len: strlen(String) Count String Length
 */

$str = "Abdou <br>";
$repeat = str_repeat($str, 20);
echo $repeat;

$str2 = "Abdou";
$shuffle = str_shuffle($str2);
echo $shuffle; // Refresh The Browser Many Times To See The Result

$str3 = "Abdou Shalby";
$length = strlen($str3);
echo $length;