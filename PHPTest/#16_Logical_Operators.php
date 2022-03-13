<?php

/*
 * Logical Operators
 * [ and ] Condition 1 And Condition 2 And Condition 3
 * [ && ] <- And Condition 1 And Condition 2 And Condition 3
 * [ xor ] One Condition Is True But Not All
 * [ or ] Any Condition Or All Is True
 * [ || ] <- Or Any Condition Or All Is True
 * [ ! ] Not
 */

$age = 30;
$skillYears = 5;
$haveCar = "Yes";
if ($age > 28 and $skillYears > 4 and $haveCar === "Yes") {
    echo "Accepted From And <br>";
} else {
    echo "Refused From And <br>";
}


if ($age > 28 && $skillYears > 4 && $haveCar === "Yes") {
    echo "Accepted From && <br>";
} else {
    echo "Refused From && <br>";
}


if ($age > 28 xor $skillYears > 5) {
    echo "Accepted From xor <br>";
} else {
    echo "Refused From xor <br>";
}


if ($age > 40 or $skillYears > 6 or $haveCar = "Yes") {
    echo "Accepted From or <br>";
} else {
    echo "Refused From or <br>";
}


if ($age > 40 || $skillYears > 6 || $haveCar = "Yes") {
    echo "Accepted From || <br>";
} else {
    echo "Refused From || <br>";
}


$var = "Name";
if ( !($var === "Abdou") ) {
    echo "True";
}