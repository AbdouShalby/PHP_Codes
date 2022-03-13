<?php

/*
 * Indexed Array
 * Syntax : array(Element, Element, Element);
 * To See The Array Element You Can't Use echo, You Should Use print_r
 * Indexed Array Start From 0 Index Not 1
 * Element Can Contain All Types Of Data
 */

$workers = array("Ahmed", false /* False = 0 And Print None */, "Ali", 55, "Abdou", "Mohamed", "Ashraf", 44.3); // That's A Way We Can Make Array With It

$workers[2] = "Change It";
$workers[] = "Sayed";
$workers[5] = ["Aisha", "Hagar", "Khadija"]; // Always Can Contain Arrays
$workers[] = true; // True = 1
$workers[] = 7.5;
// That's Another Way We Can Make Array With It And Change The Index Of Element And We Can Use This Way To Make OverWrite On Element Of Array

echo "<pre>"; // Pre Formatted Code, This Code Used To Make Array Is More Readable
print_r($workers);
echo "</pre>";
echo $workers[3]; // That's How We Print 1 Element From Array


$langs = array("Html", "Html5", "Css", "Css3", array("JS", "jQuery", "AngularJS", "Ajax"), "PHP", "Python", "Ruby", "MySQL");
echo "<pre>";
print_r($langs);
echo "</pre>";
echo $langs[4][2]; // That How To Print Array Inside Array

echo "<br><h2>Loop Inside Array With Foreach</h2>";
$langs1 = array("html", "Html5", "Css", "Css3", "JS", "PHP", "Python", "Ruby");
$langs1[0] = "HTML"; // To Change Element Inside Array With Index Number
$langs1[] = "MySQL"; // To Add Element Inside Array
$langs1[] = ""; // To Empty Element Value Inside Array

echo "<ul>";
foreach ($langs1 as $lang) {
    echo "<li>" . $lang . "</li>";
}
echo "</ul>";


echo "<br><h2>Loop Inside Array With For</h2>";
$langs2 = array("Html", "Html5", "Css");
// echo count($langs2) . " Elements"; // To Know How Many Element Inside Array Not How Many Indexes
echo "<ul>";
for ($l = 0; $l < count($langs2); $l++) {
    echo "<li>" . $langs2[$l] . "</li>";
}
echo "</ul>";