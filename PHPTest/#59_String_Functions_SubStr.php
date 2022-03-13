<?php

/*
 * Sub String: substr(String, Start, Length <- Optional)
 */

$str = "I Love PHP So Much Because PHP Is Famous And Cool";
echo $str . "<br>";

$piece = substr($str, 18);
echo $piece . "<br>";

$piece2 = substr($str, 26, 4);
echo $piece2 . "<br>";

$piece3 = substr($str, -22, 4);
echo $piece3 . "<br>";

$piece4 = substr($str, -22, -18);
echo $piece4 . "<br>";