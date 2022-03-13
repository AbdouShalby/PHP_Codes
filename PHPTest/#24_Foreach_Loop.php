<?php

/*
 * Syntax [ 1 ] For Indexed Arrays
 * foreach ( $array as $value ) {
 *    // Code To Be Executed
 * }
 *
 * Syntax [ 2 ] For Associative Arrays
 * foreach ( $array as $key => $value ) {
 *    // Code To Be Executed
 * }
 */

$countries = array("Egypt", "Saudi Arabia", "Qatar", "Bahrain", "Syria", "Sudan", "Palestine");
foreach ($countries as $value) {
    echo $value . "<br>";
}

$countries = array(
    "EG" => "Egypt",
    "SA" => "Saudi Arabia",
    "QA" => "Qatar",
    "BA" => "Bahrain",
    "SY" => "Syria",
    "SU" => "Sudan",
    "PA" => "Palestine"
);
foreach ($countries as $key => $value) {
    echo $key . " => " . $value . "<br>";
}