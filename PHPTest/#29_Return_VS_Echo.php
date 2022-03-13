<?php

/*
 * Return VS Echo
 */

$views = 100;
function increaseViews($views) {
    echo $views + 1;
    echo "<br>";
}
increaseViews($views);
var_dump( increaseViews($views) );

echo "<br>";

$views1 = 200;
function increaseViews1($views1) {
    echo "<br>";
    return $views1 + 2;
}
echo increaseViews1($views1);
var_dump( increaseViews1($views1) );