<?php

date_default_timezone_set("Africa/Cairo");

/*
 * String To Time: strtotime(dateTime, baseTimeStamp[Now] <- Optional);
 * Date Time :
 * Now
 * +x Day
 * +x Week
 * +x Month
 * +x Year
 * +x Hour
 * +x Mint
 * +x Sec
 */

$oldWay = time() + (5 * 365 * 24 * 60 * 60);

$newWay = strtotime("+ 5 years 1 month 2 days 10 hours");
echo date("Y-m-d h:i:s A", $newWay) . "<br>";

$nextFriday = strtotime("next Friday 15 hours");
echo date("Y-m-d H:i:s", $nextFriday) . "<br>";

$lastFriday = strtotime("last Friday 15 hours");
echo date("Y-m-d H:i:s", $lastFriday) . "<br>";