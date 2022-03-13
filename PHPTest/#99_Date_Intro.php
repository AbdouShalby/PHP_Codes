<?php

date_default_timezone_set("Africa/Cairo");

/*
 * date(Format, TimeStamp <- Optional);
 */

$nextWeek = time() + (7 * 24 * 60 * 60);

echo date("Y-m-d h:i:s", $nextWeek) . "<br>";