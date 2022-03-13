<?php

/*
 * Include <- Call The File If The File Is Not Found It Will Make Warning Only And Continue All Codes
 * Include_Once <- Call The File If It Is Not Called Before
 * Require <- Work Like Include Call The File If The File Is Not Found It Will Stop All Codes
 * Require_Once <- Call The File If It Is Not Called Before
 */

include "GlobalForTest.php";
include_once "GlobalForTest.php";
echo $pageName . "<br>";
echo "Hello <br>";

require "GlobalForTest.php";
require_once "GlobalForTest.php";
echo $pageName . "<br>";
echo "Hello <br>";