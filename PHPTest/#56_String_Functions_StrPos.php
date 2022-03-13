<?php

/*
 * String Position: strpos(String, Find <- Case Sensitive, Offset <- Optional Index To Start In)
 * String InSensitive Position: stripos(String, Find <- Case InSensitive, Offset <- Optional Index To Start In)
 * String Right Position: strrpos(String, Find <- Case Sensitive, Offset <- Optional Index To Start In) // Search From Right To Left But Position Start From Left 0 Index
 * String InSensitive Right Position: strripos(String, Find <- Case InSensitive, Offset <- Optional Index To Start In) // Search From Right To Left But Position Start From Left 0 Index
 */

$str = "I Love PHP So Mush Because PHP Is Famous And Cool Language";
$pos = strpos($str, "PHP", 8); // <- 8 Is Start Index
echo $pos . "<br>";

$pos1 = stripos($str, "php", 8); // <- 8 Is Start Index
echo $pos1 . "<br>";

$pos2 = strrpos($str, "PHP", -32);
echo $pos2 . "<br>";

$pos3 = strripos($str, "php", -32);
echo $pos3 . "<br>";