<?php

/*
 * $_SERVER: Super Global Variable Give You Information About Host
 */

echo $_SERVER["SERVER_NAME"] . "<br>";

if ($_SERVER["SERVER_NAME"] === "localhost") {
    echo "Your IP Is 127.0.0.1" . "<br>";
}

echo $_SERVER["QUERY_STRING"] . "<br>"; // Print All Query After ? In Link Address

echo $_SERVER["HTTP_REFERER"] . "<br>"; // Tell You Where Are You Come From

echo $_SERVER["SERVER_PORT"] . "<br>"; // To Know Your Server Port

//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";