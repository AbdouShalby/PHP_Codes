<?php

/*
 * for ( Exp1, Exp2, Exp3 ) {
 *    // Code
 * }
 *
 * while ( Exp1 ) {
 *    // Code
 * }
 *
 * do {
 *    // Code
 * } while ()
 *
 * foreach ( $array as $value ) { // Indexed Array
 *    // Code
 * }
 *
 * foreach ( $array as $key => $value ) { // Associative Array
 *    // Code
 * }
 */

for ($i = 1; $i <= 5; $i++) {
    echo "For Loop " . $i . "<br>";
}

$i = 1;
for (;;) {
    if ($i > 5){
        break;
    }
    echo "Advanced For Loop " . $i . "<br>";
    $i++;
}

$i = 1;
while ($i <= 5) {
    echo "While Loop " . $i . "<br>";
    $i++;
}

$i = 1;
do {
    echo "Do While Loop " . $i . "<br>";
    $i++;
} while ($i <= 5);

$friends = array("Abdou", "Joury", "Mizo", "Mostafa", "Zika");
foreach ($friends as $value) {
    echo "Foreach Indexed Array Loop " . $value . "<br>";
}

$friends = array(
    "Ab" => "Abdou",
    "Jo" => "Joury",
    "Mi" => "Mizo",
    "Mo" => "Mostafa",
    "Zi" => "Zika"
);
foreach ($friends as $key => $value) {
    echo "Foreach Associative Array Loop " . $key . " => " . $value . "<br>";
}