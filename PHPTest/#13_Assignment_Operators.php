<?php

/*
 * Assignment Operators
 */
$var1 = 100;
$var2 = 200;
$var3 = $var1 + $var2 . "<br>";
echo $var3;

$var1 += 200;
// $var1 = Last Value For $var1 + 200;
echo $var1 . "<br>";
// Plus Equal Get The Value For Variable And Addition The Next Value On It

$var1 -= 50;
// $var1 = Last Value For $var1 + 50;
echo $var1 . "<br>";
// Subtract Get The Value For Variable And Subtraction The Next Value On It

$currency = 100; // 100 Dollar
$currency *= 16.5; // $currency = Last Value For $currency * 16.5 Dollar Price = 1650
$currency .= " EGP"; // Concatenate This To Value
echo $currency . "<br>";

$c = 100;
$c /= 20; // $c = Last Value For $c / 20 = 5
echo $c;