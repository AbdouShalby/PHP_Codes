<?php

/*
 * Comparison Operators
 * [ == ] Equals ( Value Equal Value )
 * [ === ] Identical ( Value And DataType Equal Value And DataType )
 * [ != ] Not Equals ( Value Not Equal Value )
 * [ <> ] Not Equals ( Value Not Equal Value )
 * [ !=== ] Not Identical ( Value And DataType Not Equal Value And DataType )
 * [ < ] Less Than ( Value Less Than Value )
 * [ <= ] Less Than Or Equals ( Value Less Than Or Equals Value )
 * [ > ] Larger Than ( Value Larger Than Value )
 * [ >= ] Larger Than Or Equals ( Value Larger Than Or Equals Value )
 */

$a = 100;
$b = "100";

if ($a == $b) { // Equals
    echo "True From Equals <br>";
} else {
    echo "False From Equals <br>";
}


if ($a === $b) { // Identical
    echo "True From Identical <br>";
} else {
    echo "False From Identical <br>";
}


if ($a != $b) { // Not Equals
    echo "True From Not Equals <br>";
} else {
    echo "False From Not Equals <br>";
}


if ($a !== $b) { // Not Identical
    echo "True From Not Identical <br>";
} else {
    echo "False From Not Identical <br>";
}

if ($a < $b) { // Less Than
    echo "True From Less Than <br>";
} else {
    echo "False From Less Than <br>";
}

if ($a <= $b) { // Less Than Or Equals
    echo "True From Less Than Or Equals <br>";
} else {
    echo "False From Less Than Or Equals <br>";
}

if ($a > $b) { // Larger Than
    echo "True From Larger Than <br>";
} else {
    echo "False From Larger Than <br>";
}

if ($a >= $b) { // Larger Than Or Equals
    echo "True From Larger Than Or Equals <br>";
} else {
    echo "False From Larger Than Or Equals <br>";
}