<?php

/*
 * Super Global
 *
 */

// Global Scope

$name = "Abdou"; // In Global Scope

function testFunc() {
    // Function Scope
    $name = "Mohamed"; // In Function Scope
    // $GLOBALS["name"] = "Ahmed";
    // echo $GLOBALS["name"]; // $GLOBALS[index]
    echo "Function Local Name Is: " . $name . "<br>";
    echo "Global Name Is: " . $GLOBALS["name"];
}
testFunc();

// echo $name;