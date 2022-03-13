<?php

/*
 * Associative Array
 * Syntax :
 * array(
 * Key1 => Value1,
 * Key2 => Value2,
 * Key3 => Value3
 * );
 *
 * Key Accepted Inter And String Only .
 * Key Must Be Unique
 * Value Is Mixed => Any DataTypes
 */

$langs = array(
    "Html"      => "60%",
    "Html5"     => "70%",
    "Css"       => "65%",
    "Css3"      => "60%",
    "JS"        => "65%",
    "PHP"       => "80%",
    "Python"    => "90%",
    "Ruby"      => "40%"
);
$langs["MySQL"] = "75%"; // To Add Key And Value Inside Associative Array

echo "<pre>";
print_r($langs);
echo "</pre>";

echo "<h2>Loop Inside Associative Array With Foreach Key And Value</h2>";
echo "<ul>";
foreach ($langs as $lang => $progress) {
    echo "<li>" . $lang . " => " . $progress . "</li>";
}
echo "</ul>";