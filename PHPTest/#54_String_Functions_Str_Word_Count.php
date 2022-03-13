<?php

/*
 * String Word Count: str_word_count(String, Format Or Return <- Optional Default Value 0, CharacterList <- Optional) // Count How Many Words In String Not Count Special Characters
 * Format: 0 => Return Words Count, 1 => Return As Indexed Array, 2 => Return As Associative Array Key Is Word Position
 * CharacterList: Tell Code About Special Characters I Want To Count Too
 */

$str = "I Love PHP So Much & Although JavaScript";
echo $str . "<br>";
$count = str_word_count($str, 2, "&");

echo "<pre>";
print_r($count);
echo "</pre>";

//echo $count . "<br>";