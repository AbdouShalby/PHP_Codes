<?php

/*
 * String String: strstr(String, Search, BeforeSearch <- Optional Default Value Is False That's Mean Get Searched And All String After It, If It Changed To True Is Will Get Searched And All String Before It)
 *
 * String InSensitive String: stristr(String, Search, BeforeSearch <- Optional Default Value Is False That's Mean Get Searched And All String After It, If It Changed To True Is Will Get Searched And All String Before It)
 *
 * strchr <- Alias For strstr
 */

$str = "I Love PHP So Much Because PHP Is Cool";
$char = strstr($str, "PHP", true);
$char2 = stristr($str, "pHp");
echo $char . "<br>";
echo $char2 . "<br>";

$str2 = "Abdou@Gmail.Com";
$char3 = strstr($str2, "@", true);
$char4 = strstr($str2, "@");
echo $char3 . "<br>";
echo $char4 . "<br>";
echo str_replace("@", "", $char4) . "<br>";