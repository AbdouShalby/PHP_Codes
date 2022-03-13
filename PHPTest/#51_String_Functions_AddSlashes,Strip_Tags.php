<?php

/*
 * Add Slashes: addslashes(String) // Make BackSlash For Characters Who Make Security Error In DataBase
 * Strip Slashes: stripslashes(String) // Remove BackSlash From Elements Contain BackSlash
 * Strip Tags: strip_tags(String, Allow <- Optional) // Remove Coding Tags
 */

$str = "I Will 'Go' At 6 O'Clock";
echo $str . "<br>";
$skipped = addslashes($str);
echo $skipped . "<br>";

$clean = stripslashes($skipped);
echo $clean . "<br>";

$str1 = "I Love <b>PHP</b> Go To <a href='php.net'>PHP.Net</a> <i>To Learn PHP</i>";
echo $str1 . "<br>";
$stripped = strip_tags($str1, "<b><i>");
echo $stripped;