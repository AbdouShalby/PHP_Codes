<?php

/*
 * Increment / Decrement Operators
 *
 * [ ++$var ] Pre Increment ( Addition 1 On Main Value And Print Value And Reassign It To Value )
 * [ $var++ ] Post Increment ( Print Value And Addition 1 On Main Value And Reassign It To Value )
 *
 * [ --$var ] Pre Decrement ( Subtraction 1 On Main Value And Reassign It To Value )
 * [ $var-- ] Post Increment ( Print Value And Subtraction 1 On Main Value And Reassign It To Value )
 */

$var = 10;
echo "<h2>Pre Increment</h2>";
echo ++$var . "<br>";
echo ++$var . "<br>";
echo ++$var . "<br>";
echo ++$var . "<br>";
echo ++$var . "<br>";

echo "<br>";

$var2 = 20;
echo "<h2>Post Increment</h2>";
echo $var2++ . "<br>";
echo $var2++ . "<br>";
echo $var2++ . "<br>";
echo $var2++ . "<br>";
echo $var2++ . "<br>";

echo "<br>";

$var3 = 30;
echo "<h2>Pre Decrement</h2>";
echo --$var3 . "<br>";
echo --$var3 . "<br>";
echo --$var3 . "<br>";
echo --$var3 . "<br>";
echo --$var3 . "<br>";

echo "<br>";

$var4 = 40;
echo "<h2>Post Increment</h2>";
echo $var4-- . "<br>";
echo $var4-- . "<br>";
echo $var4-- . "<br>";
echo $var4-- . "<br>";
echo $var4-- . "<br>";