<?php

/*
 * Syntax:
 * while ( Expression ) {
 *    // Statement To Execute
 * }
 */

$i = 1;
while ($i <= 5) {
    echo $i++ . "<br>";
}

$i = 1;
while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}

$i = 1;
while ($i <= 5):
    echo $i . "<br>";
    $i++;
endwhile;