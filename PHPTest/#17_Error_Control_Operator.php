<?php

/*
 * [ @ ] Error Control Operator
 */

$file = @fopen("Text.txt" /* If File Name Is Wrong It Will Stop And Print Error Message -> */, "r") or die("This Is File Is Not Found");

(@include("Inc.php" /* If File Name  Is Wrong It Will Stop And Print Error Message -> */)) or die("This Is File Is Not Found");

$server = "localhost";
$user   = "root";
$pass   = "22";
$db     = "test";
@mysqli_connect($server, $user, $pass, $db) or die("<br>There's Something Wrong With Connection");