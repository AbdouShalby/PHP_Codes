<?php

/*
 * Syntax:
 * do {
 *    // Statement To Execute
 * } while ( Expression )
 */

$i = 1;
do {
    echo $i . "<br>";
    $i ++;
} while ($i <= 5);

$i = 1;
do {
    echo $i++ . "<br>";
} while ($i <= 5);