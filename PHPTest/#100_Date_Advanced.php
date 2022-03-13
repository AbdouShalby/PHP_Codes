<?php


date_default_timezone_set("Africa/Cairo");

/*
 * date(Format, TimeStamp <- Optional);
 * https://www.php.net/manual/en/datetime.format.php
 */

echo "Copyright To Abdou &copy 2020-" . date("Y") . "<br>";

echo "This Month Is: " . date("m") . "<br>";

echo "This Day Is: " . date("d") . "<br>";

echo "Time Now Is " . date("h:i:s"). "<br>";

echo date("l jS \of F Y h:i:s A") . "<br><br>";

$afterSixMonths = time() + (6 * 30 * 24 * 60 * 60);
echo "After 6 Months From Now Time And Date Will Be : " . date("l jS \of F Y h:i:s A", $afterSixMonths) . "<br>";