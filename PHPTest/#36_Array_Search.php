<?php

/*
 * Array Search
 */

$array = array(
    "Html",
    "Css",
    "PHP",
    "Js",
    "MySQL",
    "Ruby",
    "Python",
);

// in_array( Needle, Haystack, Type <- By Default Is False ) <- Function To Check If The Item Inside Array Or Not
if (in_array("PHP", $array, true /* <- True Mean Check Item Identical Value And Type */)){
    echo "Yes Its Exist <br>";
}

// array_search( Needle, Haystack, Type <- By Default Is False ) <- Function To Check If The Item Inside Array Or Not
$lang = array_search("Css", $array, true);
echo "Yes Its Found In Index " . $lang . " And The Value Is " . $array[$lang].  "<br>";

// array_key_exists( Needle, Haystack )
if (array_key_exists(3, $array)) { // You Can Type Index Number For Indexed Arrays Or Key For Associative Array
    echo "Yes Its Found " . $array[3];
}