<?php

/*
 * Str_Replace: str_replace(Search, Replace, String Or Subject, Count <- Optional)
 */

$str = "I Love PHP Too Much Because PHP Is Good And Easy Language And PHP Is Famous";

echo $str . "<br><br>";

// Replace PHP With JavaScript Inside The Array
$str = str_replace(array("PHP", "Is", "Easy"), "Replaced", $str);
echo $str . "<br><br>";

$str2 = "I Love PHP Too Much Because PHP Is Good And Easy Language And PHP Is Famous";
$str2 = str_replace("PHP", "JS", $str2);
echo $str2 . "<br><br>";

$str3 = "I-Love-PHP-Too*Much*Because*PHP/Is/Good/And-Easy*Language/And+PHP+Is+Famous";
$str3 = str_replace(array("-", "*", "/", "+"), array("_", "~", "£", "&"), $str3);
echo $str3 . "<br><br>";

$str4 = "Line 1\nLine 2\n\rLine 3\nLine 4\r"; // Check Inspect To See The Result
$order = array("\n", "\n\r", "\r");
echo $str4 . "<br>";
$str4 = str_replace($order, "<br />", $str4);
echo $str4;