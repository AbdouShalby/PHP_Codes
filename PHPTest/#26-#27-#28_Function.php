<?php

/*
 * Syntax:
 * function identifier($arg1, $arg2, $arg3) {
 *    // Function Body
 *    return;
 * }
 * function is reusable
 * function is not case-sensitive
 */

//$var = "Abdou";
//echo gettype($var); // gettype is builtin function

// Basic Function Without Argument
function countFromOneToFive() {
    for($i = 1; $i <= 5; $i++){
        echo $i . "<br>";
    }
}
countFromOneToFive(); // self invoke

// Function With Argument
function sayHello($name, $age) {
    echo "Hello " . $name . " How Are You Today? <br>";
    echo "Your Age Is : " . $age . "<br>";
}
sayHello("Abdou", "24");

function calculateSalaryInDays($name, $days) {
    echo "Hello " . $name . " Your Salay Is " . ($days * 100) . "<br>";
}
calculateSalaryInDays("Abdou", "70");

function generateDate($start, $end, $name) {
    echo "<select name='$name'>";
    for ($date = $start; $date <= $end; $date++) {
        echo "<option value='$name'>" . $date . "</option>";
    }
    echo "</select>";
}
generateDate(1900, 2021, "year");
generateDate(1, 12, "month");
generateDate(1, 31, "day");

function calculateYourAgeInDays($name, $age) {
    echo "<br>";
    echo "Hello " . $name . " Your Age In Days Is : " . ($age * 365) . " Days";
    echo "<br>";
}
calculateYourAgeInDays("Abdou", "24");

// Function With Argument + Return
function calculateAge($age) {
    echo "Your Age : ";
    return $age * 365; // Any Code After Return Will Be Stop Executed
    echo "Hello";
}
echo calculateAge("24");